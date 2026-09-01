"use client";
import React, { useEffect, useRef } from 'react';

export default function WaveBackground() {
  const canvasRef = useRef<HTMLCanvasElement>(null);

  useEffect(() => {
    const canvas = canvasRef.current;
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = canvas.width = window.innerWidth;
    let height = canvas.height = window.innerHeight;

    let mouseX = 0;
    let mouseY = 0;
    let targetMouseX = 0;
    let targetMouseY = 0;

    const handleMouseMove = (e: MouseEvent) => {
      // Relative to center
      targetMouseX = (e.clientX - width / 2) * 1.5;
      targetMouseY = (e.clientY - height / 2) * 1.5;
    };

    window.addEventListener('mousemove', handleMouseMove);
    
    const handleResize = () => {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
    };
    window.addEventListener('resize', handleResize);

    const particles: {x: number, z: number, y: number}[] = [];
    const SEPARATION = 50;
    const AMOUNTX = 70;
    const AMOUNTY = 70;

    // Create grid of particles
    for (let ix = 0; ix < AMOUNTX; ix++) {
      for (let iy = 0; iy < AMOUNTY; iy++) {
        particles.push({
          x: ix * SEPARATION - ((AMOUNTX * SEPARATION) / 2),
          z: iy * SEPARATION - ((AMOUNTY * SEPARATION) / 2),
          y: 0
        });
      }
    }

    let count = 0;
    let animationFrameId: number;

    const render = () => {
      ctx.clearRect(0, 0, width, height);

      // Smooth mouse movement interpolation (easing)
      mouseX += (targetMouseX - mouseX) * 0.05;
      mouseY += (targetMouseY - mouseY) * 0.05;

      count += 0.04; // Wave speed

      const cameraZ = 1200;
      const cameraY = 300;

      for (let i = 0; i < particles.length; i++) {
        const particle = particles[i];
        
        // Calculate wave height using sine waves
        particle.y = (Math.sin((particle.x / 300) + count) * 150) +
                     (Math.sin((particle.z / 300) + count) * 150);

        // Apply mouse movement to camera position
        const dx = particle.x - mouseX;
        const dy = particle.y - (cameraY + mouseY * 0.5); // Less vertical mouse influence
        
        // Push the grid back so it's entirely visible
        const zDistance = particle.z + 1500; 
        
        // 3D to 2D Projection
        const scale = cameraZ / (cameraZ + zDistance);
        
        if (scale > 0) {
          const x2d = width / 2 + dx * scale;
          const y2d = height / 2 + dy * scale + 150; // Offset downwards

          // Cull particles that are outside the screen bounds for performance
          if (x2d < -20 || x2d > width + 20 || y2d < -20 || y2d > height + 20) continue;

          // Calculate color based on depth (z)
          // Front (small z) -> Cyan, Back (large z) -> Purple
          const depthRatio = Math.max(0, Math.min(1, (particle.z + (AMOUNTY*SEPARATION)/2) / (AMOUNTY*SEPARATION)));
          
          // Interpolate between Cyan (0, 196, 204) and Purple (139, 79, 103)
          const r = Math.round(0 + depthRatio * 139);
          const g = Math.round(196 - depthRatio * 117);
          const b = Math.round(204 - depthRatio * 101);

          ctx.beginPath();
          // Dot size scales with depth
          ctx.arc(x2d, y2d, Math.max(0.5, 3.5 * scale), 0, Math.PI * 2);
          // Opacity fades out in the distance
          ctx.fillStyle = `rgba(${r}, ${g}, ${b}, ${scale * 1.2})`;
          ctx.fill();
        }
      }

      animationFrameId = requestAnimationFrame(render);
    };

    render();

    return () => {
      window.removeEventListener('mousemove', handleMouseMove);
      window.removeEventListener('resize', handleResize);
      cancelAnimationFrame(animationFrameId);
    };
  }, []);

  return (
    <div className="absolute inset-0 z-0 overflow-hidden pointer-events-none">
      {/* Base Background Color */}
      <div className="absolute inset-0 bg-[#EBE6EF] dark:bg-[#0f0a18] transition-colors duration-700 ease-in-out"></div>
      {/* Canvas for Interactive 3D Wave */}
      <canvas ref={canvasRef} className="absolute inset-0 w-full h-full opacity-80 mix-blend-multiply dark:mix-blend-screen"></canvas>
      {/* Gradient Overlay agar teks tetap terbaca dengan jelas */}
      <div className="absolute inset-0 bg-gradient-to-t from-[#EBE6EF]/50 dark:from-[#0f0a18]/50 via-transparent to-transparent transition-colors duration-700 ease-in-out"></div>
    </div>
  );
}
