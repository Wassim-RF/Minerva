<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Minerva</title>
</head>

<aside class="w-64 h-screen bg-white border-r border-gray-100 flex flex-col shadow-sm">
    
    <div class="p-6 flex items-center justify-between">
        <div class="flex items-center gap-2">
            <div class="w-8 h-8 rounded-full border-4 border-[#EF4444] flex items-center justify-center">
                <div class="w-1 h-3 bg-[#EF4444] rounded-full"></div>
            </div>
            <span class="text-xl font-bold text-gray-800 tracking-tight">simplon<span class="text-[#EF4444]">line</span></span>
        </div>
        <button class="p-1.5 rounded-lg border border-gray-100 hover:bg-gray-50 text-gray-400 transition-colors">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
        </button>
    </div>

    <nav class="flex-1 px-4 mt-4 space-y-2">
        
        <a href="#" class="flex items-center gap-4 px-4 py-3 bg-red-50 text-[#EF4444] rounded-2xl font-medium group transition-all duration-200">
            <div class="p-1 rounded-lg bg-white shadow-sm group-hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" /></svg>
            </div>
            <span>Accueil</span>
        </a>

        <div class="relative group">
            <button class="w-full flex items-center justify-between px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all duration-200">
                <div class="flex items-center gap-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" /></svg>
                    <span class="font-medium">Promotion</span>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </button>
        </div>

        <a href="#" class="flex items-center gap-4 px-4 py-3 text-gray-500 hover:bg-gray-50 rounded-2xl transition-all duration-200">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
            <span class="font-medium">Suivi</span>
        </a>

    </nav>

    <div class="p-4 border-t border-gray-100">
        <a href="#" class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-2xl transition-all duration-200 group">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-500 font-bold text-sm group-hover:bg-blue-100 group-hover:text-blue-600 transition-colors">
                    WR
                </div>
                <span class="text-sm font-semibold text-gray-700">Profil et paramètres</span>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </a>
    </div>

</aside>