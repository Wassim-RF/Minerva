<?php
    require_once __DIR__ . '/../../views/layout/head.php'
?>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        
        <?php 
            require_once __DIR__ . '/../../views/layout/navbar.php' 
        ?>

        <main class="w-[83%] ml-[17%] p-10" id="mainbody">
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800"> Acceuil</h1>
                <p class="text-gray-500">Vue d'ensemble de vos cours et étudiants</p>
            </header>

            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-6 text-white text-xl"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0M3 6v13m9-13v13m9-13v13"/></svg></div>
                    <div class="text-3xl font-bold text-gray-900 leading-none"><?= $classNum ?></div>
                    <div class="text-gray-400 mt-2 font-medium">Classes</div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mb-6 text-white text-xl"> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="#ffffff"><g fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" color="currentColor"><path d="M2.5 6L8 4l5.5 2L11 7.5V9s-.667-.5-3-.5S5 9 5 9V7.5zm0 0v4"/><path d="M11 8.5v.889c0 1.718-1.343 3.111-3 3.111s-3-1.393-3-3.111V8.5m10.318 2.53s.485-.353 2.182-.353s2.182.352 2.182.352m-4.364 0V10L13.5 9l4-1.5l4 1.5l-1.818 1v1.03m-4.364 0v.288a2.182 2.182 0 1 0 4.364 0v-.289M4.385 15.926c-.943.527-3.416 1.602-1.91 2.947C3.211 19.53 4.03 20 5.061 20h5.878c1.03 0 1.85-.47 2.586-1.127c1.506-1.345-.967-2.42-1.91-2.947c-2.212-1.235-5.018-1.235-7.23 0M16 20h3.705c.773 0 1.387-.376 1.939-.902c1.13-1.076-.725-1.936-1.432-2.357A5.34 5.34 0 0 0 16 16.214"/></g></svg></div>
                    <div class="text-3xl font-bold text-gray-900 leading-none">5</div>
                    <div class="text-gray-400 mt-2 font-medium">Étudiants</div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-orange-500 rounded-xl flex items-center justify-center mb-6 text-white text-xl">📋</div>
                    <div class="text-3xl font-bold text-gray-900 leading-none">2</div>
                    <div class="text-gray-400 mt-2 font-medium">Travaux actifs</div>
                </div>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-6 h-64">
                <div class="border-2 border-dashed border-gray-200 rounded-3xl flex items-center justify-center text-gray-400">
                    Zone libre
                </div>
                <div class="border-2 border-dashed border-gray-200 rounded-3xl flex items-center justify-center text-gray-400">
                    Zone libre
                </div>
            </div>

            <div class="mt-8 grid grid-cols-3 gap-6">
        
                <div class="col-span-2 border-2 border-dashed border-gray-200 rounded-3xl flex items-center justify-center text-gray-400 h-64">
                    Espace libre (2/3)
                </div>

            <div class="col-span-1 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-xl font-bold text-gray-800">Mes classes</h2>
                    <span class="text-blue-600 text-sm font-medium cursor-pointer hover:underline">Voir tout</span>
                </div>
            
            <ul class="space-y-4">
                <li class="flex items-center p-3 hover:bg-gray-50 rounded-xl transition">
                    <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center font-bold mr-3">M</div>
                    <span class="font-medium text-gray-700">Mathématiques</span>
                </li>
                <li class="flex items-center p-3 hover:bg-gray-50 rounded-xl transition">
                    <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center font-bold mr-3">H</div>
                    <span class="font-medium text-gray-700">Histoire</span>
                </li>
                <li class="flex items-center p-3 hover:bg-gray-50 rounded-xl transition">
                    <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center font-bold mr-3">L</div>
                    <span class="font-medium text-gray-700">Littérature</span>
                </li>
            </ul>
            </div>

        </main>
    </div> 
</body>