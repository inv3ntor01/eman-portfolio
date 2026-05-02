import { Head, router } from '@inertiajs/react';
import React, { useState } from 'react';

/**
 * Guest Wi-Fi Voucher Portal Component
 * 
 * A high-end editorial-style guest access portal designed for LuxeConnect.
 */
export default function Index() {
  const [voucher, setVoucher] = useState('');
  const [isConnecting, setIsConnecting] = useState(false);

  const handleConnect = (e: React.FormEvent) => {
    e.preventDefault();
    if (!voucher) return;
    setIsConnecting(true);
    
    // Simulate connection logic
    setTimeout(() => {
      setIsConnecting(false);
      router.visit(route('portal.success'));
    }, 1500);
  };

  return (
    <>
      <Head title="Guest Wi-Fi Portal">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
      </Head>

      <div className="min-h-screen bg-slate-50 font-['Manrope'] text-slate-900 selection:bg-[#006684]/10">
        {/* Navigation */}
        <nav className="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-xl border-b border-slate-100 px-6 py-4">
          <div className="max-w-7xl mx-auto flex justify-between items-center">
            <div className="text-2xl font-bold tracking-tighter text-[#006684]">
              LuxeConnect
            </div>
            <div className="hidden md:flex space-x-8 text-sm font-medium text-slate-500">
              <a href="#" className="text-[#006684] font-semibold">Access</a>
              <a href="#" className="hover:text-[#006684] transition-colors">Services</a>
              <a href="#" className="hover:text-[#006684] transition-colors">Help</a>
            </div>
            <button className="p-2 text-slate-400 hover:text-[#006684] transition-colors">
              <span className="material-icons-outlined text-xl">help_outline</span>
            </button>
          </div>
        </nav>

        <main className="pt-24 pb-12 px-6 max-w-7xl mx-auto">
          {/* Hero & Voucher Entry Section */}
          <div className="grid lg:grid-cols-2 gap-12 items-start mb-20">
            <div className="space-y-8">
              <div className="inline-flex items-center space-x-2 bg-[#006684]/5 border border-[#006684]/10 rounded-full px-4 py-1.5">
                <div className="w-2 h-2 rounded-full bg-[#006684] animate-pulse"></div>
                <span className="text-[10px] font-bold uppercase tracking-widest text-[#006684]">Network Connected</span>
              </div>
              
              <h1 className="text-5xl md:text-7xl font-bold tracking-tight leading-[0.9] text-slate-900">
                Elevated Digital <br />
                <span className="text-[#006684]">Experiences.</span>
              </h1>
              
              <p className="text-lg text-slate-500 max-w-md leading-relaxed">
                Welcome to the curated network of <span className="font-semibold text-slate-900">LuxeConnect</span>. 
                Please enter your exclusive voucher code to begin your seamless journey.
              </p>

              <div className="grid grid-cols-2 gap-4">
                <div className="aspect-[4/3] rounded-2xl overflow-hidden bg-slate-200">
                  <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&q=80&w=800" alt="Lounge area" className="w-full h-full object-cover" />
                </div>
                <div className="aspect-[4/3] rounded-2xl overflow-hidden bg-slate-200 mt-8">
                  <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?auto=format&fit=crop&q=80&w=800" alt="Hotel interior" className="w-full h-full object-cover" />
                </div>
              </div>
            </div>

            {/* Voucher Card */}
            <div className="lg:sticky lg:top-32 bg-white rounded-[32px] p-8 md:p-12 shadow-xl shadow-slate-200/50 border border-slate-100">
              <div className="mb-8">
                <span className="text-[10px] font-bold uppercase tracking-widest text-slate-400 block mb-2">Guest Access</span>
                <h2 className="text-3xl font-bold tracking-tight">Enter Voucher</h2>
              </div>

              <form onSubmit={handleConnect} className="space-y-6">
                <div>
                  <label className="text-[10px] font-bold uppercase tracking-widest text-slate-500 block mb-3">Voucher Code</label>
                  <input 
                    type="text" 
                    value={voucher}
                    onChange={(e) => setVoucher(e.target.value)}
                    placeholder="XXXX - XXXX - XXXX" 
                    className="w-full bg-slate-50 border-none rounded-xl px-6 py-5 text-xl font-mono tracking-widest focus:ring-2 focus:ring-[#006684]/20 transition-all placeholder:text-slate-300"
                  />
                  <p className="mt-4 flex items-start space-x-2 text-xs text-slate-400">
                    <span className="material-icons-outlined text-sm">info</span>
                    <span>Found on your guest check-in card or welcome mail.</span>
                  </p>
                </div>

                <button 
                  type="submit"
                  disabled={isConnecting || !voucher}
                  className="w-full bg-[#006684] hover:bg-[#004d64] disabled:bg-slate-200 text-white rounded-xl py-5 font-bold tracking-wide flex items-center justify-center space-x-2 transition-all active:scale-[0.98]"
                >
                  <span>{isConnecting ? 'Validating...' : 'Connect to Network'}</span>
                  {!isConnecting && <span className="material-icons-outlined">arrow_forward</span>}
                </button>
              </form>

              <div className="mt-12">
                <div className="flex items-center space-x-4 mb-6">
                  <div className="h-[1px] flex-1 bg-slate-100"></div>
                  <span className="text-[10px] font-bold uppercase tracking-widest text-slate-300">Support</span>
                  <div className="h-[1px] flex-1 bg-slate-100"></div>
                </div>
                <div className="grid grid-cols-2 gap-4">
                  <button className="flex items-center justify-center space-x-2 bg-slate-50 hover:bg-slate-100 py-4 rounded-xl text-sm font-semibold text-slate-600 transition-colors">
                    <span className="material-icons-outlined text-lg text-slate-400">chat_bubble_outline</span>
                    <span>Reception</span>
                  </button>
                  <button className="flex items-center justify-center space-x-2 bg-slate-50 hover:bg-slate-100 py-4 rounded-xl text-sm font-semibold text-slate-600 transition-colors">
                    <span className="material-icons-outlined text-lg text-slate-400">settings_ethernet</span>
                    <span>Manual IP</span>
                  </button>
                </div>
              </div>

              <div className="mt-12 flex justify-center space-x-8">
                <div className="flex items-center space-x-2 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                  <span className="material-icons-outlined text-sm">verified_user</span>
                  <span>Secure Access</span>
                </div>
                <div className="flex items-center space-x-2 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                  <span className="material-icons-outlined text-sm">lock</span>
                  <span>Encrypted</span>
                </div>
              </div>
            </div>
          </div>

          {/* Access Plans Section */}
          <div className="space-y-8">
            <div>
              <h2 className="text-3xl font-bold tracking-tight mb-2">Access Plans</h2>
              <p className="text-slate-500">Complimentary and premium speed options for your stay.</p>
            </div>

            <div className="grid md:grid-cols-3 gap-8">
              {/* Lite Access */}
              <div className="group bg-white rounded-3xl p-8 border border-slate-100 hover:border-[#006684]/20 hover:shadow-xl hover:shadow-slate-200/40 transition-all">
                <div className="w-12 h-12 bg-slate-50 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                  <span className="material-icons-outlined text-[#006684]">coffee</span>
                </div>
                <h3 className="text-xl font-bold mb-2">Lite Access</h3>
                <p className="text-sm text-slate-400 leading-relaxed mb-8">
                  Perfect for browsing, emails, and social media. Complimentary for all guests.
                </p>
                <div className="text-2xl font-bold text-[#006684]">Free</div>
              </div>

              {/* Premium Stream */}
              <div className="relative group bg-[#006684] rounded-3xl p-8 shadow-2xl shadow-[#006684]/20 overflow-hidden">
                <div className="absolute top-6 right-6 bg-white/20 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-widest text-white">Recommended</div>
                <div className="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                  <span className="material-icons-outlined text-white">movie</span>
                </div>
                <h3 className="text-xl font-bold text-white mb-2">Premium Stream</h3>
                <p className="text-sm text-white/70 leading-relaxed mb-8">
                  High-speed bandwidth for 4K streaming and video calls. Multiple devices supported.
                </p>
                <div className="text-2xl font-bold text-white">Voucher Required</div>
              </div>

              {/* Executive Suite */}
              <div className="group bg-white rounded-3xl p-8 border border-slate-100 hover:border-[#006684]/20 hover:shadow-xl hover:shadow-slate-200/40 transition-all">
                <div className="w-12 h-12 bg-slate-50 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                  <span className="material-icons-outlined text-[#006684]">work</span>
                </div>
                <h3 className="text-xl font-bold mb-2">Executive Suite</h3>
                <p className="text-sm text-slate-400 leading-relaxed mb-8">
                  Unrestricted priority access for business needs and large file transfers.
                </p>
                <button className="text-xl font-bold text-[#006684] hover:underline flex items-center space-x-2">
                  <span>Request Access</span>
                  <span className="material-icons-outlined text-sm">launch</span>
                </button>
              </div>
            </div>
          </div>
        </main>

        {/* Footer */}
        <footer className="bg-slate-50 border-t border-slate-200 py-12 px-6">
          <div className="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-8">
            <p className="text-[11px] font-medium text-slate-400 uppercase tracking-widest">
              © 2024 LuxeConnect Hospitality. All rights reserved.
            </p>
            <div className="flex space-x-8 text-[11px] font-bold uppercase tracking-widest text-slate-400">
              <a href="#" className="hover:text-[#006684] transition-colors">Terms of Service</a>
              <a href="#" className="hover:text-[#006684] transition-colors">Privacy Policy</a>
              <a href="#" className="hover:text-[#006684] transition-colors">Help Desk</a>
            </div>
          </div>
        </footer>
      </div>
    </>
  );
}

// @ts-ignore
function route(name: string) {
    return `/${name.replace(/\./g, '/')}`;
}
