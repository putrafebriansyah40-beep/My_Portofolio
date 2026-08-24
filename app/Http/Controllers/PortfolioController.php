<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessage;

class PortfolioController extends Controller
{
    /**
     * Display the portfolio page.
     */
    public function index()
    {
        $data = [
            // Personal Info
            'name' => 'Febriansyah Putra',
            'title' => 'Portfolio | Febriansyah Putra - Full Stack Developer',
            'email' => 'putrafebriansyah40@gmail.com',
            'phone' => '+62 831 9569 0357',
            'location' => 'Padang, Sumatera Barat, Indonesia',
            'education_short' => 'D4 TRPL',
            'instagram' => '@fbriansyh_ptra',

            // Hero Section
            'hero_description' => 'Mahasiswa semester 5 Politeknik Negeri Padang Jurusan Teknologi Informasi Program Studi D4 Teknologi Rekayasa Perangkat Lunak dengan IPK 3,27 yang sekarang aktif mengembangkan kemampuan pada bidang perangkat lunak web berbasis desktop dan mobile.',
            'typing_texts' => [
                'Full-Stack Developer',
                'Desain Grafis'
            ],

            // About Section
            'about_title' => 'Full Stack Developer & Mahasiswa Politeknik Negeri Padang',
            'about_description' => 'Mahasiswa semester 5 Politeknik Negeri Padang Jurusan Teknologi Informasi Program Studi D4 Teknologi Rekayasa Perangkat Lunak dengan IPK 3,27 yang sekarang aktif mengembangkan kemampuan pada bidang perangkat lunak web berbasis desktop dan mobile.',
            'about_description_2' => 'Berpengalaman pada PHP, JavaScript menggunakan framework Laravel dan flutter. Selain itu, saya memiliki keahlian dalam fotografi, videografi dan desain. terbukti sudah berkontribusi dalam berbagai project baik dalam perkuliahan dan organisasi kampus.',

            // Skills
            'skills' => [
                [
                    'title' => 'Hard Skill',
                    'icon' => 'M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z',
                    'color' => 'from-violet-500 to-purple-500',
                    'items' => [
                        ['name' => 'PHP, Java, JavaScript, SQL', 'level' => 85],
                        ['name' => 'Laravel, Flutter, React.Js', 'level' => 85],
                        ['name' => 'Git, Github, VS Code, Figma', 'level' => 90],
                        ['name' => 'MySQL', 'level' => 85],
                        ['name' => 'OOP, SDLC', 'level' => 80],
                        ['name' => 'Fotografi, Videografi, Desain', 'level' => 85],
                    ]
                ],
                [
                    'title' => 'Soft Skill',
                    'icon' => 'M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.066 2.573c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.573 1.066c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.066-2.573c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z M15 12a3 3 0 11-6 0 3 3 0 016 0z',
                    'color' => 'from-emerald-500 to-teal-500',
                    'items' => [
                        ['name' => 'Teamwork', 'level' => 90],
                        ['name' => 'Problem Solving', 'level' => 85],
                        ['name' => 'Adaptabilitas', 'level' => 90],
                        ['name' => 'Komunikasi', 'level' => 85],
                    ]
                ],
            ],

            // Projects
            'projects' => [
                [
                    'title' => 'PROJECT BASED LEARNING',
                    'description' => 'Peran : FrontEnd Developer. Menulis kode antarmuka aplikasi layaknya Single Page Application (SPA) menggunakan komponen React. Mempercantik antarmuka agar responsif dan modern menggunakan utility classes dari Tailwind CSS.',
                    'tags' => ['React', 'Tailwind CSS'],
                    'category' => 'web-app',
                    'color' => 'from-cyan-600/20 to-blue-600/20',
                    'border' => 'hover:border-cyan-500/30',
                    'link' => 'https://github.com/M-IrsyadGumanof/QM-Cafe-Billiard',
                    'image' => 'images/projects/qm-billiard-cafe.jpeg',
                ],
                [
                    'title' => 'SISIPOL(SISTEM INFORMASI FORSIPOL)-On Going',
                    'description' => 'Peran : Full Stack Developer. Membangun Sistem Informasi Forsipol secara full-stack, menggantikan pencatatan data anggota dan administrasi keuangan manual. Mengembangkan frontend responsif dengan Blade Template (HTML/CSS) dan mengintegrasikan backend berbasis framework Laravel (PHP) dengan MySQL.',
                    'tags' => ['Laravel', 'MySQL', 'Blade'],
                    'category' => 'web-app',
                    'color' => 'from-rose-600/20 to-pink-600/20',
                    'border' => 'hover:border-rose-500/30',
                    'link' => 'https://github.com/putrafebriansyah40-beep/SistemInformasiForsipol',
                    'image' => 'images/projects/sisipol.png',
                ],
                [
                    'title' => 'UI/UX QM Billiard dan Cafe',
                    'description' => 'Desain antarmuka pengguna dan pengalaman pengguna untuk aplikasi QM Billiard dan Cafe.',
                    'tags' => ['Figma', 'UI/UX'],
                    'category' => 'ui-ux',
                    'color' => 'from-violet-600/20 to-purple-600/20',
                    'border' => 'hover:border-violet-500/30',
                    'link' => 'https://www.figma.com/design/SmKvpP1B6jZHsPqLxLe8mB/QM-Cafe---Billiard-V2?node-id=0-1&t=NrAsjkIcWTHi8eDI-1',
                    'image' => 'images/projects/qm-uiux-figma.jpg',
                ]
            ],

            // Timeline (Experience & Education)
            'timeline' => [
                [
                    'type' => 'work',
                    'title' => 'Sekretaris Umum',
                    'org' => 'FORUM STUDI ISLAM POLITEKNIK',
                    'period' => '2025 - 2026',
                    'description' => 'Menjadi tangan kanan Ketua Umum dan mengelola administrasi, menjadi pengelola dalam hal surat menyurat.',
                ],
                [
                    'type' => 'work',
                    'title' => 'Anggota Multimedia Support System',
                    'org' => 'LEMBAGA RESPONSI AGAMA ISLAM',
                    'period' => '2025 - 2026',
                    'description' => 'Membantu ketua divisi dalam menyajikan berbagai informasi melalui media sosial yang disajikan untuk semua mahasiswa di Politeknik Negeri Padang.',
                ],
                [
                    'type' => 'work',
                    'title' => 'Anggota Public Reationship',
                    'org' => 'CYBERTECH',
                    'period' => '2026 - Sekarang',
                    'description' => 'Menjadi jembatan komunikasi antara organisasi dengan publik internal maupun eksternal guna menjaga citra positif.',
                ],
                [
                    'type' => 'education',
                    'title' => 'D4 Teknologi Rekayasa Perangkat Lunak',
                    'org' => 'POLITEKNIK NEGERI PADANG',
                    'period' => '2024 - Sekarang',
                    'description' => 'GPA: 3.27. Aktif dalam pembelajaran dan pengembangan kemampuan di bidang rekayasa perangkat lunak.',
                ],
                [
                    'type' => 'education',
                    'title' => 'MIPA',
                    'org' => 'SMA NEGERI 1 SUNGAI LIMAU',
                    'period' => '2021 - 2024',
                    'description' => 'Lulus dengan fokus pada Ilmu Pengetahuan Alam.',
                ],
            ],

            // Certifications
            'certs' => [],
        ];

        return view('welcome', $data);
    }

    /**
     * Handle the contact form submission.
     */
    public function sendMessage(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string'
        ]);

        try {
            Mail::to('putrafebriansyah40@gmail.com')->send(new ContactMessage($validated));
            return response()->json(['success' => true, 'message' => 'Pesan berhasil dikirim!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Gagal mengirim pesan: ' . $e->getMessage()], 500);
        }
    }
}
