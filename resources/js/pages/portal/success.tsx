import { Head } from '@inertiajs/react';
import React from 'react';

/**
 * Connection Success Modal - Mobile
 * 
 * A high-end success state for the LuxeConnect guest portal.
 */
export default function Success() {
  return (
    <>
      <Head title="Connection Success">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet" />
      </Head>

      <div className="min-h-screen bg-slate-50 font-['Manrope'] flex flex-col items-center justify-center p-6 relative overflow-hidden">
        {/* Background/Backdrop Elements */}
        <div className="absolute top-0 left-0 w-full p-6 flex justify-between items-center opacity-40">
          <div className="text-xl font-bold tracking-tighter text-[#006684]">
            LuxeConnect
          </div>
          <div className="w-10 h-10 rounded-full bg-slate-200 flex items-center justify-center">
            <span className="material-icons-outlined text-slate-400">person</span>
          </div>
        </div>

        {/* Main Success Card */}
        <div className="w-full max-w-sm bg-white rounded-[40px] p-8 shadow-2xl shadow-slate-200/60 border border-slate-100 flex flex-col items-center text-center relative z-10">
          {/* Success Icon */}
          <div className="w-24 h-24 bg-[#006684] rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-[#006684]/20">
            <div className="w-10 h-10 rounded-full border-4 border-white flex items-center justify-center">
              <span className="material-icons text-white text-2xl">check</span>
            </div>
          </div>

          {/* Content */}
          <h1 className="text-3xl font-bold tracking-tight text-slate-900 mb-4 leading-tight">
            Successfully <br />
            Connected
          </h1>
          
          <p className="text-slate-500 leading-relaxed mb-10 px-4">
            You now have full access to the <br />
            <span className="font-semibold text-slate-900">LuxeConnect</span> network.
          </p>

          {/* Action Button */}
          <button 
            className="w-full bg-[#006684] hover:bg-[#004d64] text-white rounded-2xl py-5 font-bold tracking-wide transition-all active:scale-[0.98] mb-6"
            onClick={() => window.location.href = 'https://google.com'}
          >
            Start Browsing
          </button>

          {/* Status Badge */}
          <div className="inline-flex items-center space-x-2 bg-[#006684]/10 rounded-full px-5 py-2">
            <div className="w-2 h-2 rounded-full bg-[#006684] animate-pulse"></div>
            <span className="text-[10px] font-bold uppercase tracking-widest text-[#006684]">
              Active Connection
            </span>
          </div>
        </div>

        {/* Background Decorative Text (Faded) */}
        <div className="absolute top-1/4 left-0 w-full text-center -z-0 opacity-[0.03] pointer-events-none">
          <h2 className="text-[120px] font-bold leading-none">Guest Access</h2>
        </div>

        {/* Simplified Footer for Success State */}
        <footer className="mt-auto pt-12 pb-4 flex flex-col items-center gap-4">
          <div className="flex space-x-6 text-[10px] font-bold uppercase tracking-widest text-slate-300">
            <span>Privacy</span>
            <span>Terms</span>
            <span>Help</span>
          </div>
          <p className="text-[9px] font-medium text-slate-300 uppercase tracking-widest">
            © 2024 LuxeConnect Hospitality
          </p>
        </footer>
      </div>
    </>
  );
}
