<?php
    require_once __DIR__ . '/../../views/layout/head.php';
?>
<body class="bg-gray-50">
<div class="flex min-h-screen">

    <?php require_once __DIR__ . '/../../views/layout/navbar.php'; ?>

    <main class="w-[83%] ml-[17%] p-10">
        
        <header class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Ajouter une classe</h1>
                <p class="text-gray-500">Créer et consulter vos classes</p>
            </div>

            <a href="/teacher/classes" 
               class="flex items-center gap-2 px-5 py-2.5 rounded-xl border border-gray-300 bg-white text-gray-700 font-medium hover:bg-gray-50 hover:text-red-600 transition-colors shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M18 6L6 18M6 6l12 12"></path>
                </svg>
                Quitter
            </a>
        </header>

        <div class="grid grid-cols-3 gap-6">

            <div class="col-span-2 bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Nouvelle classe</h2>

                <form action="/classes/store" method="POST" class="h-full flex flex-col">

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nom de la classe
                        </label>
                        <input
                            type="text"
                            name="name"
                            placeholder="Ex : Mathématiques"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required
                        >
                    </div>

                    <div class="flex justify-end pt-8 mt-10 gap-4">

                        <a href="/teacher/classes" 
                           class="px-6 py-3 rounded-xl border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition">
                            Annuler
                        </a>

                        <button
                            type="submit"
                            class="px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition">
                            Ajouter
                        </button>

                    </div>

                </form>
            </div>

            <div class="col-span-1 bg-white p-8 rounded-3xl shadow-sm border border-gray-100">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Classes existantes</h2>

                <ul class="space-y-4">
                    <li class="flex items-center p-3 hover:bg-gray-50 rounded-xl transition">
                        <div class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center font-bold mr-3">
                            M
                        </div>
                        <span class="font-medium text-gray-700">Mathématiques</span>
                    </li>

                    <li class="flex items-center p-3 hover:bg-gray-50 rounded-xl transition">
                        <div class="w-10 h-10 bg-purple-100 text-purple-600 rounded-lg flex items-center justify-center font-bold mr-3">
                            H
                        </div>
                        <span class="font-medium text-gray-700">Histoire</span>
                    </li>

                    <li class="flex items-center p-3 hover:bg-gray-50 rounded-xl transition">
                        <div class="w-10 h-10 bg-orange-100 text-orange-600 rounded-lg flex items-center justify-center font-bold mr-3">
                            L
                        </div>
                        <span class="font-medium text-gray-700">Littérature</span>
                    </li>
                </ul>
            </div>

        </div>

    </main>
</div>
</body>