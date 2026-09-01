"use client";

import React, { createContext, useContext, useState, useEffect } from "react";
import { dictionaries } from "./dictionaries";

type Language = "id" | "en";

interface LanguageContextType {
  language: Language;
  setLanguage: (lang: Language) => void;
  t: (key: string) => string;
}

const LanguageContext = createContext<LanguageContextType | undefined>(undefined);

export function LanguageProvider({ children }: { children: React.ReactNode }) {
  const [language, setLanguage] = useState<Language>("id");

  useEffect(() => {
    // Try to load from localStorage on mount
    const savedLang = localStorage.getItem("portfolio-lang") as Language;
    if (savedLang && (savedLang === "id" || savedLang === "en")) {
      setLanguage(savedLang);
    }
  }, []);

  const changeLanguage = (lang: Language) => {
    setLanguage(lang);
    localStorage.setItem("portfolio-lang", lang);
  };

  const t = (key: string): string => {
    const keys = key.split(".");
    let current: any = dictionaries[language];
    
    for (const k of keys) {
      if (current[k] === undefined) {
        console.warn(`Translation key not found: ${key}`);
        return key;
      }
      current = current[k];
    }
    
    return current as string;
  };

  return (
    <LanguageContext.Provider value={{ language, setLanguage: changeLanguage, t }}>
      {children}
    </LanguageContext.Provider>
  );
}

export function useLanguage() {
  const context = useContext(LanguageContext);
  if (context === undefined) {
    throw new Error("useLanguage must be used within a LanguageProvider");
  }
  return context;
}
