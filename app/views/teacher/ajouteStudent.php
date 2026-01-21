<?php
    require_once __DIR__ . '/../../views/layout/head.php';
?>
<body class="bg-gray-50">
<div class="flex min-h-screen">

    <?php require_once __DIR__ . '/../../views/layout/navbar.php'; ?>

    <main class="w-[83%] ml-[17%] p-10" id="mainbody">
        <header class="flex flex-col gap-4 mb-8">
            <div class="flex items-center gap-2 text-blue-600 mb-2 cursor-pointer hover:text-blue-800 transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
                <a href="/teacher/classes/show" class="text-sm font-medium">Retour à la liste</a>
            </div>
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Ajouter un Étudiant</h1>
                <p class="text-gray-500">Inscrire un nouvel élève ou affecter un élève existant à cette classe</p>
            </div>
        </header>

        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2 bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
                
                <div class="flex p-1 bg-gray-100 rounded-2xl mb-10 w-fit">
                    <button onclick="switchTab('existing')" id="tab-existing" class="px-6 py-2.5 rounded-xl text-sm font-semibold transition bg-white text-blue-600 shadow-sm">
                        Étudiant Existant
                    </button>
                    <button onclick="switchTab('new')" id="tab-new" class="px-6 py-2.5 rounded-xl text-sm font-semibold transition text-gray-500 hover:text-gray-700">
                        Nouveau Profil
                    </button>
                </div>

                <form id="form-existing" action="/students/assign" method="POST" class="space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Sélectionner l'étudiant</label>
                        <select name="student_id" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none bg-white">
                            <option value="">-- Choisir un étudiant --</option>
                            <option value="1">Ahmed El Mansouri</option>
                            <option value="2">Sara Idrissi</option>
                            <option value="3">Yassine Bennani</option>
                        </select>
                        <p class="mt-2 text-xs text-gray-400 italic">L'étudiant sera automatiquement ajouté à votre classe actuelle.</p>
                    </div>

                    <div class="flex justify-end pt-8 gap-4">
                        <button type="submit" class="px-8 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition shadow-lg shadow-blue-100">
                            Confirmer l'ajout
                        </button>
                    </div>
                </form>

                <form id="form-new" action="/teacher/createStudent" method="POST" class="hidden space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nom Complet</label>
                        <input type="text" name="name" placeholder="Ex: Omar" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" placeholder="omar.alami@email.com" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    </div>

                    <div class="flex justify-end pt-8 gap-4">
                        <button type="submit" class="px-8 py-3 rounded-xl bg-green-600 text-white font-semibold hover:bg-green-700 transition shadow-lg shadow-green-100">
                            Créer et Ajouter
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-span-1 bg-white p-8 rounded-3xl shadow-sm border border-gray-100 h-fit">
                <h2 class="text-xl font-bold text-gray-800 mb-6">Résumé de la classe</h2>
                <div class="bg-blue-50 p-4 rounded-2xl mb-6">
                    <p class="text-sm text-blue-800 font-medium">Classe : <span class="font-bold">Mathématiques 2A</span></p>
                    <p class="text-xs text-blue-600 mt-1">Nombre actuel : 12 Étudiants</p>
                </div>
                
                <h3 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4">Derniers ajouts</h3>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-xs font-bold text-gray-600">AM</div>
                        <span class="text-sm text-gray-700 font-medium">Amine Mouline</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</div>
<script>
    function switchTab(type) {
        const existingForm = document.getElementById('form-existing');
        const newForm = document.getElementById('form-new');
        const tabExisting = document.getElementById('tab-existing');
        const tabNew = document.getElementById('tab-new');

        if (type === 'existing') {
            existingForm.classList.remove('hidden');
            newForm.classList.add('hidden');
            tabExisting.className = "px-6 py-2.5 rounded-xl text-sm font-semibold transition bg-white text-blue-600 shadow-sm";
            tabNew.className = "px-6 py-2.5 rounded-xl text-sm font-semibold transition text-gray-500 hover:text-gray-700";
        } else {
            existingForm.classList.add('hidden');
            newForm.classList.remove('hidden');
            tabNew.className = "px-6 py-2.5 rounded-xl text-sm font-semibold transition bg-white text-green-600 shadow-sm";
            tabExisting.className = "px-6 py-2.5 rounded-xl text-sm font-semibold transition text-gray-500 hover:text-gray-700";
        }
    }
</script>
</body>