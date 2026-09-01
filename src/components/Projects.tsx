"use client";
import React from 'react';
import { motion } from 'framer-motion';
import { ArrowUpRight } from 'lucide-react';
import { FaGithub } from 'react-icons/fa';

const projects = [
  {
    title: 'Project Based Learning',
    role: 'FrontEnd Developer',
    description: 'Menulis kode antarmuka aplikasi layaknya Single Page Application (SPA) menggunakan komponen React. Mempercantik antarmuka agar responsif dan modern menggunakan utility classes dari Tailwind CSS.',
    image: '/PBL.jpeg',
    tech: ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
    link: 'https://github.com/M-IrsyadGumanof/QM-Cafe-Billiard'
  },
  {
    title: 'SISIPOL (Sistem Informasi Forsipol)',
    role: 'Full Stack Developer',
    description: 'Membangun Sistem Informasi Forsipol secara full-stack untuk digitalisasi pencatatan data anggota, acara, dan kas. Mengintegrasikan frontend responsif dengan backend Laravel (PHP) dan MySQL.',
    image: '/sisipol.png',
    tech: ['Laravel', 'PHP', 'Tailwind CSS', 'MySQL'],
    link: 'https://github.com/putrafebriansyah40-beep/SistemInformasiForsipol'
  }
];

export default function Projects() {
  return (
    <section id="projects" className="py-24 lg:py-32 relative bg-[#EBE6EF]">
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
            <span className="text-xs font-bold uppercase tracking-widest text-purple-700">Projects</span>
          </div>
          <h2 className="text-4xl md:text-5xl font-black text-[#3A004D]">
            My Featured Work<span className="text-pink-500">.</span>
          </h2>
          <p className="mt-4 text-slate-500 font-medium max-w-2xl">
            Setiap proyek di bawah ini merepresentasikan pengalaman akademis dan praktis saya dalam memecahkan masalah, merancang arsitektur, dan membangun aplikasi fungsional.
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
              className="group bg-white/60 backdrop-blur-md border border-white/80 rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 flex flex-col"
            >
              {/* Image Container */}
              <div className="relative h-60 w-full overflow-hidden">
                <div className="absolute inset-0 bg-[#3A004D]/20 group-hover:bg-transparent transition-colors duration-500 z-10"></div>
                <img
                  src={project.image}
                  alt={project.title}
                  className="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out"
                />

                {/* Role Badge */}
                <div className="absolute top-4 left-4 z-20">
                  <span className="px-3 py-1 bg-white/90 backdrop-blur text-[#3A004D] text-xs font-bold rounded-full shadow-sm">
                    {project.role}
                  </span>
                </div>
              </div>

              {/* Content */}
              <div className="p-8 flex flex-col flex-grow">
                <h3 className="text-xl font-bold text-slate-800 mb-3 group-hover:text-purple-700 transition-colors">
                  {project.title}
                </h3>
                <p className="text-slate-600 text-sm leading-relaxed mb-6 flex-grow">
                  {project.description}
                </p>

                {/* Tech Stack */}
                <div className="flex flex-wrap gap-2 mb-8">
                  {project.tech.map((t, idx) => (
                    <span key={idx} className="px-2.5 py-1 bg-purple-100 text-purple-700 text-[10px] font-bold uppercase tracking-wider rounded-md">
                      {t}
                    </span>
                  ))}
                </div>

                {/* Links */}
                <div className="pt-4 border-t border-slate-200 flex items-center justify-between">
                  <a href={project.link} className="flex items-center gap-1.5 text-sm font-bold text-[#3A004D] hover:text-pink-600 transition-colors">
                    View Project <ArrowUpRight className="w-4 h-4" />
                  </a>
                  <a href="#" className="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center text-slate-500 hover:bg-[#3A004D] hover:text-white transition-colors">
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
