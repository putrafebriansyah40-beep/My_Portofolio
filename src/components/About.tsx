"use client";
import React from 'react';
import { motion } from 'framer-motion';
import { GraduationCap, Code2, Layers, Cpu, Globe, Smartphone, Users, Zap, MapPin } from 'lucide-react';
import { useLanguage } from '@/context/LanguageContext';

function StatCard({ card, index }: { card: any, index: number }) {
  const ref = React.useRef<HTMLDivElement>(null);
  const [mousePosition, setMousePosition] = React.useState({ x: 0, y: 0 });
  const [isHovered, setIsHovered] = React.useState(false);

  function handleMouseMove(e: React.MouseEvent<HTMLDivElement>) {
    if (!ref.current) return;
    const rect = ref.current.getBoundingClientRect();
    setMousePosition({
      x: e.clientX - rect.left,
      y: e.clientY - rect.top,
    });
  }

  return (
    <motion.div 
      ref={ref}
      onMouseMove={handleMouseMove}
      onMouseEnter={() => setIsHovered(true)}
      onMouseLeave={() => setIsHovered(false)}
      initial={{ opacity: 0, y: 20 }}
      whileInView={{ opacity: 1, y: 0 }}
      viewport={{ once: true }}
      transition={{ delay: index * 0.1 }}
      className="relative bg-white dark:bg-[#1A1528] rounded-2xl p-6 border border-slate-200 dark:border-white/5 overflow-hidden group hover:-translate-y-1 transition-transform duration-300 shadow-sm hover:shadow-md dark:shadow-none"
    >
      {/* Background Gradient Base (Always visible slightly, gets brighter on hover) */}
      <div className={`absolute inset-0 bg-gradient-to-br ${card.gradient} opacity-5 dark:opacity-20 group-hover:opacity-10 dark:group-hover:opacity-40 transition-opacity duration-500`}></div>
      
      {/* Spotlight Effect that follows cursor */}
      <div 
        className="pointer-events-none absolute -inset-px opacity-0 transition-opacity duration-300 block"
        style={{
          opacity: isHovered ? 1 : 0,
          background: `radial-gradient(350px circle at ${mousePosition.x}px ${mousePosition.y}px, ${card.spotlightColor}, transparent 40%)`
        }}
      />
      
      <div className="relative z-10 flex flex-col h-full justify-between pointer-events-none">
        {/* Icon */}
        <div className="w-8 h-8 rounded-full bg-slate-50 dark:bg-white/5 flex items-center justify-center border border-slate-100 dark:border-white/10 mb-8 backdrop-blur-sm">
          {card.icon}
        </div>
        
        {/* Text Content */}
        <div>
          <h3 className="text-2xl font-black text-slate-800 dark:text-white mb-1 tracking-tight flex items-baseline gap-1">
            {card.title}
            {card.suffix && <span className="text-sm font-medium text-slate-400 dark:text-white/50">{card.suffix}</span>}
          </h3>
          <p className="text-[10px] font-bold text-slate-400 dark:text-white/40 uppercase tracking-widest mb-1.5">{card.subtitle}</p>
          <p className="text-xs text-slate-500 dark:text-white/60 font-medium leading-relaxed">{card.desc}</p>
        </div>
      </div>
    </motion.div>
  );
}

export default function About() {
  const { t, language } = useLanguage();

  const cards = [
    {
      icon: <GraduationCap size={16} className="text-cyan-500 dark:text-cyan-400" />,
      title: "3.37",
      suffix: "/4.00",
      subtitle: t('about.cards.gpa.subtitle'),
      desc: t('about.cards.gpa.desc'),
      gradient: "from-cyan-500/20 to-transparent",
      spotlightColor: "rgba(6, 182, 212, 0.35)"
    },
    {
      icon: <Globe size={16} className="text-blue-500 dark:text-blue-400" />,
      title: "D4 TRPL",
      subtitle: t('about.cards.study.subtitle'),
      desc: t('about.cards.study.desc'),
      gradient: "from-blue-500/20 to-transparent",
      spotlightColor: "rgba(59, 130, 246, 0.35)"
    },
    {
      icon: <Code2 size={16} className="text-purple-500 dark:text-purple-400" />,
      title: "Full Stack",
      subtitle: t('about.cards.focus.subtitle'),
      desc: t('about.cards.focus.desc'),
      gradient: "from-purple-500/20 to-transparent",
      spotlightColor: "rgba(168, 85, 247, 0.35)"
    },
    {
      icon: <Layers size={16} className="text-pink-500 dark:text-pink-400" />,
      title: "2",
      subtitle: t('about.cards.projects.subtitle'),
      desc: t('about.cards.projects.desc'),
      gradient: "from-pink-500/20 to-transparent",
      spotlightColor: "rgba(236, 72, 153, 0.35)"
    },
    {
      icon: <Cpu size={16} className="text-indigo-500 dark:text-indigo-400" />,
      title: "Laravel",
      suffix: " & React",
      subtitle: t('about.cards.stack.subtitle'),
      desc: t('about.cards.stack.desc'),
      gradient: "from-indigo-500/20 to-transparent",
      spotlightColor: "rgba(99, 102, 241, 0.35)"
    },
    {
      icon: <Smartphone size={16} className="text-teal-500 dark:text-teal-400" />,
      title: "Flutter",
      subtitle: t('about.cards.mobile.subtitle'),
      desc: t('about.cards.mobile.desc'),
      gradient: "from-teal-500/20 to-transparent",
      spotlightColor: "rgba(20, 184, 166, 0.35)"
    },
    {
      icon: <Users size={16} className="text-orange-500 dark:text-orange-400" />,
      title: "3+",
      subtitle: t('about.cards.org.subtitle'),
      desc: t('about.cards.org.desc'),
      gradient: "from-orange-500/20 to-transparent",
      spotlightColor: "rgba(249, 115, 22, 0.35)"
    },
    {
      icon: <Zap size={16} className="text-rose-500 dark:text-rose-400" />,
      title: t('about.cards.learning.title'),
      subtitle: t('about.cards.learning.subtitle'),
      desc: t('about.cards.learning.desc'),
      gradient: "from-rose-500/20 to-transparent",
      spotlightColor: "rgba(244, 63, 94, 0.35)"
    }
  ];

  const narratives = [
    {
      label: language === 'en' ? "WHO I AM" : "SIAPA SAYA",
      text: language === 'en' 
        ? "I'm Febriansyah Putra, a D4 TRPL (Software Engineering) undergraduate at Politeknik Negeri Padang. I transform curiosity into a rigorous framework, using code to build reliable and impactful software solutions."
        : "Saya Febriansyah Putra, mahasiswa D4 TRPL di Politeknik Negeri Padang. Saya merancang ide kompleks menjadi kode dan membangun solusi perangkat lunak yang andal serta berdampak."
    },
    {
      label: language === 'en' ? "WHAT MOTIVATES ME" : "APA YANG MEMOTIVASI SAYA",
      text: language === 'en'
        ? "I bridge the gap between complex logic and actionable user experiences. Driven by finding structure in chaos, I specialize in Full Stack Development and have a strong passion for UI/UX design."
        : "Saya menjembatani logika kompleks dengan pengalaman pengguna yang nyata. Memiliki spesialisasi dalam Full Stack Development dan bersemangat dalam desain UI/UX."
    },
    {
      label: language === 'en' ? "WHAT I ENJOY BUILDING" : "FOKUS PENGEMBANGAN",
      text: language === 'en'
        ? "I build projects that solve real-world complexities: developing web-based management systems with Laravel, creating dynamic interfaces with React, and building mobile apps with Flutter."
        : "Saya membangun aplikasi yang menyelesaikan masalah dunia nyata: sistem manajemen web dengan Laravel, antarmuka dinamis dengan React, dan aplikasi mobile dengan Flutter."
    },
    {
      label: language === 'en' ? "WHERE I'M HEADING" : "TUJUAN KARIR",
      text: language === 'en'
        ? "Aiming for a Full Stack Developer or Mobile Developer role where technical rigor meets creative design. My foundation in PHP, JavaScript, and Dart is backed by a passion for continuous learning."
        : "Bercita-cita menjadi Full Stack / Mobile Developer di mana ketelitian teknis bertemu desain kreatif. Fondasi saya di PHP, JavaScript, dan Dart didukung oleh semangat belajar."
    }
  ];

  return (
    <section id="about" className="py-24 lg:py-32 relative bg-[#EBE6EF] dark:bg-[#0f0a18] transition-colors duration-700 ease-in-out">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {/* Header */}
        <div className="mb-16">
          <div className="flex items-center gap-4 mb-4">
            <span className="w-12 h-px bg-purple-300 dark:bg-purple-800 block"></span>
            <span className="text-xs font-bold uppercase tracking-widest text-purple-800 dark:text-purple-400">{language === 'en' ? 'ABOUT ME' : 'TENTANG SAYA'}</span>
          </div>
          <h2 className="text-4xl md:text-6xl font-black text-[#3A004D] dark:text-white mb-3 tracking-tight transition-colors duration-700 ease-in-out">
            {language === 'en' ? 'The person behind the code' : 'Sosok di balik kode'}<span className="text-pink-500">.</span>
          </h2>
          <p className="text-lg text-[#3A004D]/60 dark:text-purple-300/60 font-medium">
            {language === 'en' ? 'Turning curiosity into scalable software solutions.' : 'Mengubah keingintahuan menjadi solusi perangkat lunak.'}
          </p>
        </div>

        {/* Content Grid */}
        <div className="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-20">
          
          {/* Left Column: Stat Cards Grid */}
          <div className="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
            {cards.map((card, i) => (
              <StatCard key={i} card={card} index={i} />
            ))}
          </div>

          {/* Right Column: Narrative Text */}
          <div className="lg:col-span-5 flex flex-col justify-center gap-10">
            {narratives.map((item, i) => (
              <motion.div 
                key={i}
                initial={{ opacity: 0, x: 20 }}
                whileInView={{ opacity: 1, x: 0 }}
                viewport={{ once: true }}
                transition={{ delay: i * 0.15 }}
              >
                <div className="flex items-center gap-3 mb-3">
                  <span className="w-6 h-px bg-purple-300 dark:bg-purple-800 block"></span>
                  <span className="text-[10px] font-black uppercase tracking-[0.2em] text-[#8B4F67] dark:text-pink-400">{item.label}</span>
                </div>
                <p className="text-slate-700 dark:text-slate-400 leading-relaxed font-medium text-[15px]">
                  {item.text}
                </p>
              </motion.div>
            ))}

            <motion.div 
              initial={{ opacity: 0, y: 20 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: 0.6 }}
              className="mt-4 flex flex-wrap items-center gap-4"
            >
              <div className="inline-flex items-center gap-2 bg-[#3A004D] dark:bg-purple-900/50 px-5 py-2.5 rounded-full text-white dark:text-purple-200 text-xs font-bold tracking-wide shadow-sm border border-transparent dark:border-purple-800/30">
                <span className="w-1.5 h-1.5 rounded-full bg-green-400 animate-pulse"></span>
                {language === 'en' ? 'Open to Internships & roles' : 'Terbuka untuk Magang'}
              </div>
              <div className="inline-flex items-center gap-1.5 text-xs font-bold text-[#8B4F67] dark:text-purple-400">
                <MapPin size={14} /> Padang, Indonesia
              </div>
            </motion.div>
          </div>

        </div>
      </div>
    </section>
  );
}
