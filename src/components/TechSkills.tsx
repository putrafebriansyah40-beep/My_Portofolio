"use client";
import React from 'react';
import { 
  SiPhp, SiLaravel, SiJavascript, SiTypescript, SiReact, SiNextdotjs, SiFlutter, SiMysql, SiTailwindcss, SiFigma, SiGithub,
  SiPython, SiGoogledrive, SiGooglegemini 
} from 'react-icons/si';
import { FaNetworkWired, FaFileWord, FaFileExcel } from 'react-icons/fa';

const CanvaIcon = ({ className }: { className?: string }) => (
  <svg role="img" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" className={className}>
    <title>Canva</title>
    <path d="M2.38 8.653A8.47 8.47 0 0 1 10.846.18h.027a8.455 8.455 0 0 1 8.468 8.473h0a12.8 12.8 0 0 0-4.321-1.391c-2.457-.312-4.992.368-6.915 1.836A7.95 7.95 0 0 0 4.195 14.88c-.58 1.488-.781 3.12-.58 4.717A8.467 8.467 0 0 1 2.38 8.652zm11.777 5.097c.548 1.157 1.405 2.155 2.472 2.873A7.545 7.545 0 0 0 22.043 18.2a4.417 4.417 0 0 0-.012-3.155 5.518 5.518 0 0 0-2.316-2.585c-1.63-.984-3.69-1.284-5.558-.71zM8.397 12.011c2.18-1.748 5.253-2.348 7.986-1.542 1.343.398 2.58 1.083 3.618 1.996a6.89 6.89 0 0 1 2.39 4.316 6.012 6.012 0 0 1-1.385 4.545c-2.83 3.327-7.665 3.518-10.741.428-2.527-2.544-2.883-6.523-.868-9.743z"/>
  </svg>
);

const VscodeIcon = ({ className }: { className?: string }) => (
  <svg role="img" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg" className={className}>
    <title>Visual Studio Code</title>
    <path d="M23.15 2.587L18.21.21a1.494 1.494 0 0 0-1.705.29l-9.46 8.63-4.12-3.128a.999.999 0 0 0-1.276.057L.327 7.261A1 1 0 0 0 .326 8.74L3.899 12 .326 15.26a1 1 0 0 0 .001 1.479L1.65 17.94a.999.999 0 0 0 1.276.057l4.12-3.128 9.46 8.63a1.492 1.492 0 0 0 1.704.29l4.942-2.377A1.5 1.5 0 0 0 24 20.06V3.939a1.5 1.5 0 0 0-.85-1.352zm-5.146 14.861L10.826 12l7.178-5.448v10.896z"/>
  </svg>
);

const skillsRow1 = [
  { name: 'PHP', icon: <SiPhp className="text-[#777BB4] w-6 h-6" /> },
  { name: 'Laravel', icon: <SiLaravel className="text-[#FF2D20] w-5 h-5" /> },
  { name: 'Python', icon: <SiPython className="text-[#3776AB] w-5 h-5" /> },
  { name: 'JavaScript', icon: <SiJavascript className="text-[#F7DF1E] w-5 h-5" /> },
  { name: 'TypeScript', icon: <SiTypescript className="text-[#3178C6] w-5 h-5" /> },
  { name: 'React.js', icon: <SiReact className="text-[#61DAFB] w-5 h-5" /> },
  { name: 'Next.js', icon: <SiNextdotjs className="text-black w-5 h-5" /> },
  { name: 'Flutter', icon: <SiFlutter className="text-[#02569B] w-5 h-5" /> },
  { name: 'MySQL', icon: <SiMysql className="text-[#4479A1] w-6 h-6" /> },
  { name: 'REST API', icon: <FaNetworkWired className="text-emerald-600 w-5 h-5" /> },
];

const skillsRow2 = [
  { name: 'Tailwind CSS', icon: <SiTailwindcss className="text-[#06B6D4] w-5 h-5" /> },
  { name: 'Figma', icon: <SiFigma className="text-[#F24E1E] w-5 h-5" /> },
  { name: 'Canva', icon: <CanvaIcon className="text-[#00C4CC] w-5 h-5" /> },
  { name: 'VS Code', icon: <VscodeIcon className="text-[#007ACC] w-5 h-5" /> },
  { name: 'Antigravity', icon: <SiGooglegemini className="text-[#8E75B2] w-5 h-5" /> },
  { name: 'Git & GitHub', icon: <SiGithub className="text-[#181717] w-5 h-5" /> },
  { name: 'MS Word', icon: <FaFileWord className="text-[#2B579A] w-5 h-5" /> },
  { name: 'MS Excel', icon: <FaFileExcel className="text-[#217346] w-5 h-5" /> },
  { name: 'Google Drive', icon: <SiGoogledrive className="text-[#1FA463] w-5 h-5" /> },
];

export default function TechSkills() {
  return (
    <section className="py-24 bg-[#EBE6EF] relative overflow-hidden z-20">
      <div className="text-center mb-16 relative z-10 px-4">
        <h2 className="text-4xl md:text-5xl font-black text-[#3A004D]">
          Tech Skills<span className="text-pink-500">.</span>
        </h2>
        <p className="mt-4 text-slate-500 font-medium max-w-lg mx-auto">
          Tools, languages, frameworks, and ecosystems that I use to build robust web and mobile applications.
        </p>
      </div>

      <div className="relative w-full max-w-5xl mx-auto overflow-hidden flex flex-col gap-6"
           style={{ maskImage: 'linear-gradient(to right, transparent, black 15%, black 85%, transparent)', WebkitMaskImage: 'linear-gradient(to right, transparent, black 15%, black 85%, transparent)' }}>
        
        {/* Row 1 */}
        <div className="flex w-max animate-marquee-left gap-4 hover:[animation-play-state:paused] py-2">
          {[...skillsRow1, ...skillsRow1, ...skillsRow1].map((skill, i) => (
            <div key={i} className="flex items-center gap-3 px-6 py-4 bg-white/70 backdrop-blur-md rounded-full shadow-sm border border-white/60 flex-shrink-0 transition-transform hover:-translate-y-1 hover:shadow-md cursor-default">
              <div className="bg-slate-50 p-1.5 rounded-full border border-slate-100 shadow-inner">
                {skill.icon}
              </div>
              <span className="font-bold text-slate-700 text-sm">{skill.name}</span>
            </div>
          ))}
        </div>

        {/* Row 2 */}
        <div className="flex w-max animate-marquee-right gap-4 hover:[animation-play-state:paused] py-2">
          {[...skillsRow2, ...skillsRow2, ...skillsRow2].map((skill, i) => (
            <div key={i} className="flex items-center gap-3 px-6 py-4 bg-white/70 backdrop-blur-md rounded-full shadow-sm border border-white/60 flex-shrink-0 transition-transform hover:-translate-y-1 hover:shadow-md cursor-default">
              <div className="bg-slate-50 p-1.5 rounded-full border border-slate-100 shadow-inner">
                {skill.icon}
              </div>
              <span className="font-bold text-slate-700 text-sm">{skill.name}</span>
            </div>
          ))}
        </div>

      </div>
    </section>
  );
}
