"use client";
import React from 'react';
import { motion } from 'framer-motion';
import { Mail, ArrowRight } from 'lucide-react';
import { useLanguage } from '@/context/LanguageContext';

export default function Contact() {
  const { t, language } = useLanguage();

  const contacts = [
    { 
      platform: t('contact.linkedin'), 
      name: 'Febriansyah Putra', 
      desc: language === 'en' ? 'Connect for professional opportunities, networking, and job referrals.' : 'Terhubung untuk peluang profesional, networking, dan referensi kerja.',
      link: 'https://www.linkedin.com/in/febriansyah-putra-59281a340/',
      icon: <svg className="w-6 h-6 text-[#0077B5]" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>,
      bg: 'bg-[#0077B5]/10',
      btn: 'bg-[#0077B5] text-white hover:bg-[#005582] border border-transparent'
    },
    { 
      platform: t('contact.instagram'), 
      name: '@fbriansyh_ptra', 
      desc: language === 'en' ? 'Follow for portfolio updates, projects, and behind-the-scenes creativity.' : 'Follow untuk update portofolio, project, dan behind-the-scenes kreativitas saya.',
      link: 'https://www.instagram.com/fbriansyh_ptra/',
      icon: <svg className="w-6 h-6 text-pink-600 dark:text-pink-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>,
      bg: 'bg-gradient-to-br from-pink-100 to-purple-100 dark:from-pink-900/30 dark:to-purple-900/30',
      btn: 'bg-pink-50 dark:bg-pink-900/30 text-pink-600 dark:text-pink-400 hover:bg-pink-100 dark:hover:bg-pink-900/50 border border-pink-200 dark:border-pink-800'
    },
    { 
      platform: t('contact.email'), 
      name: 'putrafebriansyah40@gmail.com', 
      desc: language === 'en' ? 'For project discussions, collaborations, or professional inquiries.' : 'Untuk diskusi proyek, kolaborasi, atau pertanyaan profesional.',
      link: 'mailto:putrafebriansyah40@gmail.com',
      icon: <Mail className="w-6 h-6 text-purple-700 dark:text-purple-400" />,
      bg: 'bg-purple-100/60 dark:bg-purple-900/30',
      btn: 'bg-purple-600 text-white hover:bg-purple-700 border border-transparent'
    },
  ];

  return (
    <section id="contact" className="py-24 lg:py-32 relative overflow-hidden bg-[#f6f2fb] dark:bg-[#0f0a18] transition-colors duration-300 ease-in-out">
      <div className="absolute inset-0 pointer-events-none opacity-[0.10] dark:opacity-5 bg-[radial-gradient(#3A004D_1px,transparent_1px)] dark:bg-[radial-gradient(#ffffff_1px,transparent_1px)] [background-size:28px_28px]"></div>
      
      <div className="absolute inset-0 pointer-events-none z-0">
        <div className="absolute top-1/4 -right-24 w-64 h-64 bg-purple-300/20 dark:bg-purple-900/20 rounded-full blur-3xl"></div>
        <div className="absolute bottom-1/4 -left-24 w-80 h-80 bg-pink-300/20 dark:bg-pink-900/20 rounded-full blur-3xl"></div>
      </div>

      <div className="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <motion.div 
          initial={{ opacity: 0, y: 20 }}
          whileInView={{ opacity: 1, y: 0 }}
          viewport={{ once: true }}
          className="text-center mb-16"
        >
          <span className="inline-flex items-center gap-2 mb-3 text-xs font-bold uppercase tracking-widest text-purple-700 dark:text-purple-400">
            <span className="w-4 h-px bg-purple-500 block"></span>
            {t('contact.tag')}
            <span className="w-4 h-px bg-purple-500 block"></span>
          </span>
          <h2 className="text-3xl md:text-5xl font-black mt-2 text-slate-800 dark:text-white transition-colors">
            {t('contact.title')} <span className="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 dark:from-purple-400 dark:to-pink-400">{t('contact.titleHighlight')}</span>
          </h2>
          <p className="text-slate-600 dark:text-slate-400 mx-auto mt-3 font-medium">
            {language === 'en' ? 'Have a project or opportunity? Let\'s connect!' : 'Punya proyek atau peluang? Mari terhubung!'}
          </p>
        </motion.div>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
          {contacts.map((contact, i) => (
            <motion.div 
              key={i}
              initial={{ opacity: 0, y: 30 }}
              whileInView={{ opacity: 1, y: 0 }}
              viewport={{ once: true }}
              transition={{ delay: i * 0.1 }}
              className="bg-white/60 dark:bg-slate-900/50 backdrop-blur-md border border-white/80 dark:border-white/10 p-6 rounded-3xl shadow-sm hover:shadow-xl dark:shadow-none transition-all flex flex-col h-full group"
            >
              <div className={`w-12 h-12 rounded-2xl ${contact.bg} flex items-center justify-center mb-4 group-hover:scale-110 transition-transform`}>
                {contact.icon}
              </div>
              <p className="text-xs font-bold text-slate-400 uppercase tracking-widest mb-1">{contact.platform}</p>
              <p className="font-black text-slate-800 dark:text-white text-sm truncate">{contact.name}</p>
              <p className="text-xs text-slate-500 dark:text-slate-400 mt-2 flex-grow leading-relaxed">{contact.desc}</p>
              
              <a href={contact.link} target="_blank" rel="noreferrer" className={`mt-6 w-full flex items-center justify-center gap-2 py-3 px-4 rounded-xl font-semibold text-sm transition-all ${contact.btn}`}>
                Connect <ArrowRight size={16} />
              </a>
            </motion.div>
          ))}
        </div>

        <motion.div 
          initial={{ opacity: 0, scale: 0.95 }}
          whileInView={{ opacity: 1, scale: 1 }}
          viewport={{ once: true }}
          className="text-center"
        >
          <div className="bg-white/40 dark:bg-slate-900/40 backdrop-blur-xl border border-white/60 dark:border-white/10 rounded-[2rem] p-6 sm:p-10 md:p-16 max-w-4xl mx-auto shadow-sm hover:shadow-lg dark:shadow-none transition-all">
            <p className="text-xs font-bold text-purple-500 dark:text-purple-400 uppercase tracking-widest mb-4">Let's Collaborate</p>
            <h3 className="text-3xl md:text-5xl font-safira-style font-black text-slate-800 dark:text-white leading-tight mb-6">
              Let's Build Something<br/><span className="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500 dark:from-purple-400 dark:to-pink-400">Meaningful Together</span>
            </h3>
            <p className="text-slate-600 dark:text-slate-400 mb-8 max-w-md mx-auto font-medium">
              {language === 'en' 
                ? 'Always open to new projects, internship opportunities, or just talking about tech.'
                : 'Selalu terbuka untuk proyek baru, peluang magang, atau sekadar ngobrol tentang teknologi.'}
            </p>
            <a href="mailto:putrafebriansyah40@gmail.com" className="inline-flex w-full sm:w-auto justify-center items-center gap-2 sm:gap-3 px-4 sm:px-8 py-3 sm:py-4 bg-purple-600 hover:bg-purple-700 text-white rounded-full font-bold text-sm sm:text-base transition-all shadow-md hover:shadow-xl hover:-translate-y-1">
              <Mail className="w-4 h-4 sm:w-5 sm:h-5 flex-shrink-0" />
              <span className="truncate">putrafebriansyah40@gmail.com</span>
            </a>
          </div>
        </motion.div>
      </div>
    </section>
  );
}
