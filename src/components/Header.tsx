"use client";
import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';
import { Sparkles, User, Box, Cpu, BarChart, Briefcase, Send, ArrowUpRight, Moon, Sun, Languages } from 'lucide-react';
import { useTheme } from 'next-themes';
import { useLanguage } from '@/context/LanguageContext';

export default function Header() {
  const [scrolled, setScrolled] = useState(false);
  const { theme, setTheme } = useTheme();
  const { language, setLanguage, t } = useLanguage();
  const [mounted, setMounted] = useState(false);

  useEffect(() => {
    setMounted(true);
    const handleScroll = () => setScrolled(window.scrollY > 50);
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <>
      <motion.header 
        initial={{ opacity: 0, y: -25 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.5 }}
        className={`fixed top-0 w-full z-50 px-3 sm:px-6 pt-4 transition-all duration-300 ease-in-out ${scrolled ? 'py-2' : 'py-4'}`}
      >
        <div className="relative w-full max-w-7xl mx-auto rounded-2xl sm:rounded-full bg-white/40 dark:bg-black/40 backdrop-blur-xl border border-purple-900/10 dark:border-white/20 p-2 shadow-[0_15px_40px_-10px_rgba(0,0,0,0.1)] dark:shadow-[0_15px_40px_-10px_rgba(0,0,0,0.5)] flex items-center justify-between gap-3 overflow-hidden">
          <div className="absolute -top-10 left-1/4 w-1/2 h-20 bg-purple-500/20 blur-3xl pointer-events-none rounded-full"></div>
          <div className="absolute top-0 left-6 right-6 h-[1px] bg-gradient-to-r from-transparent via-purple-500/40 dark:via-white/40 to-transparent pointer-events-none"></div>
          
          {/* Desktop Navigation - Hidden on mobile */}
          <nav className="hidden sm:flex items-center gap-1.5 overflow-x-auto no-scrollbar py-0.5 px-1">
            <NavLink href="#hero" icon={<Sparkles size={14} />} text={t('nav.about') === 'Tentang' ? 'Beranda' : 'Home'} />
            <NavLink href="#about" icon={<User size={14} />} text={t('nav.about')} />
            <NavLink href="#experience" icon={<Briefcase size={14} />} text={t('nav.experience')} />
            <NavLink href="#contact" icon={<Send size={14} />} text={t('nav.contact')} />
          </nav>
          
          <div className="flex items-center justify-between sm:justify-end w-full sm:w-auto gap-2 pr-2 sm:pr-0 pl-2 sm:pl-0">
            {/* Toggles */}
            {mounted && (
              <div className="flex items-center gap-1 bg-white/50 dark:bg-black/50 backdrop-blur-md rounded-full p-1 border border-purple-900/10 dark:border-white/10 mr-1 sm:mr-2">
                <button 
                  onClick={() => setLanguage(language === 'id' ? 'en' : 'id')}
                  className="w-8 h-8 rounded-full flex items-center justify-center text-slate-700 dark:text-white/70 hover:bg-white dark:hover:bg-white/10 transition-colors"
                  title="Change Language"
                >
                  <span className="text-[10px] font-black">{language.toUpperCase()}</span>
                </button>
                <button 
                  onClick={() => setTheme(theme === 'dark' ? 'light' : 'dark')}
                  className="w-8 h-8 rounded-full flex items-center justify-center text-slate-700 dark:text-white/70 hover:bg-white dark:hover:bg-white/10 transition-colors"
                  title="Toggle Theme"
                >
                  {theme === 'dark' ? <Sun size={14} /> : <Moon size={14} />}
                </button>
              </div>
            )}

            <div className="hidden lg:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 backdrop-blur-md">
              <span className="relative flex h-2 w-2">
                <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                <span className="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
              </span>
              <span className="text-[10px] font-mono uppercase tracking-wider text-emerald-600 dark:text-emerald-300/90 font-medium">Available</span>
            </div>
            <a href="#contact" className="relative group flex items-center gap-1.5 px-4 py-1.5 rounded-xl bg-gradient-to-r from-purple-600/10 via-purple-500/10 to-purple-600/10 dark:from-purple-600/30 dark:via-white/10 dark:to-purple-600/20 border border-purple-900/20 dark:border-white/30 hover:border-purple-400/60 transition-all duration-300 ease-in-out shadow-sm hover:shadow-purple-500/20">
              <span className="font-extrabold text-sm sm:text-base tracking-widest text-[#3A004D] dark:text-white font-sans group-hover:scale-105 transition-transform flex items-center gap-0.5">FEBRI<span className="text-purple-600 dark:text-purple-400 animate-pulse">.</span></span>
              <ArrowUpRight size={14} className="text-[#3A004D]/60 dark:text-white/60 group-hover:text-purple-600 dark:group-hover:text-purple-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all" />
            </a>
          </div>
        </div>
      </motion.header>

      {/* Mobile Bottom Navigation */}
      <motion.div 
        initial={{ opacity: 0, y: 50 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.5, delay: 0.2 }}
        className="fixed bottom-4 left-0 w-full z-50 px-4 sm:hidden"
      >
        <div className="w-full rounded-2xl bg-white/80 dark:bg-black/60 backdrop-blur-xl border border-purple-900/10 dark:border-white/20 p-2 shadow-[0_-5px_40px_-10px_rgba(0,0,0,0.1)] dark:shadow-[0_-5px_40px_-10px_rgba(0,0,0,0.5)] flex items-center justify-around">
          <NavLink href="#hero" icon={<Sparkles size={20} />} text={t('nav.about') === 'Tentang' ? 'Beranda' : 'Home'} isMobile />
          <NavLink href="#about" icon={<User size={20} />} text={t('nav.about')} isMobile />
          <NavLink href="#experience" icon={<Briefcase size={20} />} text={t('nav.experience')} isMobile />
          <NavLink href="#contact" icon={<Send size={20} />} text={t('nav.contact')} isMobile />
        </div>
      </motion.div>
    </>
  );
}

function NavLink({ href, icon, text, isMobile }: { href: string; icon: React.ReactNode; text: string, isMobile?: boolean }) {
  return (
    <motion.a 
      href={href} 
      whileTap={{ scale: 0.85, y: 4 }}
      transition={{ type: "spring", stiffness: 400, damping: 17 }}
      className={`relative flex items-center justify-center rounded-xl font-medium text-slate-700 dark:text-white/80 hover:text-purple-700 dark:hover:text-white transition-colors duration-200 shrink-0 select-none group
        ${isMobile ? 'flex-col gap-1 p-2 w-[22%]' : 'gap-2 px-3 py-2 text-xs sm:text-sm'}
      `}
    >
      <span className={`relative z-10 transition-transform duration-300 group-hover:scale-110 text-slate-500 dark:text-white/70 ${isMobile ? 'mb-0.5' : ''}`}>{icon}</span>
      <span className={`relative z-10 tracking-wide font-sans ${isMobile ? 'text-[10px]' : ''}`}>{text}</span>
    </motion.a>
  );
}
