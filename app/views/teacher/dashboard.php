<?php
    require_once __DIR__ . '/../../views/layout/head.php'
?>
<body class="bg-gray-50">
    <div class="flex min-h-screen">
        
        <?php 
            // Assurez-vous que navbar.php contient une balise <aside class="w-[17%]">
            require_once __DIR__ . '/../../views/layout/navbar.php' 
        ?>

        <main class="w-[83%] p-10">
            <header class="mb-8">
                <h1 class="text-3xl font-bold text-gray-800"> Acceuil</h1>
                <p class="text-gray-500">Vue d'ensemble de vos cours et étudiants</p>
            </header>

            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center mb-6 text-white text-xl">📖</div>
                    <div class="text-3xl font-bold text-gray-900 leading-none">3</div>
                    <div class="text-gray-400 mt-2 font-medium">Classes</div>
                </div>

                <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                    <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center mb-6 text-white text-xl">👥</div>
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

    </div>
        </main>
    </div> </body>