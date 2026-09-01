import type { Metadata } from "next";
import { Poppins, JetBrains_Mono, Playfair_Display } from "next/font/google";
import "./globals.css";

const poppins = Poppins({
  variable: "--font-poppins",
  subsets: ["latin"],
  weight: ["300", "400", "500", "600", "700", "800", "900"],
});

const jetbrainsMono = JetBrains_Mono({
  variable: "--font-jetbrains-mono",
  subsets: ["latin"],
  weight: ["400", "500", "600", "700"],
});

const playfairDisplay = Playfair_Display({
  variable: "--font-playfair-display",
  subsets: ["latin"],
  weight: ["400", "500", "600", "700", "800", "900"],
});

export const metadata: Metadata = {
  title: "Febriansyah Putra",
  description: "Portfolio of Febriansyah Putra, a Full Stack Developer specializing in Laravel, React, and Flutter.",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en" className="scroll-smooth">
      <body
        className={`${poppins.variable} ${jetbrainsMono.variable} ${playfairDisplay.variable} font-sans antialiased bg-[#EBE6EF] text-slate-800`}
      >
        {children}
      </body>
    </html>
  );
}
