<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Emmanuel E. Vergara Jr. | Digital Architect</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-low": "#1c1b1b",
                        "on-tertiary-fixed": "#001a41",
                        "surface-container-highest": "#353534",
                        "outline": "#83958c",
                        "on-secondary": "#163440",
                        "surface-container-lowest": "#0e0e0e",
                        "surface-dim": "#131313",
                        "primary-container": "#00ffc8",
                        "primary": "#fcfffb",
                        "tertiary-fixed-dim": "#adc7ff",
                        "tertiary-container": "#d6e1ff",
                        "secondary-container": "#304d5a",
                        "surface-variant": "#353534",
                        "surface-tint": "#00e0b0",
                        "inverse-primary": "#006c53",
                        "on-surface": "#e5e2e1",
                        "on-error-container": "#ffdad6",
                        "on-error": "#690005",
                        "secondary-fixed": "#c9e7f7",
                        "on-secondary-fixed": "#001f2a",
                        "on-primary": "#00382a",
                        "on-primary-fixed-variant": "#00513e",
                        "tertiary-fixed": "#d8e2ff",
                        "on-tertiary-container": "#0060ca",
                        "error-container": "#93000a",
                        "on-tertiary": "#002e68",
                        "on-secondary-fixed-variant": "#2e4b57",
                        "on-primary-container": "#007258",
                        "inverse-on-surface": "#313030",
                        "inverse-surface": "#e5e2e1",
                        "on-tertiary-fixed-variant": "#004493",
                        "surface": "#131313",
                        "primary-fixed-dim": "#00e0b0",
                        "on-secondary-container": "#9fbdcc",
                        "on-primary-fixed": "#002117",
                        "surface-container-high": "#2a2a2a",
                        "secondary-fixed-dim": "#adcbda",
                        "outline-variant": "#3a4a43",
                        "primary-fixed": "#2cffca",
                        "secondary": "#adcbda",
                        "error": "#ffb4ab",
                        "surface-bright": "#393939",
                        "on-background": "#e5e2e1",
                        "on-surface-variant": "#b9cbc1",
                        "surface-container": "#201f1f",
                        "tertiary": "#fffdff",
                        "background": "#131313"
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .grid-bg {
            background-image: radial-gradient(circle, #3a4a43 1px, transparent 1px);
            background-size: 24px 24px;
            opacity: 0.05;
        }
        .glass-panel {
            background: rgba(19, 19, 19, 0.7);
            backdrop-filter: blur(20px);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-background text-on-surface font-body selection:bg-primary-container selection:text-on-primary-container overflow-x-hidden">
<!-- Background Grid Overlay -->
<div class="fixed inset-0 grid-bg pointer-events-none z-0"></div>
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-[#131313]/70 backdrop-blur-xl border-b border-[#00ffc8]/10 flex justify-between items-center px-6 h-16 w-full">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-emerald-400" data-icon="terminal">terminal</span>
<h1 class="text-xl font-bold tracking-tighter text-[#fcfffb] font-headline">EV.ENGINEER</h1>
</div>
<div class="flex items-center gap-2">
<span class="w-2 h-2 rounded-full bg-primary-container shadow-[0_0_8px_#00ffc8]"></span>
<span class="text-[10px] font-label uppercase tracking-widest text-on-surface-variant">System Active</span>
</div>
</header>
<main class="relative z-10 pt-24 pb-32 px-6">
<!-- Hero Section -->
<section class="mb-12">
<div class="relative mb-8">
<div class="absolute -top-4 -left-4 w-24 h-24 border-l-2 border-t-2 border-primary-container/30"></div>
<div class="relative w-48 h-48 mx-auto rounded-full overflow-hidden border-2 border-primary-container/20 p-2">
<img alt="Emmanuel E. Vergara Jr." class="w-full h-full object-cover rounded-full grayscale hover:grayscale-0 transition-all duration-700" data-alt="Close-up portrait of a tech professional in a dark studio with cinematic cyan neon backlighting and digital overlays" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaGmMZkf6Icj1OuNsWEoa0MVTqFf2IZWDxpxwlj_3HzcNVtHfzeKLjIy4zh_GLhUO61NUBl5AV8XxdKP3Oi5Ll-XG3ev5XBGL-45FdPPJVLuIud9I18O4cXvZgR34JGHuBQBt8cxxcMlavGyxteo_6iau_QElW_GD_buUPbc1R8TT04Fek94w1_bVgU7CIZORWBQcp5wILhAkQ_wvsnKOqGaYQMrIO-0PLls67eUxXJMXjiU-j2hTB9q3A7H5uELFnATPkMA4lDdI"/>
</div>
<div class="absolute -bottom-2 right-1/4 bg-surface-container-high border border-outline-variant px-4 py-1 rounded-full flex items-center gap-2">
<span class="text-[10px] font-label text-primary-container">SEC_OVR_99</span>
</div>
</div>
<div class="text-center space-y-4">
<h2 class="text-4xl font-headline font-bold text-primary tracking-tight leading-none">
                    Emmanuel E.<br/><span class="text-primary-container">Vergara Jr.</span>
</h2>
<div class="flex flex-wrap justify-center gap-2">
<span class="text-xs font-label text-on-surface-variant bg-surface-container-low px-3 py-1 rounded-full border border-outline-variant/30">Computer Engineering</span>
<span class="text-xs font-label text-on-surface-variant bg-surface-container-low px-3 py-1 rounded-full border border-outline-variant/30">Web Dev</span>
<span class="text-xs font-label text-on-surface-variant bg-surface-container-low px-3 py-1 rounded-full border border-outline-variant/30">Cybersecurity</span>
</div>
</div>
</section>
<!-- Brief About (Bento Card style) -->
<section class="mb-8">
<div class="bg-surface-container-low p-6 rounded-xl border border-outline-variant/20 relative overflow-hidden">
<div class="absolute top-0 right-0 p-4 opacity-10">
<span class="material-symbols-outlined text-6xl" data-icon="shield">shield</span>
</div>
<p class="text-on-surface-variant leading-relaxed text-sm relative z-10">
<span class="text-primary-container font-headline font-bold">// PROFILE:</span> Computer Engineering graduate with expertise in <span class="text-primary">Laravel</span>, <span class="text-primary">DigitalOcean</span>, and <span class="text-primary">Cybersecurity</span>. Active researcher on HTB/TryHackMe platforms focusing on penetration testing and secure infrastructure.
                </p>
</div>
</section>
<!-- Skills Section (Compact) -->
<section class="mb-8">
<h3 class="text-[10px] font-label uppercase tracking-[0.2em] text-primary-container mb-4 px-1">Tech Stack</h3>
<div class="grid grid-cols-5 gap-4">
<div class="flex flex-col items-center gap-2">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center border border-outline-variant/20 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="php">php</span>
</div>
<span class="text-[9px] font-label text-on-surface-variant uppercase">Laravel</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center border border-outline-variant/20 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="terminal">terminal</span>
</div>
<span class="text-[9px] font-label text-on-surface-variant uppercase">PHP</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center border border-outline-variant/20 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="database">database</span>
</div>
<span class="text-[9px] font-label text-on-surface-variant uppercase">MySQL</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center border border-outline-variant/20 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="cloud">cloud</span>
</div>
<span class="text-[9px] font-label text-on-surface-variant uppercase">Cloud</span>
</div>
<div class="flex flex-col items-center gap-2">
<div class="w-12 h-12 rounded-xl bg-surface-container-high flex items-center justify-center border border-outline-variant/20 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="encrypted">encrypted</span>
</div>
<span class="text-[9px] font-label text-on-surface-variant uppercase">Cyber</span>
</div>
</div>
</section>
<!-- Education -->
<section class="mb-12">
<div class="border-l-2 border-primary-container/20 ml-2 pl-6 py-2">
<h3 class="text-[10px] font-label uppercase tracking-[0.2em] text-primary-container mb-2">Education</h3>
<h4 class="text-primary font-headline font-bold text-lg leading-tight">BS Computer Engineering</h4>
<p class="text-on-surface-variant text-sm mt-1">University of Mindanao Digos College</p>
<div class="mt-2 flex items-center gap-2 text-primary-container/60">
<span class="material-symbols-outlined text-xs" data-icon="verified">verified</span>
<span class="text-[10px] font-label uppercase tracking-widest">Academic Excellence</span>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="flex flex-col gap-4">
<button class="w-full h-14 bg-primary-container text-on-primary-container font-headline font-bold uppercase tracking-widest text-sm rounded-xl flex items-center justify-center gap-3 active:scale-95 transition-transform">
<span class="material-symbols-outlined" data-icon="download">download</span>
                Download Dossier
            </button>
<button class="w-full h-14 bg-surface-container-high text-primary border border-outline-variant/40 font-headline font-bold uppercase tracking-widest text-sm rounded-xl flex items-center justify-center gap-3 active:scale-95 transition-transform">
<span class="material-symbols-outlined" data-icon="alternate_email">alternate_email</span>
                Connect
            </button>
</section>
</main>
<!-- BottomNavBar -->
<nav class="fixed bottom-0 w-full rounded-t-2xl z-50 bg-[#131313]/80 backdrop-blur-2xl border-t border-white/5 shadow-[0_-10px_40px_rgba(0,255,200,0.05)] flex justify-around items-center h-20 pb-4 px-4">
<a class="flex flex-col items-center justify-center text-[#00ffc8] space-y-1 active:scale-90 transition-transform duration-300" href="#">
<span class="material-symbols-outlined" data-icon="home" style="font-variation-settings: 'FILL' 1;">home</span>
<span class="text-[10px] uppercase tracking-[0.1em] font-medium font-body">Home</span>
</a>
<a class="flex flex-col items-center justify-center text-[#fcfffb]/40 space-y-1 active:scale-90 transition-transform duration-300 hover:text-[#00ffc8]" href="#">
<span class="material-symbols-outlined" data-icon="database">database</span>
<span class="text-[10px] uppercase tracking-[0.1em] font-medium font-body">Skills</span>
</a>
<a class="flex flex-col items-center justify-center text-[#fcfffb]/40 space-y-1 active:scale-90 transition-transform duration-300 hover:text-[#00ffc8]" href="#">
<span class="material-symbols-outlined" data-icon="verified">verified</span>
<span class="text-[10px] uppercase tracking-[0.1em] font-medium font-body">Certs</span>
</a>
<a class="flex flex-col items-center justify-center text-[#fcfffb]/40 space-y-1 active:scale-90 transition-transform duration-300 hover:text-[#00ffc8]" href="#">
<span class="material-symbols-outlined" data-icon="account_tree">account_tree</span>
<span class="text-[10px] uppercase tracking-[0.1em] font-medium font-body">Projects</span>
</a>
</nav>
</body></html>
