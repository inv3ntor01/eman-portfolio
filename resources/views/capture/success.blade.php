<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .success-gradient {
            background: linear-gradient(135deg, #004d64 0%, #006684 100%);
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }
    </style>
<style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
  </head>
<body class="bg-surface font-body text-on-surface min-h-screen flex flex-col overflow-hidden">
<!-- TopAppBar -->
<header class="bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl fixed top-0 w-full z-50">
<div class="flex items-center justify-between px-6 h-16 w-full">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[#006684] dark:text-[#bee9ff]">wifi_tethering</span>
<span class="font-manrope tracking-tighter text-xl font-bold text-[#004d64] dark:text-[#bee9ff]">LuxeConnect</span>
</div>
<button class="text-slate-500 dark:text-slate-400 hover:bg-slate-100/50 dark:hover:bg-slate-800/50 transition-colors p-2 rounded-full">
<span class="material-symbols-outlined">help_outline</span>
</button>
</div>
</header>
<!-- Background Content (Blurred Portal View) -->
<main class="flex-grow pt-24 pb-12 px-6 blur-sm pointer-events-none select-none">
<div class="max-w-md mx-auto space-y-8">
<div class="space-y-2">
<h1 class="text-4xl font-headline font-extrabold tracking-tight text-on-surface">Guest Access</h1>
<p class="text-on-surface-variant text-lg leading-relaxed">Please enter your voucher details to continue your premium experience.</p>
</div>
<!-- Asymmetric Bento-style Card Layout (Simulated Background) -->
<div class="grid grid-cols-1 gap-4">
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-sm space-y-6">
<div class="space-y-4">
<div class="space-y-1">
<label class="text-[0.75rem] font-label uppercase tracking-widest text-on-surface-variant">Voucher Code</label>
<div class="h-14 bg-surface-container-low rounded-lg flex items-center px-4">
<span class="text-lg font-headline tracking-widest text-on-surface opacity-50">LUXE-XXXX-XXXX</span>
</div>
</div>
<div class="h-14 bg-primary rounded-xl flex items-center justify-center">
<span class="text-on-primary font-semibold">Validating...</span>
</div>
</div>
</div>
<div class="bg-surface-container-low p-6 rounded-xl flex items-center justify-between">
<div class="space-y-1">
<p class="font-headline font-bold text-on-surface">Premium Tier</p>
<p class="text-sm text-on-surface-variant">Up to 100Mbps download</p>
</div>
<span class="material-symbols-outlined text-primary text-3xl">speed</span>
</div>
</div>
</div>
</main>
<!-- Modal Overlay -->
<div class="fixed inset-0 z-[100] flex items-center justify-center px-6">
<!-- Backdrop -->
<div class="absolute inset-0 bg-on-surface/40 backdrop-blur-sm"></div>
<!-- Success Modal -->
<div class="relative w-full max-w-sm glass-panel rounded-[2rem] shadow-[0px_20px_60px_rgba(0,31,42,0.15)] overflow-hidden">
<div class="p-10 flex flex-col items-center text-center space-y-6">
<!-- Large Success Icon -->
<div class="w-24 h-24 success-gradient rounded-full flex items-center justify-center text-on-primary shadow-lg ring-8 ring-primary-fixed/30">
<span class="material-symbols-outlined text-5xl" style="font-variation-settings: 'FILL' 1, 'wght' 600;">check_circle</span>
</div>
<!-- Messaging -->
<div class="space-y-3">
<h2 class="text-2xl font-headline font-extrabold text-on-surface tracking-tight">Successfully Connected</h2>
<p class="text-on-surface-variant font-body leading-relaxed">
                        You now have full access to the LuxeConnect network.
                    </p>
</div>
<!-- Call to Action -->
<button class="w-full h-14 success-gradient rounded-xl text-on-primary font-bold shadow-[0px_10px_40px_rgba(0,31,42,0.1)] active:scale-95 transition-all duration-200">
                    Start Browsing
                </button>
<!-- Connection Indicator -->
<div class="bg-primary-fixed px-6 py-2 rounded-full flex items-center gap-2">
<div class="w-2 h-2 bg-primary rounded-full animate-pulse"></div>
<span class="text-on-primary-fixed-variant text-xs font-label uppercase tracking-widest font-bold">Active Connection</span>
</div>
</div>
<!-- Subtle Decorative Gradient at bottom -->
<div class="h-1 w-full success-gradient"></div>
</div>
</div>
<!-- Footer -->
<footer class="bg-slate-50 dark:bg-slate-900/50 w-full py-8 mt-auto z-10 blur-sm">
<div class="flex flex-col items-center gap-4 px-8 text-center w-full">
<div class="flex gap-6">
<span class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500">Privacy Policy</span>
<span class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500">Terms of Service</span>
<span class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500">Help Desk</span>
</div>
<p class="font-inter text-[11px] leading-relaxed uppercase tracking-widest text-slate-400 dark:text-slate-500">© 2024 LuxeConnect Hospitality. All rights reserved.</p>
</div>
</footer>
<!-- Imagery Placeholder for aesthetic context (Hidden but in code) -->
<div class="hidden">
<img data-alt="interior of a luxury modern hotel lobby with marble floors, warm lighting, and minimalist furniture in high-end editorial style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuArNoF48-ZCMrbGNUuiGqYpbWtf-0U-WZW4i4v4s8WF-NllASLSig5Xn1lOLLlTxjeew8qJLeJo-UXwOk_iWrDAgL-88vqJKg9ZjILcsJJDkSCuleoAOJJXK7L-7rp9BShVmVYA0pZroMSD-phyPX2Z5BpMvGY28BdgDG3xAtDaV6VzjTK3eCd97ZOFxdOGkKEGLoCk4Hx7gGCkit4j2FrdqLXryF-iAwp5qcZd5REexH8H8B8ILx8erBcsJ8sKa9P0kjUmaX960DIX"/>
</div>
</body></html>
