/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans:    ['Poppins', 'Plus Jakarta Sans', 'system-ui', 'sans-serif'],
                display: ['Poppins', 'Plus Jakarta Sans', 'system-ui', 'sans-serif'],
                mono:    ['JetBrains Mono', 'monospace'],
            },
            colors: {
                // Deep Purple — primary brand (Fio theme)
                primary: {
                    50:  '#fdf4ff',
                    100: '#f7e5ff',
                    200: '#efcbff',
                    300: '#e0a0ff',
                    400: '#cc6eee',
                    500: '#9E4ABB',
                    600: '#8B3DAA',
                    700: '#6d2280',
                    800: '#4B1566',
                    900: '#3A004D',
                    950: '#1e0028',
                },
                // Mauve / Secondary
                mauve: {
                    100: '#f3dde6',
                    200: '#e8bcd0',
                    300: '#d48fab',
                    400: '#b86b87',
                    500: '#8B4F67',
                    600: '#73374f',
                    700: '#5a2038',
                },
                // Lavender surface
                surface: {
                    50:  '#fdfcff',
                    100: '#f7f4fc',
                    200: '#ede8f5',
                    300: '#ddd6ed',
                    400: '#c9bede',
                    base: '#EBE6EF',
                },
                // Neutral / slate
                neutral: {
                    50:  '#f8fafc',
                    100: '#f1f5f9',
                    200: '#e2e8f0',
                    300: '#cbd5e1',
                    400: '#94a3b8',
                    500: '#64748b',
                    600: '#475569',
                    700: '#334155',
                    800: '#1e293b',
                    900: '#0f172a',
                },
                // Accent green (available badge)
                emerald: {
                    400: '#34d399',
                    500: '#10b981',
                    600: '#059669',
                },
            },
            backgroundImage: {
                'hero-gradient':    'radial-gradient(ellipse 130% 90% at 60% -15%, #e0c8f0 0%, #ede6f5 25%, #f5f0fa 50%, #EBE6EF 75%)',
                'purple-gradient':  'linear-gradient(135deg, #3A004D 0%, #9E4ABB 60%, #cc6eee 100%)',
                'glass-gradient':   'linear-gradient(135deg, rgba(255,255,255,0.45) 0%, rgba(255,255,255,0.15) 100%)',
                'card-hover':       'linear-gradient(135deg, rgba(158,74,187,0.08) 0%, rgba(139,79,103,0.10) 100%)',
            },
            animation: {
                'float':            'float 5s ease-in-out infinite',
                'float-slow':       'float 7s ease-in-out 1s infinite',
                'float-fast':       'float 3.5s ease-in-out 0.5s infinite',
                'swing':            'swing 3s ease-in-out infinite',
                'marquee':          'marquee 30s linear infinite',
                'marquee-reverse':  'marqueeReverse 35s linear infinite',
                'fade-in-up':       'fadeInUp 0.6s ease-out forwards',
                'fade-in':          'fadeIn 0.5s ease-out forwards',
                'pulse-dot':        'pulseDot 2s ease-in-out infinite',
                'spin-slow':        'spin 20s linear infinite',
                'gradient-shift':   'gradientShift 8s ease infinite',
                'slide-in-left':    'slideInLeft 0.6s ease-out forwards',
                'slide-in-right':   'slideInRight 0.6s ease-out forwards',
                'ping-slow':        'ping 2s cubic-bezier(0,0,0.2,1) infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0px)' },
                    '50%':      { transform: 'translateY(-14px)' },
                },
                swing: {
                    '0%, 100%': { transform: 'rotate(-5deg)' },
                    '50%':      { transform: 'rotate(5deg)' },
                },
                marquee: {
                    '0%':   { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
                },
                marqueeReverse: {
                    '0%':   { transform: 'translateX(-50%)' },
                    '100%': { transform: 'translateX(0)' },
                },
                fadeInUp: {
                    '0%':   { opacity: '0', transform: 'translateY(28px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeIn: {
                    '0%':   { opacity: '0' },
                    '100%': { opacity: '1' },
                },
                pulseDot: {
                    '0%, 100%': { transform: 'scale(1)', opacity: '1' },
                    '50%':      { transform: 'scale(1.4)', opacity: '0.7' },
                },
                gradientShift: {
                    '0%, 100%': { backgroundPosition: '0% 50%' },
                    '50%':      { backgroundPosition: '100% 50%' },
                },
                slideInLeft: {
                    '0%':   { opacity: '0', transform: 'translateX(-32px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                slideInRight: {
                    '0%':   { opacity: '0', transform: 'translateX(32px)' },
                    '100%': { opacity: '1', transform: 'translateX(0)' },
                },
            },
            backgroundSize: {
                '200%': '200%',
                '300%': '300%',
            },
            backdropBlur: {
                xs: '2px',
            },
            boxShadow: {
                'glass':       '0 8px 32px rgba(58, 0, 77, 0.10), inset 0 1px 1px rgba(255,255,255,0.6)',
                'glass-hover': '0 16px 48px rgba(58, 0, 77, 0.18), inset 0 1px 1px rgba(255,255,255,0.7)',
                'card':        '0 4px 24px rgba(58, 0, 77, 0.08)',
                'card-hover':  '0 12px 40px rgba(58, 0, 77, 0.16)',
                'purple':      '0 8px 32px rgba(158, 74, 187, 0.35)',
                'glow':        '0 0 40px rgba(158, 74, 187, 0.3)',
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '2.5rem',
            },
        },
    },
    plugins: [],
};
