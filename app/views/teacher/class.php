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
                <?php foreach ($classes as $classe): ?>
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 group hover:shadow-xl transition-all duration-300 flex flex-col gap-4">
                    <div class="h-32 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <div class="p-6 flex flex-col gap-3">
                        <h3 class="text-xl font-bold text-gray-800 mb-1"><?= $classe['name'] ?></h3>
                        <div class="flex items-center text-gray-400 text-sm mb-6">
                            <span class="mr-4 flex items-center text-[17px] gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#000000"><g fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M2.5 6L8 4l5.5 2L11 7.5V9s-.667-.5-3-.5S5 9 5 9V7.5zm0 0v4"/><path d="M11 8.5v.889c0 1.718-1.343 3.111-3 3.111s-3-1.393-3-3.111V8.5m10.318 2.53s.485-.353 2.182-.353s2.182.352 2.182.352m-4.364 0V10L13.5 9l4-1.5l4 1.5l-1.818 1v1.03m-4.364 0v.288a2.182 2.182 0 1 0 4.364 0v-.289M4.385 15.926c-.943.527-3.416 1.602-1.91 2.947C3.211 19.53 4.03 20 5.061 20h5.878c1.03 0 1.85-.47 2.586-1.127c1.506-1.345-.967-2.42-1.91-2.947c-2.212-1.235-5.018-1.235-7.23 0M16 20h3.705c.773 0 1.387-.376 1.939-.902c1.13-1.076-.725-1.936-1.432-2.357A5.34 5.34 0 0 0 16 16.214"/></g></svg>
                                24 étudiants
                            </span>
                        </div>
                        <div class="flex gap-2">
                            <a href="/teacher/classes/show?id=<?= $classe['id'] ?>" class="bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 rounded-xl font-semibold transition flex justify-center items-center w-full">Voir détails</a>
                            <a href="#" class="w-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center hover:bg-blue-100 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21.25a9.25 9.25 0 1 0-8.307-5.177c.108.22.144.468.089.706l-.816 3.536a.6.6 0 0 0 .72.72l3.535-.817a1.06 1.06 0 0 1 .706.09A9.2 9.2 0 0 0 12 21.25M7.97 9.886h8.06m-8.06 4.228h5.748"/></svg>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </main>
    </div>
</body>