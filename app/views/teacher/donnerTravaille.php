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
                <a href="/teacher/classes/show?id=<?= $_SESSION['class']['id'] ?>" class="text-sm font-medium">Retour aux devoirs</a>
            </div>
            <div>
                <h1 class="text-3xl font-bold text-gray-800">Donner un travail</h1>
                <p class="text-gray-500">Créez un nouvel exercice ou projet pour vos élèves</p>
            </div>
        </header>

        <div class="grid grid-cols-3 gap-6">
            <div class="col-span-2 bg-white p-10 rounded-3xl shadow-sm border border-gray-100">
                <form action="/assignments/create" method="POST" enctype="multipart/form-data" class="space-y-6">
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Titre du travail</label>
                        <input 
                            type="text" 
                            name="title" 
                            placeholder="Ex: Projet de fin de module - Algèbre" 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                            required
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Instructions / Description</label>
                        <textarea 
                            name="description" 
                            rows="5" 
                            placeholder="Décrivez les objectifs et les consignes ici..." 
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
                        ></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pièces jointes (PDF, Images, etc.)</label>
                        <div class="relative border-2 border-dashed border-gray-200 rounded-2xl p-8 text-center hover:border-blue-400 transition cursor-pointer bg-gray-50/50 group">
                            <input type="file" name="attachment" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer">
                            <div class="flex flex-col items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-400 group-hover:text-blue-500 transition mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                </svg>
                                <p class="text-sm text-gray-600">
                                    <span class="font-semibold text-blue-600">Cliquez pour uploader</span> ou glissez-déposez
                                </p>
                                <p class="text-xs text-gray-400 mt-1">PDF, DOCX, PNG (Max. 10MB)</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end pt-6 gap-4">
                        <a href="/teacher/assignments" class="px-6 py-3 rounded-xl border border-gray-300 text-gray-700 font-medium hover:bg-gray-50 transition">
                            Annuler
                        </a>
                        <button type="submit" class="px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 shadow-lg shadow-blue-200 transition">
                            Publier le travail
                        </button>
                    </div>
                </form>
            </div>

            <div class="col-span-1 space-y-6">
                <div class="col-span-1 bg-white p-8 rounded-3xl shadow-sm border border-gray-100 h-fit">
                    <h2 class="text-xl font-bold text-gray-800 mb-6">Résumé de la classe</h2>
                    <div class="bg-blue-50 p-4 rounded-2xl mb-6">
                        <p class="text-sm text-blue-800 font-medium">Classe : <span class="font-bold">Mathématiques 2A</span></p>
                        <p class="text-xs text-blue-600 mt-1">Nombre actuel : 12 Étudiants</p>
                    </div>
                </div>

                <div class="bg-blue-50 p-6 rounded-3xl border border-blue-100">
                    <h3 class="text-blue-800 font-bold mb-2 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                        Conseil
                    </h3>
                    <p class="text-sm text-blue-700 leading-relaxed">
                        Ajoutez des instructions claires et un barème pour aider vos élèves à mieux comprendre vos attentes.
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>
</body>