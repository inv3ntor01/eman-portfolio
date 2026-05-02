<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Emmanuel E. Vergara Jr. | Digital Architect</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface": "#e5e2e1",
                    "surface": "#131313",
                    "outline": "#83958c",
                    "surface-variant": "#353534",
                    "tertiary": "#fffdff",
                    "on-error-container": "#ffdad6",
                    "on-tertiary-fixed": "#001a41",
                    "on-tertiary-container": "#0060ca",
                    "secondary": "#adcbda",
                    "inverse-primary": "#006c53",
                    "on-primary-container": "#007258",
                    "primary-fixed-dim": "#00e0b0",
                    "outline-variant": "#3a4a43",
                    "primary": "#fcfffb",
                    "tertiary-fixed": "#d8e2ff",
                    "error": "#ffb4ab",
                    "background": "#131313",
                    "inverse-surface": "#e5e2e1",
                    "surface-container-highest": "#353534",
                    "primary-container": "#00ffc8",
                    "surface-bright": "#393939",
                    "on-tertiary": "#002e68",
                    "secondary-container": "#304d5a",
                    "surface-container-high": "#2a2a2a",
                    "tertiary-fixed-dim": "#adc7ff",
                    "surface-dim": "#131313",
                    "on-primary": "#00382a",
                    "surface-tint": "#00e0b0",
                    "tertiary-container": "#d6e1ff",
                    "on-background": "#e5e2e1",
                    "secondary-fixed-dim": "#adcbda",
                    "surface-container-low": "#1c1b1b",
                    "on-tertiary-fixed-variant": "#004493",
                    "on-secondary-fixed": "#001f2a",
                    "on-primary-fixed-variant": "#00513e",
                    "primary-fixed": "#2cffca",
                    "on-secondary-fixed-variant": "#2e4b57",
                    "on-secondary-container": "#9fbdcc",
                    "surface-container": "#201f1f",
                    "on-error": "#690005",
                    "error-container": "#93000a",
                    "surface-container-lowest": "#0e0e0e",
                    "on-surface-variant": "#b9cbc1",
                    "on-primary-fixed": "#002117",
                    "on-secondary": "#163440",
                    "inverse-on-surface": "#313030",
                    "secondary-fixed": "#c9e7f7"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Space Grotesk"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; background-color: #131313; color: #e5e2e1; }
        .font-headline { font-family: 'Space Grotesk', sans-serif; }
        .grid-pattern {
            background-image: radial-gradient(circle, #3a4a43 1px, transparent 1px);
            background-size: 24px 24px;
            opacity: 0.1;
        }
        .glass-card {
            background: rgba(42, 42, 42, 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 255, 200, 0.1);
        }
        .cyber-glow {
            box-shadow: 0 0 20px rgba(0, 255, 200, 0.15);
        }
    </style>
</head>
<body class="selection:bg-primary-container selection:text-on-primary-container overflow-x-hidden">
<!-- Grid Overlay -->
<div class="fixed inset-0 grid-pattern pointer-events-none z-0"></div>
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-[#131313]/70 backdrop-blur-xl border-b border-[#00FFC8]/10">
<div class="flex justify-between items-center max-w-7xl mx-auto px-8 h-20">
<div class="text-2xl font-bold tracking-tighter text-[#fcfffb] font-headline">
                EVRGR
            </div>
<div class="hidden md:flex items-center gap-8">
<a class="text-[#00FFC8] font-bold border-b-2 border-[#00FFC8] pb-1 font-['Space_Grotesk'] tracking-tight" href="#Home">Home</a>
<a class="text-[#fcfffb]/60 hover:text-[#fcfffb] transition-colors font-['Space_Grotesk'] tracking-tight" href="#Profile">Profile</a>
<a class="text-[#fcfffb]/60 hover:text-[#fcfffb] transition-colors font-['Space_Grotesk'] tracking-tight" href="#Skills">Skills</a>
<a class="text-[#fcfffb]/60 hover:text-[#fcfffb] transition-colors font-['Space_Grotesk'] tracking-tight" href="#Certifications">Certifications</a>
<a class="text-[#fcfffb]/60 hover:text-[#fcfffb] transition-colors font-['Space_Grotesk'] tracking-tight" href="#Projects">Projects</a>
</div>
<a class="bg-primary-container text-on-primary-container px-6 py-2 rounded-lg font-bold hover:scale-95 transition-all duration-200" href="mailto:emmanuelvergarajr@gmail.com">
                Hire Me
            </a>
</div>
</nav>
<main class="relative z-10 pt-20">
<!-- Hero Section -->
<section class="min-h-[921px] flex items-center px-8 max-w-7xl mx-auto" id="Home">
<div class="w-full lg:w-2/3">
<div class="flex items-center gap-3 mb-6">
<span class="w-3 h-3 rounded-full bg-primary-container cyber-glow"></span>
<span class="text-primary-fixed-dim font-label text-sm uppercase tracking-[0.2em]">System Online</span>
</div>
<div class="flex flex-col md:flex-row items-center gap-8 mb-6">
<div class="relative flex-shrink-0">
<div class="absolute inset-0 rounded-full border-2 border-primary-container/30 animate-pulse"></div>
<img alt="Emmanuel E. Vergara Jr." class="w-32 h-32 md:w-40 md:h-40 rounded-full object-cover border-2 border-primary-container cyber-glow relative z-10" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXz9CyPH3fzfGmUXhSNBaGrPZBqi6zCBX2DduY6KpP2zfTbB2AFnOo2-oCrFzhwt0Sw7YfFzuzHAIzD2IwPzNnebFSiy6OS4qMzdMM5OnYkKHNV9UXC3N9Pv-QgRFHgw_KIZKnzVk17kZxJR_2Nsqv5bvY8T8d1a0aUlecaZ-ewxbpsUm7AJfh2WXr9pNkyukdDWjs_8gnaEkMTKqLZaGv5pJutnopo-y5RfFK-BfFF1v3pd1S0Jnya07lHXKJkVJ9hKgkp8cTyvY"/>
</div>
<h1 class="text-6xl md:text-8xl font-headline font-bold text-primary tracking-tighter leading-none">
        Emmanuel E. <br/>Vergara Jr.
    </h1>
</div>
<p class="text-xl md:text-2xl text-on-surface-variant font-headline font-light mb-10 max-w-2xl leading-relaxed">
                    Computer Engineering <span class="text-primary-container">|</span> Web Dev <span class="text-primary-container">|</span> Cybersecurity
                </p>
<div class="flex flex-wrap gap-4">
<button class="bg-primary-container text-on-primary-container px-8 py-4 rounded-lg font-bold flex items-center gap-2 hover:scale-105 transition-transform">
<span class="material-symbols-outlined">download</span>
                        Download CV
                    </button>
<button class="border border-outline-variant bg-surface-bright/10 backdrop-blur-md text-primary px-8 py-4 rounded-lg font-bold hover:bg-surface-container-high transition-colors">
                        View Projects
                    </button>
</div>
</div>
</section>
<!-- Profile Section -->
<section class="py-32 bg-surface-container-low/50" id="Profile">
<div class="max-w-7xl mx-auto px-8 grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
<div>
<h2 class="text-sm font-label uppercase tracking-[0.3em] text-primary-container mb-4">Identity Matrix</h2>
<h3 class="text-4xl font-headline font-bold text-primary mb-8 leading-tight">Bridging the Gap Between Code and Security.</h3>
<div class="space-y-6 text-on-surface-variant text-lg leading-relaxed">
<p>A dedicated Computer Engineering graduate from Davao City, Philippines, specializing in robust web architectures and offensive security. My expertise spans across full-stack development with <span class="text-primary italic">Laravel</span> and cloud deployment strategies on <span class="text-primary">DigitalOcean</span>.</p>
<p>I operate at the intersection of development and defense, utilizing <span class="text-primary">Cybersecurity Labs</span> to simulate real-world threat vectors and build resilient digital infrastructures.</p>
</div>
</div>
<div class="relative aspect-square">
<div class="absolute inset-0 border-2 border-primary-container/20 translate-x-4 translate-y-4 rounded-xl"></div>
<img alt="Tech environment" class="w-full h-full object-cover rounded-xl grayscale hover:grayscale-0 transition-all duration-700 shadow-2xl" data-alt="Modern high-tech server room with glowing green LED lights and digital data stream overlays, minimalist architectural photography style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwHEhKagRF9NtLK0I7M6LLBhLGyEBfVab2dBHde51t7qQIMos2oznCg5LKOBzhGunYqP0OAtk3BggGqJoPwNtdm7nSmZaYqvfVI9NZJRYXtQm2IFwhE1Gh_KBX7lWCdXxLk7oF9r_XHV4v17f13cC2wUWxZACATYxK7hPzbR_gVZ3XRlRhqdHN6rzsqodZnFCk35AyJwiqkmR8gefAoOeRB50EnAW67GfYZmX0YOJ-k1o0QSK9jx-XlzuEMNDZlIEaySRXy4isGAI"/>
</div>
</div>
</section>
<!-- Technical Skills: Bento Grid -->
<section class="py-32 max-w-7xl mx-auto px-8" id="Skills">
<div class="mb-16">
<h2 class="text-sm font-label uppercase tracking-[0.3em] text-primary-container mb-4">Core Competencies</h2>
<h3 class="text-5xl font-headline font-bold text-primary">Technical Stack.</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Web Dev -->
<div class="md:col-span-2 glass-card p-10 rounded-xl group hover:border-primary-container/40 transition-all">
<span class="material-symbols-outlined text-primary-container text-4xl mb-6">code</span>
<h4 class="text-2xl font-headline font-bold text-primary mb-4">Web Architecture</h4>
<p class="text-on-surface-variant mb-8 max-w-md">Building scalable applications with modern frameworks and robust database management.</p>
<div class="flex flex-wrap gap-2">
<span class="px-4 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-sm font-medium">Laravel</span>
<span class="px-4 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-sm font-medium">PHP</span>
<span class="px-4 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-sm font-medium">MySQL</span>
<span class="px-4 py-1.5 bg-secondary-container text-on-secondary-container rounded-full text-sm font-medium">Tailwind CSS</span>
</div>
</div>
<!-- Cybersecurity -->
<div class="glass-card p-10 rounded-xl group hover:border-primary-container/40 transition-all">
<span class="material-symbols-outlined text-primary-container text-4xl mb-6">security</span>
<h4 class="text-2xl font-headline font-bold text-primary mb-4">Cybersecurity</h4>
<p class="text-on-surface-variant mb-6">Offensive security and infrastructure hardening.</p>
<div class="space-y-3">
<div class="flex justify-between text-xs font-label text-on-surface-variant">
<span>KALI LINUX</span>
<span>PENETRATION TESTING</span>
</div>
<div class="w-full h-1 bg-surface-container-high rounded-full overflow-hidden">
<div class="w-[85%] h-full bg-primary-container shadow-[0_0_8px_#00ffc8]"></div>
</div>
</div>
</div>
<!-- Cloud -->
<div class="glass-card p-10 rounded-xl group hover:border-primary-container/40 transition-all">
<span class="material-symbols-outlined text-primary-container text-4xl mb-6">cloud</span>
<h4 class="text-2xl font-headline font-bold text-primary mb-4">Cloud Systems</h4>
<div class="flex flex-col gap-2">
<div class="flex items-center gap-3 text-on-surface-variant">
<span class="w-1.5 h-1.5 bg-primary-container rounded-full"></span>
                            DigitalOcean Droplets
                        </div>
<div class="flex items-center gap-3 text-on-surface-variant">
<span class="w-1.5 h-1.5 bg-primary-container rounded-full"></span>
                            AWS Fundamentals
                        </div>
</div>
</div>
<!-- Programming -->
<div class="md:col-span-2 glass-card p-10 rounded-xl group hover:border-primary-container/40 transition-all flex flex-col md:flex-row items-center gap-10">
<div class="flex-1">
<span class="material-symbols-outlined text-primary-container text-4xl mb-6">terminal</span>
<h4 class="text-2xl font-headline font-bold text-primary mb-4">Programming</h4>
<p class="text-on-surface-variant mb-4">Logic-first approach to complex problem solving.</p>
</div>
<div class="grid grid-cols-2 gap-4 w-full md:w-auto">
<div class="bg-surface-container-high p-4 rounded-lg border border-outline-variant text-center">
<div class="text-primary-container font-bold text-xl">Python</div>
</div>
<div class="bg-surface-container-high p-4 rounded-lg border border-outline-variant text-center">
<div class="text-primary-container font-bold text-xl">SQL</div>
</div>
</div>
</div>
</div>
</section>
<!-- Education Section -->
<section class="py-32 bg-surface-container-low/30">
<div class="max-w-7xl mx-auto px-8">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<div class="lg:col-span-4">
<h2 class="text-sm font-label uppercase tracking-[0.3em] text-primary-container mb-4">Foundation</h2>
<h3 class="text-5xl font-headline font-bold text-primary leading-tight">Academic <br/>Roots.</h3>
</div>
<div class="lg:col-span-8">
<div class="relative pl-12 border-l border-outline-variant">
<div class="absolute -left-[5px] top-0 w-2.5 h-2.5 rounded-full bg-primary-container"></div>
<span class="text-primary-fixed-dim font-label text-sm block mb-2">2015 — 2020</span>
<h4 class="text-3xl font-headline font-bold text-primary mb-2">Bachelor of Science in Computer Engineering</h4>
<p class="text-xl text-on-surface-variant mb-4">University of Mindanao Digos College</p>
<p class="text-on-surface-variant leading-relaxed max-w-2xl">Focus on computer architecture, network security, and software engineering principles. Completed comprehensive capstone projects integrating hardware and software solutions.</p>
</div>
</div>
</div>
</div>
</section>
<!-- Certifications -->
<section class="py-32 max-w-7xl mx-auto px-8" id="Certifications">
<div class="flex justify-between items-end mb-16">
<div>
<h2 class="text-sm font-label uppercase tracking-[0.3em] text-primary-container mb-4">Validation</h2>
<h3 class="text-5xl font-headline font-bold text-primary">Certifications.</h3>
</div>
<div class="hidden md:block text-right text-on-surface-variant font-label text-sm tracking-widest uppercase">
                    Continuous Learning <br/> 2021 — 2025
                </div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-px bg-outline-variant/30 border border-outline-variant/30 rounded-xl overflow-hidden">
<div class="bg-surface p-10 hover:bg-surface-container-low transition-colors group">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-primary-container text-4xl" style="font-variation-settings: 'FILL' 1;">verified</span>
<span class="text-on-surface-variant font-mono text-sm">2024</span>
</div>
<h4 class="text-xl font-headline font-bold text-primary group-hover:text-primary-container transition-colors">Certified Ethical Hacker (CEH)</h4>
<p class="text-sm text-on-surface-variant mt-2">EC-Council Certification in Offensive Security</p>
</div>
<div class="bg-surface p-10 hover:bg-surface-container-low transition-colors group">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-primary-container text-4xl" style="font-variation-settings: 'FILL' 1;">verified</span>
<span class="text-on-surface-variant font-mono text-sm">2023</span>
</div>
<h4 class="text-xl font-headline font-bold text-primary group-hover:text-primary-container transition-colors">Machine Learning Foundations</h4>
<p class="text-sm text-on-surface-variant mt-2">Deep learning and predictive modeling certifications</p>
</div>
<div class="bg-surface p-10 hover:bg-surface-container-low transition-colors group">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-primary-container text-4xl" style="font-variation-settings: 'FILL' 1;">verified</span>
<span class="text-on-surface-variant font-mono text-sm">2022</span>
</div>
<h4 class="text-xl font-headline font-bold text-primary group-hover:text-primary-container transition-colors">AWS Certified Cloud Practitioner</h4>
<p class="text-sm text-on-surface-variant mt-2">Infrastructure deployment and cloud security fundamentals</p>
</div>
<div class="bg-surface p-10 hover:bg-surface-container-low transition-colors group">
<div class="flex justify-between items-start mb-6">
<span class="material-symbols-outlined text-primary-container text-4xl" style="font-variation-settings: 'FILL' 1;">verified</span>
<span class="text-on-surface-variant font-mono text-sm">2021</span>
</div>
<h4 class="text-xl font-headline font-bold text-primary group-hover:text-primary-container transition-colors">Full Stack Web Development</h4>
<p class="text-sm text-on-surface-variant mt-2">Specialization in modern PHP/Laravel ecosystems</p>
</div>
</div>
</section>
<!-- Projects & Competitions -->
<section class="py-32 bg-surface-container-lowest" id="Projects">
<div class="max-w-7xl mx-auto px-8">
<div class="mb-16 text-center">
<h2 class="text-sm font-label uppercase tracking-[0.3em] text-primary-container mb-4">Operations</h2>
<h3 class="text-5xl font-headline font-bold text-primary">Strategic Projects.</h3>
</div>
<div class="space-y-24">
<!-- Project 1 -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-7">
<div class="relative group overflow-hidden rounded-xl">
<img alt="Project Screenshot" class="w-full aspect-video object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Modern code editor interface showing Laravel directory structure and clean PHP code with terminal at the bottom" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0ICvBH8FGPdWj-0Jyid3yo78If_X94xqFhqsnkMQLSwz1VGZrjz57B_q3_cQykle-pU2ms7qByfrBXfzW3_HzRSo-mhsnU5anv_92fp6EOCy7J_ZUxMRsxEfiEv9SUYpBEosyECGDaePQJiHitnUf3qoxQTZzIyb6t_v3Vq5_z5oq4r-uCo21sdl_ZASe_c2DzMjc_7IgZAbGQVa2VNWBOc3IHFGZ4fp6G708ucQwwQd0dBFtm-b_nAfYvzp0gsYB9tir23Hhzyo"/>
<div class="absolute inset-0 bg-primary-container/10 group-hover:bg-transparent transition-colors"></div>
</div>
</div>
<div class="lg:col-span-5">
<span class="text-primary-container font-mono text-sm mb-4 block">01 / WEB DEPLOYMENT</span>
<h4 class="text-3xl font-headline font-bold text-primary mb-6">Laravel Web Portfolio</h4>
<p class="text-on-surface-variant text-lg leading-relaxed mb-8">A custom-built portfolio engine optimizing for speed and SEO. Hosted on DigitalOcean with continuous integration pipelines.</p>
<div class="flex gap-6">
<a class="flex items-center gap-2 text-primary hover:text-primary-container transition-colors" href="#">
<span class="material-symbols-outlined">link</span>
                                    Live Demo
                                </a>
<a class="flex items-center gap-2 text-primary hover:text-primary-container transition-colors" href="#">
<span class="material-symbols-outlined">code</span>
                                    Source Code
                                </a>
</div>
</div>
</div>
<!-- Project 2 -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
<div class="lg:col-span-5 order-2 lg:order-1">
<span class="text-primary-container font-mono text-sm mb-4 block">02 / CYBERSECURITY</span>
<h4 class="text-3xl font-headline font-bold text-primary mb-6">Cyber Labs &amp; CTFs</h4>
<p class="text-on-surface-variant text-lg leading-relaxed mb-8">Active participant in HackTheBox and TryHackMe platforms. Built local penetration testing labs to simulate enterprise vulnerabilities.</p>
<div class="flex flex-wrap gap-4 mb-8">
<div class="flex items-center gap-2 px-4 py-2 bg-surface-container-high border border-outline-variant rounded-lg">
<span class="material-symbols-outlined text-primary-container">shield_with_heart</span>
<span class="text-sm font-label">TryHackMe</span>
</div>
<div class="flex items-center gap-2 px-4 py-2 bg-surface-container-high border border-outline-variant rounded-lg">
<span class="material-symbols-outlined text-primary-container">terminal</span>
<span class="text-sm font-label">HackTheBox</span>
</div>
</div>
</div>
<div class="lg:col-span-7 order-1 lg:order-2">
<div class="relative group overflow-hidden rounded-xl">
<img alt="Cybersecurity Dashboard" class="w-full aspect-video object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Digital dashboard showing cybersecurity metrics, map of network traffic, and real-time threat detection logs in dark mode" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZ4QZywf7S_78OHUPb9eYq_-Tqxu8KNtCtEd0gFKbnIAMiaVfAKaEpOGTnzGqnczMv5hoUCmo2BBB5Lne6jTkOGrwM6h0WRprWsYjlcDBmAg8f4bKse8exdcZYT2UeUWw9mRN5iEWxD4N4o0j--0j766oxFzjCz1Cu16raELYQyluhsG3PE7RZBkImYVtE9UmIqePjodtq33LnBD_umxLNC3BEM-FL7BBjRL1voBnrH2orjbsB1ILPSKgsicP-Uda5_HmfAmS8Psg"/>
<div class="absolute inset-0 bg-primary-container/10 group-hover:bg-transparent transition-colors"></div>
</div>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-[#131313] w-full py-12 border-t border-[#00FFC8]/5 relative z-10">
<div class="flex flex-col md:flex-row justify-between items-center max-w-7xl mx-auto px-8 gap-6">
<div class="flex flex-col gap-2">
<span class="text-lg font-black text-[#fcfffb] font-headline">EVRGR</span>
<p class="font-['Inter'] text-sm tracking-widest uppercase text-slate-500">© 2024 Emmanuel E. Vergara Jr. | Digital Architect</p>
</div>
<div class="flex flex-col items-center md:items-end gap-4">
<a class="text-primary-container font-bold text-lg hover:underline decoration-2 underline-offset-8" href="mailto:emmanuelvergarajr@gmail.com">emmanuelvergarajr@gmail.com</a>
<div class="flex gap-8 font-['Inter'] text-sm tracking-widest uppercase">
<a class="text-slate-500 hover:text-[#00FFC8] transition-colors duration-300" href="#">GitHub</a>
<a class="text-slate-500 hover:text-[#00FFC8] transition-colors duration-300" href="#">LinkedIn</a>
<a class="text-slate-500 hover:text-[#00FFC8] transition-colors duration-300" href="#">Email</a>
</div>
</div>
</div>
</footer>
</body></html>
