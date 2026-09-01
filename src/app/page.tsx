"use client";
import React from 'react';
import Header from '@/components/Header';
import Hero from '@/components/Hero';
import About from '@/components/About';
import Experience from '@/components/Experience';
import Contact from '@/components/Contact';
import Footer from '@/components/Footer';
import TechSkills from '@/components/TechSkills';
import Projects from '@/components/Projects';

export default function Home() {
  return (
    <main className="relative min-h-screen bg-[#EBE6EF] overflow-x-hidden text-slate-800 selection:bg-purple-300 selection:text-purple-900">
      <Header />
      <Hero />
      <About />
      <TechSkills />
      <Projects />
      <Experience />
      <Contact />
      <Footer />
    </main>
  );
}
