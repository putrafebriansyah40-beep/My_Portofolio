"use client";
import React, { useState, useEffect } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { ChevronLeft, ChevronRight, Pause, Play } from 'lucide-react';
import { useLanguage } from '@/context/LanguageContext';

export default function Experience() {
  const { t, language } = useLanguage();
  const [active, setActive] = useState(0);
  const [autoTour, setAutoTour] = useState(false);

  const activities = [
    { 
      title: t('experience.activities.act1.title'), 
      org: 'Forum Studi Islam Politeknik', 
      period: '2025 - 2026', 
      description: t('experience.activities.act1.desc'), 
      type: 'work', 
      icon: '🏛️', 
      gradient: 'from-violet-500 via-purple-500 to-indigo-600', 
      tag_color: 'bg-violet-500', 
      number: '01' 
    },
    { 
      title: t('experience.activities.act2.title'), 
      org: 'Lembaga Responsi Agama Islam', 
      period: '2025 - 2026', 
      description: t('experience.activities.act2.desc'), 
      type: 'work', 
      icon: '📡', 
      gradient: 'from-sky-400 via-blue-500 to-indigo-600', 
      tag_color: 'bg-blue-500', 
      number: '02' 
    },
    { 
      title: t('experience.activities.act3.title'), 
      org: 'CyberTech', 
      period: '2026 - Sekarang', 
      description: t('experience.activities.act3.desc'), 
      type: 'work', 
      icon: '🌐', 
      gradient: 'from-rose-400 via-pink-500 to-fuchsia-600', 
      tag_color: 'bg-pink-500', 
      number: '03' 
    },
    { 
      title: t('experience.activities.act4.title'), 
      org: 'Politeknik Negeri Padang', 
      period: '2024 - Sekarang', 
      description: t('experience.activities.act4.desc'), 
      type: 'education', 
      icon: '🎓', 
      gradient: 'from-emerald-400 via-teal-500 to-cyan-600', 
      tag_color: 'bg-emerald-500', 
      number: '04' 
    },
    { 
      title: t('experience.activities.act5.title'), 
      org: 'SMA Negeri 1 Sungai Limau', 
      period: '2021 - 2024', 
      description: t('experience.activities.act5.desc'), 
      type: 'education', 
      icon: '📚', 
      gradient: 'from-amber-400 via-orange-500 to-red-500', 
      tag_color: 'bg-amber-500', 
      number: '05' 
    },
  ];

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
    <section id="experience" className="relative overflow-hidden bg-[#EBE6EF] dark:bg-[#0f0a18] flex flex-col min-h-screen transition-colors duration-300 ease-in-out">
      {/* Background Dots */}
      <div className="absolute inset-0 pointer-events-none overflow-hidden z-0">
        <div className="absolute top-[8%] left-[15%] w-3 h-3 rounded-full bg-purple-500/50"></div>
        <div className="absolute top-[22%] right-[12%] w-4 h-4 rounded-full bg-indigo-500/35"></div>
      </div>

      <div className="text-center relative z-10 pt-20 pb-8">
        <div className="inline-flex items-center px-7 py-2.5 bg-white/70 dark:bg-purple-900/20 backdrop-blur-xl rounded-full border border-[#3A004D]/8 dark:border-purple-500/20 shadow-sm mb-6">
          <span className="text-[10px] font-mono uppercase tracking-[0.22em] text-purple-700 dark:text-purple-300 font-bold">{t('experience.tag')}</span>
        </div>
        <h2 className="text-3xl md:text-5xl font-black text-slate-800 dark:text-white leading-tight">
          {t('experience.title')} <span className="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 dark:from-purple-400 dark:to-pink-400">{t('experience.titleHighlight')}</span>
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
              className="absolute transition-all duration-300 ease-[cubic-bezier(0.34,1.56,0.64,1)] cursor-pointer select-none"
              style={{ transform, zIndex, opacity, pointerEvents: opacity > 0 ? 'auto' : 'none' }}
            >
              <div className={`rounded-[28px] overflow-hidden shadow-xl border border-white/60 dark:border-white/10 bg-white dark:bg-slate-900 ${i === active ? 'ring-2 ring-white/50 dark:ring-purple-500/50' : ''}`} style={{ width: '100%', maxWidth: '360px', minWidth: '300px' }}>
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
                  <h3 className="text-base font-black text-slate-800 dark:text-white leading-snug mb-1.5">{act.title}</h3>
                  <p className="text-[11px] font-bold text-purple-600 dark:text-purple-400 uppercase tracking-widest mb-3">{act.org}</p>
                  <p className="text-[13px] text-slate-500 dark:text-slate-400 leading-relaxed">{act.description}</p>
                </div>
              </div>
            </div>
          );
        })}
      </div>

      <div className="flex flex-col items-center pb-16 z-10">
        <div className="flex items-center gap-2.5 mt-4 mb-5">
          {activities.map((_, i) => (
            <button key={i} onClick={() => goTo(i)} className={`rounded-full transition-all duration-300 ease-in-out ${active === i ? 'w-8 h-2.5 bg-purple-600 dark:bg-purple-400' : 'w-2.5 h-2.5 bg-purple-300 dark:bg-purple-900/50 hover:bg-purple-400 dark:hover:bg-purple-700'}`}></button>
          ))}
        </div>

        <div className="flex items-center gap-3">
          <button onClick={() => { prev(); setAutoTour(false); }} className="w-11 h-11 rounded-full bg-white/80 dark:bg-black/50 backdrop-blur-xl border border-purple-200 dark:border-purple-900/50 shadow-sm flex items-center justify-center hover:bg-white dark:hover:bg-black hover:scale-110 active:scale-95 transition-all">
            <ChevronLeft className="w-5 h-5 text-purple-800 dark:text-purple-300" />
          </button>
          
          <button onClick={() => setAutoTour(!autoTour)} className={`flex items-center gap-2.5 px-6 py-3 rounded-full border text-[11px] font-bold tracking-[0.15em] uppercase hover:scale-105 active:scale-95 transition-all duration-200 backdrop-blur-xl ${autoTour ? 'bg-white dark:bg-black text-purple-800 dark:text-purple-300 border-purple-200 dark:border-purple-800' : 'bg-purple-800 dark:bg-purple-700 text-white border-transparent'}`}>
            {autoTour ? <Pause className="w-4 h-4" /> : <Play className="w-4 h-4" />}
            <span>{autoTour ? t('experience.pause') : t('experience.autoTour')}</span>
          </button>

          <button onClick={() => { next(); setAutoTour(false); }} className="w-11 h-11 rounded-full bg-white/80 dark:bg-black/50 backdrop-blur-xl border border-purple-200 dark:border-purple-900/50 shadow-sm flex items-center justify-center hover:bg-white dark:hover:bg-black hover:scale-110 active:scale-95 transition-all">
            <ChevronRight className="w-5 h-5 text-purple-800 dark:text-purple-300" />
          </button>
        </div>
      </div>
    </section>
  );
}
