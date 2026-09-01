"use client";
import React from 'react';
import { motion, useMotionValue, useTransform } from 'framer-motion';
import { ArrowRight, Download, MousePointer2 } from 'lucide-react';

import ShinyText from './ShinyText';
import WaveBackground from './WaveBackground';
import { useLanguage } from '@/context/LanguageContext';

export default function Hero() {
  const { t } = useLanguage();
  const marqueeItems = ['PHP & Laravel','JavaScript','React.js','Flutter','MySQL','Git & GitHub','Figma','Tailwind CSS','Java','SQL','REST API','Fotografi','Videografi','Desain Grafis','OOP','SDLC','VS Code'];
  
  // 3D Card effect
  const x = useMotionValue(0);
  const y = useMotionValue(0);
  const rotateX = useTransform(y, [-100, 100], [15, -15]);
  const rotateY = useTransform(x, [-100, 100], [-15, 15]);

  function handleMouse(event: React.MouseEvent<HTMLDivElement>) {
    const rect = event.currentTarget.getBoundingClientRect();
    x.set(event.clientX - rect.left - rect.width / 2);
    y.set(event.clientY - rect.top - rect.height / 2);
  }

  function handleMouseLeave() {
    x.set(0);
    y.set(0);
  }

  return (
    <section id="hero" className="relative flex min-h-screen flex-col overflow-hidden z-20 bg-transparent">
      <WaveBackground />
      {/* Top Marquee */}
      <div className="absolute top-0 left-0 w-full overflow-hidden z-20 py-4 pt-24">
        <div className="relative overflow-hidden border-y border-[#3A004D]/10 dark:border-white/10 py-3 bg-transparent"
             style={{ maskImage: 'linear-gradient(90deg,transparent,black 8%,black 92%,transparent)', WebkitMaskImage: 'linear-gradient(90deg,transparent,black 8%,black 92%,transparent)' }}>
          <div className="marquee-track flex w-max items-center gap-8">
            {[...marqueeItems, ...marqueeItems].map((item, i) => (
              <span key={i} className="flex items-center gap-8 whitespace-nowrap font-mono text-[11px] uppercase tracking-[0.12em] text-[#3A004D] dark:text-purple-300 font-semibold">
                {item}<span className="text-[#8B4F67] dark:text-purple-500" aria-hidden="true">·</span>
              </span>
            ))}
          </div>
        </div>
      </div>

      {/* Main 2-Column Content */}
      <div className="container relative z-10 mx-auto grid max-w-6xl grid-cols-1 items-center gap-12 px-4 pt-36 pb-24 lg:grid-cols-12 w-full my-auto">
        {/* Left: Text Content */}
        <div className="relative flex flex-col items-center text-center lg:col-span-7 lg:items-start lg:text-left justify-center">
          <div className="absolute -inset-6 sm:-inset-10 rounded-[4rem] pointer-events-none -z-10 backdrop-blur-sm bg-white/40 dark:bg-black/40" style={{ maskImage: 'radial-gradient(ellipse at center,black 45%,transparent 100%)' }}></div>

          <motion.div 
            initial={{ opacity: 0, y: 20 }}
            animate={{ opacity: 1, y: 0 }}
            transition={{ duration: 0.8, delay: 0.1 }}
            className="flex flex-col items-center lg:items-start space-y-6 w-full"
          >
            <div className="inline-flex items-center rounded-full border border-[#3A004D]/20 dark:border-purple-400/30 px-4 py-1.5 shadow-sm bg-[#3A004D] dark:bg-purple-900/50">
              <ShinyText text="Available for Internships & Projects" className="text-xs font-semibold text-white/90" speed={3} />
            </div>

            <h2 className="font-safira-style italic font-medium text-[clamp(2.2rem,5vw,4.2rem)] leading-[1.1] text-[#3A004D] dark:text-white drop-shadow-md dark:drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">
              Hi, I'm Febriansyah<br />Putra
            </h2>

            <div className="flex flex-wrap gap-2 justify-center lg:justify-start">
              <span className="text-xs px-3.5 py-1.5 bg-[#3A004D] dark:bg-purple-800 text-white font-medium rounded-full shadow-sm">{t('hero.role')}</span>
              <span className="text-xs px-3.5 py-1.5 bg-[#3A004D] dark:bg-purple-800 text-white font-medium rounded-full shadow-sm">UI/UX Designer</span>
              <span className="text-xs px-3.5 py-1.5 bg-[#3A004D] dark:bg-purple-800 text-white font-medium rounded-full shadow-sm">Laravel Expert</span>
            </div>

            <p className="max-w-2xl text-base text-[#3A004D]/80 dark:text-slate-300 md:text-lg font-medium leading-relaxed drop-shadow-sm">
              {t('hero.description')}
            </p>

            <div className="flex flex-wrap items-center justify-center gap-4 pt-4 lg:justify-start">
              <a href="#projects" className="inline-flex h-12 items-center justify-center rounded-full bg-[#3A004D] dark:bg-purple-600 px-6 font-semibold text-white transition-all hover:bg-[#8B4F67] dark:hover:bg-purple-500 shadow-md hover:shadow-xl">
                {t('hero.exploreWork')}
                <ArrowRight className="ml-2 h-4 w-4" />
              </a>
              <a href="/cv.pdf" target="_blank" className="inline-flex h-12 items-center justify-center rounded-full border-2 border-[#3A004D] dark:border-purple-500 bg-white dark:bg-transparent px-6 font-semibold text-[#3A004D] dark:text-purple-300 transition-all hover:bg-gray-100 dark:hover:bg-purple-500/10 shadow-sm hover:shadow-xl">
                {t('hero.downloadCv')}
                <Download className="ml-2 h-4 w-4" />
              </a>
            </div>
          </motion.div>
        </div>

        {/* Right: Photo (3D Tour Card) */}
        <motion.div 
          initial={{ opacity: 0, scale: 0.9 }}
          animate={{ opacity: 1, scale: 1 }}
          transition={{ duration: 0.8, delay: 0.3 }}
          className="relative lg:col-span-5 w-full flex flex-col items-center justify-center"
          style={{ perspective: 1000 }}
        >
          <div className="absolute -top-6 -right-6 bg-purple-500/10 text-purple-800 dark:text-purple-300 px-3 py-1.5 rounded-full text-xs font-bold font-mono tracking-widest backdrop-blur-md border border-purple-500/20 z-20 animate-bounce flex items-center gap-1.5 shadow-sm">
            <MousePointer2 size={12} /> Hover Me! (3D)
          </div>
          <motion.div 
            className="relative w-full max-w-md aspect-[4/3] rounded-2xl p-1 bg-gradient-to-tr from-[#3A004D]/30 via-[#8B4F67]/30 to-[#9E4ABB]/30 dark:from-purple-500/30 dark:via-fuchsia-500/30 dark:to-pink-500/30 shadow-2xl backdrop-blur-md border border-[#3A004D]/10 dark:border-white/10 cursor-pointer"
            style={{ rotateX, rotateY, transformStyle: "preserve-3d" }}
            onMouseMove={handleMouse}
            onMouseLeave={handleMouseLeave}
            whileHover={{ scale: 1.05 }}
            transition={{ type: "spring", stiffness: 400, damping: 30 }}
          >
            <div className="w-full h-full rounded-xl overflow-hidden bg-slate-200 dark:bg-slate-800 relative" style={{ transform: "translateZ(30px)" }}>
              <img 
                src="/profile.jpg" 
                alt="Febriansyah Putra" 
                className="w-full h-full object-cover"
                onError={(e) => {
                  (e.target as HTMLImageElement).style.display = 'none';
                  (e.target as HTMLImageElement).nextElementSibling?.classList.remove('hidden');
                }}
              />
              <div className="absolute inset-0 flex flex-col items-center justify-center text-center p-4 hidden">
                <span className="text-slate-500 font-medium text-sm">Foto belum ditambahkan.</span>
                <span className="text-slate-400 text-xs mt-1">Masukkan file "profile.jpg" ke dalam folder "public"</span>
              </div>
            </div>
          </motion.div>
        </motion.div>
      </div>
    </section>
  );
}
