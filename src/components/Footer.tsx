"use client";
import React from 'react';
import { motion } from 'framer-motion';
import { ChevronUp, Code2, Paintbrush, Zap, Box, Triangle, Sparkles, Terminal } from 'lucide-react';
import { useLanguage } from '@/context/LanguageContext';

export default function Footer() {
  const { language } = useLanguage();
  const currentYear = new Date().getFullYear();

  const techs = [
    { name: 'Next.js', icon: <Triangle className="w-3 h-3 fill-current" /> },
    { name: 'TypeScript', icon: <Terminal className="w-3 h-3" /> },
    { name: 'Tailwind CSS', icon: <Paintbrush className="w-3 h-3" /> },
    { name: 'Framer Motion', icon: <Zap className="w-3 h-3" /> },
    { name: 'React Bits', icon: <Sparkles className="w-3 h-3" /> },
    { name: 'Vercel', icon: <Triangle className="w-3 h-3 fill-current rotate-180" /> },
  ];

  return (
    <footer className="bg-[#130022] text-white pt-16 pb-8 px-6 lg:px-12 relative overflow-hidden">
      {/* Background noise/pattern for texture */}
      <div className="absolute inset-0 pointer-events-none opacity-[0.03] bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:20px_20px]"></div>

      <div className="max-w-7xl mx-auto flex flex-col gap-12 relative z-10">

        {/* Top Row */}
        <div className="flex flex-col lg:flex-row justify-between items-center gap-10">

          {/* Left: Info */}
          <div className="flex flex-col items-center lg:items-start gap-1.5 text-center lg:text-left">
            <h3 className="font-extrabold text-xl tracking-wide">Febriansyah Putra</h3>
            <p className="text-xs text-purple-200/60 font-mono tracking-wider">
              Full Stack Developer &middot; Politeknik Negeri Padang
            </p>
          </div>

          {/* Center: Built With */}
          <div className="flex flex-col items-center gap-4">
            <p className="text-[10px] uppercase tracking-[0.2em] text-purple-300/60 font-bold">{language === 'en' ? 'Built With' : 'Dibuat Dengan'}</p>
            <div className="flex flex-wrap items-center justify-center gap-2 max-w-lg">
              {techs.map((tech, i) => (
                <div key={i} className="flex items-center gap-1.5 px-3 py-1.5 rounded-full border border-purple-500/20 bg-purple-500/10 text-[11px] font-medium text-purple-200 hover:bg-purple-500/20 transition-colors cursor-default">
                  {tech.icon}
                  {tech.name}
                </div>
              ))}
            </div>
          </div>

          {/* Right: Back to top */}
          <div className="flex items-center justify-center">
            <a href="#hero" className="text-xs font-bold text-purple-300/80 hover:text-white flex items-center gap-1.5 transition-colors group">
              {language === 'en' ? 'Back to top' : 'Kembali ke atas'}
              <span className="w-5 h-5 rounded-full bg-purple-500/20 flex items-center justify-center group-hover:bg-purple-500/40 transition-colors">
                <ChevronUp className="w-3 h-3" />
              </span>
            </a>
          </div>

        </div>

        {/* Divider */}
        <div className="w-full h-px bg-gradient-to-r from-transparent via-purple-500/20 to-transparent"></div>

        {/* Bottom Row */}
        <div className="flex flex-col sm:flex-row justify-between items-center gap-4 text-[10px] text-purple-200/40 font-mono tracking-wider">
          <p>{language === 'en' ? 'Designed & Developed by' : 'Didesain & Dikembangkan oleh'} Febriansyah Putra &middot; {currentYear}</p>
          <p>{language === 'en' ? 'Made with' : 'Dibuat dengan'} <span className="text-pink-500/70 animate-pulse">❤</span> {language === 'en' ? 'in' : 'di'} Padang, Indonesia</p>
        </div>

      </div>
    </footer>
  );
}
