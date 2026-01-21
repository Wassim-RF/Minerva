<?php 
    require_once __DIR__ . '/../../views/layout/head.php' 
?>
<body class="bg-[#f0f2f5]">
    <div class="flex min-h-screen">
        
        <?php 
            require_once __DIR__ . '/../../views/layout/navbar.php' 
        ?>

        <main class="w-[83%] ml-[17%] p-10" id="mainbody">
            <header class="flex justify-between items-center mb-10">
                <div>
                    <h1 class="text-3xl font-bold text-gray-800">Mes Classes</h1>
                    <p class="text-gray-500">Gérez vos classes et vos étudiants</p>
                </div>
                <a href="/teacher/classes/add" class="bg-[#1e3a8a] hover:bg-blue-900 text-white px-6 py-3 rounded-xl font-medium transition flex items-center shadow-lg">
                    <span class="mr-2">+</span> Créer une classe
                </a>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-xl transition-all duration-300">
                    <div class="h-32 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-1">Mathématiques Avancées</h3>
                        <p class="text-sm text-gray-500 mb-4">Cours de mathématiques niveau universitaire</p>
                        <div class="flex items-center text-gray-400 text-sm mb-6">
                            <span class="mr-4">👥 24 étudiants</span>
                        </div>
                        <div class="flex gap-2">
                            <a href="/teacher/classes/show" class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 rounded-xl font-semibold transition flex justify-center items-center w-full">Voir détails</a>
                            <button class="w-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center hover:bg-blue-100 transition">💬</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>