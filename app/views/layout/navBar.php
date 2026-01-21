

<aside class="w-[17%] h-screen bg-gray-50 border-r border-gray-200 flex flex-col shadow-sm" id="navBar">
    <!-- Logo -->
    <div class="p-6 flex items-center justify-between">
        <div class="flex items-center gap-2 block" id="site_name">
            <img src="/../../../public/assets/picture/logo.png" alt="logo" class="w-12">
            <span class="text-xl font-bold text-gray-700 tracking-tight">
                Minerva
            </span>
        </div>
        <button class="block p-1.5 rounded-lg border border-gray-200 hover:bg-gray-100 text-gray-400 transition-colors" id="minimize_navBar--Button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
        </button>
        <button class="hidden p-1.5 rounded-lg border border-gray-200 hover:bg-gray-100 text-gray-400 transition-colors" id="elarged_navBar--Button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
        </button>
    </div>

    <nav class="flex-1 px-4 space-y-2">
        <a href="#" class="flex items-center gap-4 px-4 py-3 text-gray-600 hover:bg-indigo-50 hover:text-indigo-500 rounded-2xl transition-all duration-200 nav_bar--link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" /></svg>
            <span class="font-medium nav_bar--text">Accueil</span>
        </a>
        <a href="#" class="flex items-center gap-4 px-4 py-3 text-gray-600 hover:bg-indigo-50 hover:text-indigo-500 rounded-2xl transition-all duration-200 nav_bar--link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2" /></svg>            
            <span class="font-medium nav_bar--text">Promotion</span>
        </a>
        <a href="#" class="flex items-center gap-4 px-4 py-3 text-gray-600 hover:bg-indigo-50 hover:text-indigo-500 rounded-2xl transition-all duration-200 nav_bar--link">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2" /></svg>
            <span class="font-medium nav_bar--text">Suivi</span>
        </a>
    </nav>

    <form action="/logout" method="POST" class="p-4 border-t border-gray-200 w-full">
        <div class="relative group w-full">
            <button class="flex items-center justify-between p-3 w-full hover:bg-red-50 rounded-2xl transition-all duration-200" id="logout_complet">
                <span class="text-sm font-semibold text-gray-700 group-hover:text-red-600">
                    Déconnexion
                </span>

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 text-gray-400 group-hover:translate-x-1 group-hover:text-red-500 transition-transform"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <button type="submit" class="hidden items-center justify-between p-3 w-full hover:bg-red-50 rounded-2xl transition-all duration-200 hover:text-red-600" id="logout_resume">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M20.968 18.448a2.577 2.577 0 0 1-2.73 2.5c-2.153.012-4.306 0-6.459 0a.5.5 0 0 1 0-1c2.2 0 4.4.032 6.6 0c1.107-.016 1.589-.848 1.589-1.838V5.647A1.546 1.546 0 0 0 19 4.175a3.023 3.023 0 0 0-1.061-.095h-6.16a.5.5 0 0 1 0-1c2.224 0 4.465-.085 6.687 0a2.567 2.567 0 0 1 2.5 2.67Z"/><path fill="currentColor" d="M3.176 11.663a.455.455 0 0 0-.138.311c0 .015 0 .028-.006.043s0 .027.006.041a.457.457 0 0 0 .138.312l3.669 3.669a.5.5 0 0 0 .707-.707l-2.815-2.816h10.742a.5.5 0 0 0 0-1H4.737L7.552 8.7a.5.5 0 0 0-.707-.707Z"/></svg>
            </button>
        </div>
    </form>


</aside>
<script type="module"  src="/public/assets/js/script.js"></script>