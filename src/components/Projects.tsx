"use client";
import React from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { ArrowUpRight, X } from 'lucide-react';
import { FaGithub } from 'react-icons/fa';
import { useLanguage } from '@/context/LanguageContext';

export default function Projects() {
  const { t, language } = useLanguage();
  const [selectedProject, setSelectedProject] = React.useState<any>(null);

  const projects = [
    {
      title: t('projects.items.pbl.title'),
      role: 'FrontEnd Developer',
      description: t('projects.items.pbl.desc'),
      fullDetails: t('projects.items.pbl.fullDetails') as unknown as string[],
      image: '/PBL.jpeg',
      tech: ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
      link: 'https://github.com/M-IrsyadGumanof/QM-Cafe-Billiard'
    },
    {
      title: t('projects.items.sisipol.title'),
      role: 'Full Stack Developer',
      description: t('projects.items.sisipol.desc'),
      fullDetails: t('projects.items.sisipol.fullDetails') as unknown as string[],
      image: '/sisipol.png',
      tech: ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
      link: 'https://github.com/putrafebriansyah40-beep/SistemInformasiForsipol'
    },
    {
      title: t('projects.items.electrohub.title'),
      role: 'Staff Keuangan',
      description: t('projects.items.electrohub.desc'),
      fullDetails: t('projects.items.electrohub.fullDetails') as unknown as string[],
      image: '/electrohub.jpg',
      tech: ['Microsoft Word', 'Microsoft Excel'],
      link: '#'
    }
  ];

  return (
    <section id="projects" className="py-24 lg:py-32 relative bg-[#EBE6EF] dark:bg-[#0f0a18] transition-colors duration-300 ease-in-out">
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
          <h2 className="text-4xl md:text-5xl font-black text-[#3A004D] dark:text-white transition-colors duration-300 ease-in-out">
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
              className="group bg-white/60 dark:bg-slate-900/50 backdrop-blur-md border border-white/80 dark:border-white/10 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 ease-in-out flex flex-col"
            >
              {/* Image Container */}
              <div className="relative h-60 w-full overflow-hidden">
                <div className="absolute inset-0 bg-[#3A004D]/20 dark:bg-purple-900/30 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
                {project.image ? (
                  <img
                    src={project.image}
                    alt={project.title}
                    className="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out"
                  />
                ) : (
                  <div className="w-full h-full bg-slate-200 dark:bg-slate-800 flex items-center justify-center">
                    <span className="text-slate-400 dark:text-slate-500 font-medium text-sm">Image Coming Soon</span>
                  </div>
                )}

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
                  <div className="flex flex-col sm:flex-row gap-2 sm:gap-6">
                    <a href={project.link} className="flex items-center gap-1.5 text-sm font-bold text-[#3A004D] dark:text-purple-300 hover:text-pink-600 dark:hover:text-pink-400 transition-colors">
                      {t('projects.viewProject')} <ArrowUpRight className="w-4 h-4" />
                    </a>
                    {project.fullDetails && project.fullDetails.length > 0 && (
                      <button onClick={() => setSelectedProject(project)} className="flex items-center gap-1.5 text-sm font-bold text-[#3A004D] dark:text-purple-300 hover:text-pink-600 dark:hover:text-pink-400 transition-colors">
                        {t('projects.readMore')} <ArrowUpRight className="w-4 h-4" />
                      </button>
                    )}
                  </div>
                  <a href={project.link} className="w-8 h-8 rounded-full bg-slate-100 dark:bg-slate-800 flex items-center justify-center text-slate-500 dark:text-slate-400 hover:bg-[#3A004D] dark:hover:bg-purple-600 hover:text-white transition-colors flex-shrink-0">
                    <FaGithub className="w-4 h-4" />
                  </a>
                </div>
              </div>
            </motion.div>
          ))}
        </div>

      </div>

      {/* Project Details Modal */}
      <AnimatePresence>
        {selectedProject && (
          <div className="fixed inset-0 z-50 flex items-center justify-center px-4 py-6 md:p-12 mt-16 md:mt-0">
            <motion.div
              initial={{ opacity: 0 }}
              animate={{ opacity: 1 }}
              exit={{ opacity: 0 }}
              onClick={() => setSelectedProject(null)}
              className="absolute inset-0 bg-black/60 backdrop-blur-sm"
            />
            <motion.div
              initial={{ opacity: 0, scale: 0.95, y: 20 }}
              animate={{ opacity: 1, scale: 1, y: 0 }}
              exit={{ opacity: 0, scale: 0.95, y: 20 }}
              className="relative w-full max-w-4xl max-h-[85vh] bg-white dark:bg-slate-900 rounded-3xl shadow-2xl flex flex-col z-10 border border-slate-200 dark:border-white/10 overflow-hidden"
            >
              <div className="flex flex-shrink-0 items-center justify-between p-6 border-b border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-slate-900/50">
                <h3 className="text-xl md:text-2xl font-black text-slate-800 dark:text-white">
                  {selectedProject.title}
                </h3>
                <button
                  onClick={() => setSelectedProject(null)}
                  className="p-2 text-slate-500 hover:text-pink-500 hover:bg-pink-50 dark:hover:bg-pink-500/10 rounded-full transition-colors flex-shrink-0"
                >
                  <X className="w-6 h-6" />
                </button>
              </div>

              <div className="p-6 md:p-8 overflow-y-auto custom-scrollbar flex-grow bg-white dark:bg-slate-900">
                <div className="flex flex-wrap gap-2 mb-6">
                  {selectedProject.tech.map((t: string, idx: number) => (
                    <span key={idx} className="px-3 py-1.5 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs font-bold uppercase tracking-wider rounded-md border border-transparent dark:border-purple-500/20">
                      {t}
                    </span>
                  ))}
                </div>

                <div className="space-y-4 text-slate-600 dark:text-slate-300 leading-relaxed">
                  {selectedProject.fullDetails.map((paragraph: string, idx: number) => (
                    <p key={idx} className="text-justify">{paragraph}</p>
                  ))}
                </div>

                <div className="mt-8 pt-6 border-t border-slate-100 dark:border-white/5 flex gap-4">
                  <a
                    href={selectedProject.link}
                    target="_blank"
                    rel="noopener noreferrer"
                    className="inline-flex items-center gap-2 px-6 py-3 bg-[#3A004D] hover:bg-purple-900 dark:bg-purple-600 dark:hover:bg-purple-500 text-white font-bold rounded-xl transition-colors shadow-md"
                  >
                    <FaGithub className="w-5 h-5" /> {t('projects.viewProject')}
                  </a>
                </div>
              </div>
            </motion.div>
          </div>
        )}
      </AnimatePresence>
    </section>
  );
}
