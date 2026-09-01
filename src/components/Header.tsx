"use client";
import React, { useState, useEffect } from 'react';
import { motion } from 'framer-motion';
import { Sparkles, User, Box, Cpu, BarChart, Briefcase, Send, ArrowUpRight } from 'lucide-react';

export default function Header() {
  const [scrolled, setScrolled] = useState(false);
  useEffect(() => {
    const handleScroll = () => setScrolled(window.scrollY > 50);
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <motion.header 
      initial={{ opacity: 0, y: -25 }}
      animate={{ opacity: 1, y: 0 }}
      transition={{ duration: 0.5 }}
      className={`fixed top-0 w-full z-50 px-3 sm:px-6 pt-4 transition-all duration-300 ${scrolled ? 'py-2' : 'py-4'}`}
    >
      <div className="relative w-full max-w-7xl mx-auto rounded-2xl sm:rounded-full bg-slate-950/40 dark:bg-black/40 backdrop-blur-xl border border-white/20 p-2 shadow-[0_15px_40px_-10px_rgba(0,0,0,0.5)] flex items-center justify-between gap-3 overflow-hidden">
        <div className="absolute -top-10 left-1/4 w-1/2 h-20 bg-purple-500/20 blur-3xl pointer-events-none rounded-full"></div>
        <div className="absolute top-0 left-6 right-6 h-[1px] bg-gradient-to-r from-transparent via-white/40 to-transparent pointer-events-none"></div>
        
        <nav className="flex items-center gap-1 sm:gap-1.5 overflow-x-auto no-scrollbar py-0.5 px-1 max-w-[75%] sm:max-w-none">
          <NavLink href="#hero" icon={<Sparkles size={14} />} text="Home" />
          <NavLink href="#about" icon={<User size={14} />} text="About" />
          <NavLink href="#experience" icon={<Briefcase size={14} />} text="Experience" />
          <NavLink href="#contact" icon={<Send size={14} />} text="Contact" />
        </nav>
        
        <div className="shrink-0 flex items-center gap-3 pr-2">
          <div className="hidden lg:flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-500/10 border border-emerald-500/20 backdrop-blur-md">
            <span className="relative flex h-2 w-2">
              <span className="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
              <span className="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
            </span>
            <span className="text-[10px] font-mono uppercase tracking-wider text-emerald-300/90 font-medium">Available</span>
          </div>
          <a href="#contact" className="relative group flex items-center gap-1.5 px-4 py-1.5 rounded-xl bg-gradient-to-r from-purple-600/30 via-white/10 to-purple-600/20 border border-white/30 hover:border-purple-400/60 transition-all duration-300 shadow-md hover:shadow-purple-500/20">
            <span className="font-extrabold text-sm sm:text-base tracking-widest text-white font-sans group-hover:scale-105 transition-transform flex items-center gap-0.5">FEBRI<span className="text-purple-400 animate-pulse">.</span></span>
            <ArrowUpRight size={14} className="text-white/60 group-hover:text-purple-300 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-all" />
          </a>
        </div>
      </div>
    </motion.header>
  );
}

function NavLink({ href, icon, text }: { href: string; icon: React.ReactNode; text: string }) {
  return (
    <motion.a 
      href={href} 
      whileTap={{ scale: 0.85, y: 4 }}
      transition={{ type: "spring", stiffness: 400, damping: 17 }}
      className="relative flex items-center gap-2 px-3 py-2 rounded-xl text-xs sm:text-sm font-medium text-white/80 hover:text-white transition-colors duration-200 shrink-0 select-none group"
    >
      <span className="relative z-10 transition-transform duration-300 group-hover:scale-110 text-white/70">{icon}</span>
      <span className="relative z-10 tracking-wide font-sans">{text}</span>
    </motion.a>
  );
}
