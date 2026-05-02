<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>LuxeConnect | Guest Access</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-tertiary-fixed-variant": "#6b3b00",
                    "on-tertiary": "#ffffff",
                    "on-tertiary-container": "#ffcfa6",
                    "surface-container-high": "#e7e8e9",
                    "on-surface": "#191c1d",
                    "surface-container-highest": "#e1e3e4",
                    "on-error": "#ffffff",
                    "background": "#f8f9fa",
                    "tertiary-container": "#885116",
                    "secondary-container": "#d5e5eb",
                    "error-container": "#ffdad6",
                    "on-tertiary-fixed": "#2d1600",
                    "on-primary-fixed": "#001f2a",
                    "on-error-container": "#93000a",
                    "tertiary": "#6b3a00",
                    "on-primary-container": "#a2e1ff",
                    "on-surface-variant": "#3f484d",
                    "surface-variant": "#e1e3e4",
                    "on-secondary-fixed": "#0f1e22",
                    "outline": "#70787e",
                    "surface-container-lowest": "#ffffff",
                    "outline-variant": "#bfc8cd",
                    "surface-bright": "#f8f9fa",
                    "inverse-surface": "#2e3132",
                    "on-secondary-fixed-variant": "#3a494e",
                    "on-primary-fixed-variant": "#004d64",
                    "secondary": "#526166",
                    "error": "#ba1a1a",
                    "surface-container-low": "#f3f4f5",
                    "primary-fixed": "#bee9ff",
                    "secondary-fixed-dim": "#b9c9cf",
                    "surface-tint": "#016684",
                    "inverse-primary": "#87d0f2",
                    "surface-dim": "#d9dadb",
                    "surface-container": "#edeeef",
                    "primary-container": "#006684",
                    "primary": "#004d64",
                    "on-secondary-container": "#58676c",
                    "secondary-fixed": "#d5e5eb",
                    "on-secondary": "#ffffff",
                    "tertiary-fixed-dim": "#ffb876",
                    "surface": "#f8f9fa",
                    "primary-fixed-dim": "#87d0f2",
                    "on-primary": "#ffffff",
                    "on-background": "#191c1d",
                    "inverse-on-surface": "#f0f1f2",
                    "tertiary-fixed": "#ffdcc0"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Manrope"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
          },
        }
      }
    </script>
<style>
        .glass-panel {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .primary-gradient {
            background: linear-gradient(135deg, #004d64 0%, #006684 100%);
        }
        .ambient-shadow {
            box-shadow: 0px 10px 40px rgba(0, 31, 42, 0.06);
        }
        body { font-family: 'Inter', sans-serif; }
        h1, h2, h3 { font-family: 'Manrope', sans-serif; }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface text-on-surface flex flex-col min-h-screen selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopAppBar -->
<header class="fixed top-0 w-full z-50 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl">
<div class="flex items-center justify-between px-6 h-16 w-full max-w-screen-xl mx-auto">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#006684] dark:text-[#bee9ff]" data-icon="wifi_tethering">wifi_tethering</span>
<span class="text-xl font-bold tracking-tighter text-[#004d64] dark:text-[#bee9ff]">LuxeConnect</span>
</div>
<div class="md:flex hidden gap-6 items-center">
<a class="text-slate-500 dark:text-slate-400 font-inter text-[11px] uppercase tracking-widest hover:text-[#006684] transition-colors" href="#">Support</a>
<a class="text-slate-500 dark:text-slate-400 font-inter text-[11px] uppercase tracking-widest hover:text-[#006684] transition-colors" href="#">Services</a>
</div>
</div>
</header>
<main class="flex-grow pt-16">
<!-- Hero Section -->
<section class="px-6 pt-12 pb-8 max-w-screen-xl mx-auto">
<div class="flex flex-col gap-1 mb-8">
<div class="inline-flex items-center gap-2 px-4 py-1.5 bg-primary-fixed text-on-primary-fixed rounded-full w-fit mb-4">
<span class="relative flex h-2 w-2">
<span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
<span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
</span>
<span class="text-[10px] font-label font-bold uppercase tracking-widest">Status: Searching</span>
</div>
<h1 class="text-[3.5rem] leading-[1.1] font-extrabold tracking-tight text-on-surface max-w-md">
                    Welcome to LuxeConnect
                </h1>
<p class="text-on-surface-variant font-body text-lg leading-relaxed mt-4 max-w-sm">
                    Premium hospitality bandwidth tailored to your journey. Enter your guest voucher below to begin.
                </p>
</div>
<!-- Asymmetric Input Area -->
<div class="mt-12 flex flex-col md:flex-row gap-12 items-start">
<div class="w-full md:w-5/12 glass-panel p-8 rounded-xl ambient-shadow border border-white/20">
<div class="flex flex-col gap-6">
<div class="space-y-2">
<label class="text-[0.75rem] font-label font-bold text-on-surface-variant uppercase tracking-widest">Guest Access Voucher</label>
<input class="w-full h-14 px-4 bg-surface-container-lowest border-b-2 border-primary focus:outline-none focus:ring-0 text-xl font-headline tracking-widest text-on-surface transition-all placeholder:text-outline-variant" placeholder="XXXX-XXXX-XXXX" type="text"/>
</div>
<button class="h-14 w-full primary-gradient text-on-primary font-headline font-bold rounded-xl flex items-center justify-center gap-3 active:scale-95 transition-transform">
                            Connect
                            <span class="material-symbols-outlined" data-icon="arrow_forward">arrow_forward</span>
</button>
</div>
</div>
<!-- Abstract Decorative Card (Asymmetric Layout) -->
<div class="hidden md:block w-full md:w-6/12 h-64 rounded-xl overflow-hidden relative surface-container-high">
<img alt="Luxury hotel lobby" class="object-cover w-full h-full opacity-80" data-alt="Modern high-end boutique hotel lobby with elegant furniture, soft architectural lighting and minimalist aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDsy_5jx5MhlooIoqtouslDBgLhnTBwXst1hunDAFs_tW1ePyV3tNrNfBFePUS-Azj9Jg0BX6K28r167vfjhYhl6CitDqgtm_hLLryuc9N6rKsx11BrihEJgeXd-ewzyecIm8eHurM8H8y-inpcziqBUbEG5XMOrT3VyETSw-RQgdAXc5EdDVzqmymAylwYQYSvjsDcXSzovDzffWzzM1C2XWmOBcwrp86waF4ZTjcocTUEFo2WaQ8PMusYw-AoWOipbPYJZ67rXoac"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/40 to-transparent"></div>
<div class="absolute bottom-6 left-6">
<p class="text-white font-headline text-2xl font-bold tracking-tight">Ethereal Connectivity.</p>
</div>
</div>
</div>
</section>
<!-- Access Tiers (Bento-ish Grid) -->
<section class="px-6 py-16 bg-surface-container-low">
<div class="max-w-screen-xl mx-auto">
<div class="mb-10">
<h2 class="text-[1.75rem] font-headline font-bold text-on-surface tracking-tight">Available Access Tiers</h2>
<p class="text-on-surface-variant text-sm font-body">Choose the performance that matches your stay.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Lite Card -->
<div class="bg-surface-container-lowest p-8 rounded-xl flex flex-col gap-4 border border-outline-variant/10">
<span class="material-symbols-outlined text-secondary" data-icon="speed">speed</span>
<h3 class="text-xl font-headline font-bold">Lite</h3>
<p class="text-sm text-on-surface-variant font-body leading-relaxed">Perfect for checking emails and social updates during your morning coffee.</p>
<div class="mt-auto pt-6">
<span class="text-primary font-label text-[11px] font-bold uppercase tracking-widest">Included for all guests</span>
</div>
</div>
<!-- Premium Card -->
<div class="bg-surface-container-highest p-8 rounded-xl flex flex-col gap-4 border border-primary/10">
<span class="material-symbols-outlined text-primary" data-icon="bolt">bolt</span>
<h3 class="text-xl font-headline font-bold">Premium</h3>
<p class="text-sm text-on-surface-variant font-body leading-relaxed">High-definition streaming and seamless video calls. Designed for the modern traveler.</p>
<div class="mt-auto pt-6">
<span class="text-primary font-label text-[11px] font-bold uppercase tracking-widest">Enhanced Stability</span>
</div>
</div>
<!-- Executive Card -->
<div class="bg-primary text-on-primary p-8 rounded-xl flex flex-col gap-4 shadow-xl">
<span class="material-symbols-outlined text-primary-fixed" data-icon="diamond">diamond</span>
<h3 class="text-xl font-headline font-bold">Executive</h3>
<p class="text-sm opacity-80 font-body leading-relaxed">Unrestricted bandwidth and priority routing for mission-critical connectivity.</p>
<div class="mt-auto pt-6">
<span class="text-primary-fixed font-label text-[11px] font-bold uppercase tracking-widest">Unmatched Priority</span>
</div>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="w-full py-8 mt-auto bg-slate-50 dark:bg-slate-900/50 flex flex-col items-center gap-4 px-8 text-center">
<div class="flex flex-wrap justify-center gap-6 mb-2">
<a class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500 hover:text-[#006684] transition-colors" href="#">Privacy Policy</a>
<a class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500 hover:text-[#006684] transition-colors" href="#">Terms of Service</a>
<a class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500 hover:text-[#006684] transition-colors" href="#">Help Desk</a>
</div>
<p class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500 opacity-80">
            © 2024 LuxeConnect Hospitality. All rights reserved.
        </p>
</footer>
</body></html>
