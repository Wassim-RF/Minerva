<?php require_once __DIR__ . '/../../views/layout/head.php' ?>

<body class="bg-gray-50">
    <div class="flex min-h-screen">
        
        <?php require_once __DIR__ . '/../../views/layout/navbar.php' ?>

        <main class="w-[83%] ml-[17%] p-10" id="mainbody">
            <header class="flex justify-between items-center mb-8">
                <div>
                    <div class="flex items-center gap-2 text-blue-600 mb-2 cursor-pointer hover:text-blue-800 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                        <a href="/teacher/classes" class="text-sm font-medium">Retour au tableau de bord</a>
                    </div>
                    <h1 class="text-3xl font-bold text-gray-800">Classe : Mathématiques</h1>
                    <p class="text-gray-500">Gérez vos étudiants et le contenu du cours</p>
                </div>
                <button class="bg-blue-600 text-white px-6 py-2.5 rounded-xl font-medium hover:bg-blue-700 transition shadow-sm">
                    + Ajouter un étudiant
                </button>
            </header>

            <div class="grid grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-gray-400 text-sm font-medium">Total Étudiants</p>
                    <div class="text-2xl font-bold text-gray-900">24</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-gray-400 text-sm font-medium">Moyenne Classe</p>
                    <div class="text-2xl font-bold text-green-500">15.5</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-gray-400 text-sm font-medium">Taux de présence</p>
                    <div class="text-2xl font-bold text-blue-500">92%</div>
                </div>
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-100">
                    <p class="text-gray-400 text-sm font-medium">Devoirs en cours</p>
                    <div class="text-2xl font-bold text-orange-500">2</div>
                </div>
            </div>

            <div class="w-full">
                <div class="col-span-2 bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden w-full">
                    <div class="p-6 border-b border-gray-50 flex justify-between items-center">
                        <h2 class="text-xl font-bold text-gray-800">Liste des étudiants</h2>
                        <input type="text" placeholder="Rechercher..." class="bg-gray-50 border border-gray-200 text-sm rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 w-64">
                    </div>
                    <table class="w-full text-left">
                        <thead class="bg-gray-50 text-gray-400 uppercase text-xs font-semibold">
                            <tr>
                                <th class="px-6 py-4">Nom Complet</th>
                                <th class="px-6 py-4">Dernière note</th>
                                <th class="px-6 py-4">Statut</th>
                                <th class="px-6 py-4 text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-50">
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-xs">AY</div>
                                    <span class="font-medium text-gray-700">Ahmed Yassine</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600">18/20</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-medium">Actif</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-gray-400 hover:text-blue-600 transition">Modifier</button>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition">
                                <td class="px-6 py-4 flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center font-bold text-xs">SB</div>
                                    <span class="font-medium text-gray-700">Sara Bennani</span>
                                </td>
                                <td class="px-6 py-4 text-gray-600">14/20</td>
                                <td class="px-6 py-4">
                                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-xs font-medium">Actif</span>
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <button class="text-gray-400 hover:text-blue-600 transition">Modifier</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>