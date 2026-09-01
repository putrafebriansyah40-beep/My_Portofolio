"use client";
import React, { useState, useEffect } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { ChevronLeft, ChevronRight, Pause, Play } from 'lucide-react';

const activities = [
  { title: 'Sekretaris Umum', org: 'Forum Studi Islam Politeknik', period: '2025 - 2026', description: 'Menjadi tangan kanan Ketua Umum dan mengelola administrasi, surat menyurat organisasi.', type: 'work', icon: '🏛️', gradient: 'from-violet-500 via-purple-500 to-indigo-600', tag_color: 'bg-violet-500', number: '01' },
  { title: 'Anggota Multimedia Support', org: 'Lembaga Responsi Agama Islam', period: '2025 - 2026', description: 'Menyajikan berbagai informasi melalui media sosial untuk mahasiswa Politeknik Negeri Padang.', type: 'work', icon: '📡', gradient: 'from-sky-400 via-blue-500 to-indigo-600', tag_color: 'bg-blue-500', number: '02' },
  { title: 'Anggota Public Relationship', org: 'CyberTech', period: '2026 - Sekarang', description: 'Menjadi jembatan komunikasi antara organisasi dengan publik internal maupun eksternal.', type: 'work', icon: '🌐', gradient: 'from-rose-400 via-pink-500 to-fuchsia-600', tag_color: 'bg-pink-500', number: '03' },
  { title: 'D4 Teknologi Rekayasa Perangkat Lunak', org: 'Politeknik Negeri Padang', period: '2024 - Sekarang', description: 'GPA 3.37. Aktif mengembangkan kemampuan di bidang rekayasa perangkat lunak web & mobile.', type: 'education', icon: '🎓', gradient: 'from-emerald-400 via-teal-500 to-cyan-600', tag_color: 'bg-emerald-500', number: '04' },
  { title: 'SMA MIPA', org: 'SMA Negeri 1 Sungai Limau', period: '2021 - 2024', description: 'Lulus dengan fokus pada Ilmu Pengetahuan Alam.', type: 'education', icon: '📚', gradient: 'from-amber-400 via-orange-500 to-red-500', tag_color: 'bg-amber-500', number: '05' },
];

export default function Experience() {
  const [active, setActive] = useState(0);
  const [autoTour, setAutoTour] = useState(false);
  const total = activities.length;

  const next = () => setActive((prev) => (prev + 1) % total);
  const prev = () => setActive((prev) => (prev - 1 + total) % total);
  const goTo = (i: number) => {
    setActive(i);
    setAutoTour(false);
  };

  useEffect(() => {
    let timer: NodeJS.Timeout;
    if (autoTour) {
      timer = setInterval(next, 3500);
    }
    return () => clearInterval(timer);
  }, [autoTour]);

  return (
    <section id="experience" className="relative overflow-hidden bg-[#EBE6EF] flex flex-col min-h-screen">
      {/* Background Dots */}
      <div className="absolute inset-0 pointer-events-none overflow-hidden z-0">
        <div className="absolute top-[8%] left-[15%] w-3 h-3 rounded-full bg-purple-500/50"></div>
        <div className="absolute top-[22%] right-[12%] w-4 h-4 rounded-full bg-indigo-500/35"></div>
      </div>

      <div className="text-center relative z-10 pt-20 pb-8">
        <div className="inline-flex items-center px-7 py-2.5 bg-white/70 backdrop-blur-xl rounded-full border border-[#3A004D]/8 shadow-sm mb-6">
          <span className="text-[10px] font-mono uppercase tracking-[0.22em] text-purple-700 font-bold">Featured Highlights</span>
        </div>
        <h2 className="text-3xl md:text-5xl font-black text-slate-800 leading-tight">
          Milestones & <span className="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500">Achievements</span>
        </h2>
      </div>

      <div className="relative w-full max-w-6xl mx-auto flex items-center justify-center flex-1" style={{ height: '460px', perspective: '1200px' }}>
        {activities.map((act, i) => {
          const offset = (i - active + total) % total;
          let transform = '';
          let zIndex = 1;
          let opacity = 0;

          if (offset === 0) {
            transform = 'translateX(0px) translateZ(0) rotateY(0deg) scale(1)';
            zIndex = 30;
            opacity = 1;
          } else if (offset === 1) {
            transform = 'translateX(220px) translateZ(-80px) rotateY(-8deg) scale(0.78)';
            zIndex = 20;
            opacity = 0.9;
          } else if (offset === 2) {
            transform = 'translateX(380px) translateZ(-160px) rotateY(-12deg) scale(0.60)';
            zIndex = 10;
            opacity = 0.55;
          } else if (offset === total - 1) {
            transform = 'translateX(-220px) translateZ(-80px) rotateY(8deg) scale(0.78)';
            zIndex = 20;
            opacity = 0.9;
          }

          return (
            <div
              key={i}
              onClick={() => goTo(i)}
              className="absolute transition-all duration-700 ease-[cubic-bezier(0.34,1.56,0.64,1)] cursor-pointer select-none"
              style={{ transform, zIndex, opacity, pointerEvents: opacity > 0 ? 'auto' : 'none' }}
            >
              <div className={`rounded-[28px] overflow-hidden shadow-xl border border-white/60 bg-white ${i === active ? 'ring-2 ring-white/50' : ''}`} style={{ width: '360px' }}>
                <div className={`relative h-52 bg-gradient-to-br ${act.gradient} overflow-hidden`}>
                  <div className="absolute inset-0 flex items-center justify-center">
                    <span className={`text-7xl drop-shadow-md ${i !== active ? 'scale-75 opacity-80' : ''}`}>{act.icon}</span>
                  </div>
                  <div className="absolute top-4 left-4 px-3 py-1 bg-black/20 backdrop-blur-md rounded-full border border-white/20">
                    <span className="text-[9px] font-bold text-white uppercase tracking-[0.15em]">{act.type}</span>
                  </div>
                  <div className={`absolute top-4 right-4 w-9 h-9 rounded-xl ${act.tag_color} flex items-center justify-center shadow-lg border border-white/20 backdrop-blur-sm`}>
                    <span className="text-[11px] font-black text-white font-mono">#{act.number}</span>
                  </div>
                  <div className="absolute bottom-3 left-4 px-3.5 py-1.5 bg-white/20 backdrop-blur-lg rounded-xl border border-white/30">
                    <span className="text-[10px] font-mono font-bold text-white tracking-wider">{act.period}</span>
                  </div>
                </div>
                
                <div className="p-6 transition-all duration-500" style={{ maxHeight: i === active ? '200px' : '0', padding: i === active ? '24px' : '0 24px', opacity: i === active ? 1 : 0, overflow: 'hidden' }}>
                  <h3 className="text-base font-black text-slate-800 leading-snug mb-1.5">{act.title}</h3>
                  <p className="text-[11px] font-bold text-purple-600 uppercase tracking-widest mb-3">{act.org}</p>
                  <p className="text-[13px] text-slate-500 leading-relaxed">{act.description}</p>
                </div>
              </div>
            </div>
          );
        })}
      </div>

      <div className="flex flex-col items-center pb-16 z-10">
        <div className="flex items-center gap-2.5 mt-4 mb-5">
          {activities.map((_, i) => (
            <button key={i} onClick={() => goTo(i)} className={`rounded-full transition-all duration-300 ${active === i ? 'w-8 h-2.5 bg-purple-600' : 'w-2.5 h-2.5 bg-purple-300 hover:bg-purple-400'}`}></button>
          ))}
        </div>

        <div className="flex items-center gap-3">
          <button onClick={() => { prev(); setAutoTour(false); }} className="w-11 h-11 rounded-full bg-white/80 backdrop-blur-xl border border-purple-200 shadow-sm flex items-center justify-center hover:bg-white hover:scale-110 active:scale-95 transition-all">
            <ChevronLeft className="w-5 h-5 text-purple-800" />
          </button>
          
          <button onClick={() => setAutoTour(!autoTour)} className={`flex items-center gap-2.5 px-6 py-3 rounded-full border text-[11px] font-bold tracking-[0.15em] uppercase hover:scale-105 active:scale-95 transition-all duration-200 backdrop-blur-xl ${autoTour ? 'bg-white text-purple-800' : 'bg-purple-800 text-white'}`}>
            {autoTour ? <Pause className="w-4 h-4" /> : <Play className="w-4 h-4" />}
            <span>{autoTour ? 'Pause' : 'Auto Tour'}</span>
          </button>

          <button onClick={() => { next(); setAutoTour(false); }} className="w-11 h-11 rounded-full bg-white/80 backdrop-blur-xl border border-purple-200 shadow-sm flex items-center justify-center hover:bg-white hover:scale-110 active:scale-95 transition-all">
            <ChevronRight className="w-5 h-5 text-purple-800" />
          </button>
        </div>
      </div>
    </section>
  );
}
