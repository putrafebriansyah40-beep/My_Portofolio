"use client";
import React from 'react';
import { motion } from 'framer-motion';
import { ArrowUpRight } from 'lucide-react';
import { FaGithub } from 'react-icons/fa';
import { useLanguage } from '@/context/LanguageContext';

export default function Projects() {
  const { t, language } = useLanguage();

  const projects = [
    {
      title: t('projects.items.pbl.title'),
      role: 'FrontEnd Developer',
      description: t('projects.items.pbl.desc'),
      image: '/PBL.jpeg',
      tech: ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
      link: 'https://github.com/M-IrsyadGumanof/QM-Cafe-Billiard'
    },
    {
      title: t('projects.items.sisipol.title'),
      role: 'Full Stack Developer',
      description: t('projects.items.sisipol.desc'),
      image: '/sisipol.png',
      tech: ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
      link: 'https://github.com/putrafebriansyah40-beep/SistemInformasiForsipol'
    }
  ];

  return (
    <section id="projects" className="py-24 lg:py-32 relative bg-[#EBE6EF] dark:bg-[#0f0a18] transition-colors duration-700 ease-in-out">
      <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-10">

        {/* Section Header */}
        <motion.div
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="mb-16"
        >
          <div className="flex items-center gap-4 mb-4">
            <span className="w-12 h-px bg-purple-500 block"></span>
            <span className="text-xs font-bold uppercase tracking-widest text-purple-700 dark:text-purple-400">{t('projects.tag')}</span>
          </div>
          <h2 className="text-4xl md:text-5xl font-black text-[#3A004D] dark:text-white transition-colors duration-700 ease-in-out">
            {t('projects.title')} <span className="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 dark:from-purple-400 dark:to-pink-400">{t('projects.titleHighlight')}</span><span className="text-pink-500 dark:text-pink-400">.</span>
          </h2>
          <p className="mt-4 text-slate-500 dark:text-slate-400 font-medium max-w-2xl">
            {language === 'en' 
              ? 'Each project below represents my academic and practical experience in solving problems, designing architectures, and building functional applications.'
              : 'Setiap proyek di bawah ini merepresentasikan pengalaman akademis dan praktis saya dalam memecahkan masalah, merancang arsitektur, dan membangun aplikasi fungsional.'}
          </p>
        </motion.div>

        {/* Project Cards */}
        <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
          {projects.map((project, i) => (
            <motion.div
              key={i}
              initial={{ opacity: 0, y: 30 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true, margin: "-100px" }}
              transition={{ duration: 0.6, delay: i * 0.1 }}
              className="group bg-white/60 dark:bg-slate-900/50 backdrop-blur-md border border-white/80 dark:border-white/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-700 ease-in-out flex flex-col"
            >
              {/* Image Container */}
              <div className="relative h-60 w-full overflow-hidden">
                <div className="absolute inset-0 bg-[#3A004D]/20 dark:bg-purple-900/30 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
                <img
                  src={project.image}
                  alt={project.title}
                  className="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out"
                />

                {/* Role Badge */}
                <div className="absolute top-4 left-4 z-20">
                  <span className="px-3 py-1 bg-white/90 dark:bg-slate-800/90 backdrop-blur text-[#3A004D] dark:text-purple-300 text-xs font-bold rounded-full shadow-sm border border-transparent dark:border-purple-500/20">
                    {project.role}
                  </span>
                </div>
              </div>

              {/* Content */}
              <div className="p-8 flex flex-col flex-grow">
                <h3 className="text-xl font-bold text-slate-800 dark:text-white mb-3 group-hover:text-purple-700 dark:group-hover:text-purple-400 transition-colors">
                  {project.title}
                </h3>
                <p className="text-slate-600 dark:text-slate-400 text-sm leading-relaxed mb-6 flex-grow">
                  {project.description}
                </p>

                {/* Tech Stack */}
                <div className="flex flex-wrap gap-2 mb-8">
                  {project.tech.map((t, idx) => (
                    <span key={idx} className="px-2.5 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-[10px] font-bold uppercase tracking-wider rounded-md border border-transparent dark:border-purple-500/20">
                      {t}
                    </span>
                  ))}
                </div>

                {/* Links */}
                <div className="pt-4 border-t border-slate-200 dark:border-slate-800 flex items-center justify-between">
                  <a href={project.link} className="flex items-center gap-1.5 text-sm font-bold text-[#3A004D] dark:text-purple-300 hover:text-pink-600 dark:hover:text-pink-400 transition-colors">
                    {t('projects.viewProject')} <ArrowUpRight className="w-4 h-4" />
                  </a>
                  <a href={project.link} className="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 dark:text-slate-400 hover:bg-[#3A004D] dark:hover:bg-purple-600 hover:text-white transition-colors">
                    <FaGithub className="w-4 h-4" />
                  </a>
                </div>
              </div>
            </motion.div>
          ))}
        </div>

      </div>
    </section>
  );
}
