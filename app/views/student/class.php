<?php 
    require_once __DIR__ . '/../../views/layout/head.php' 
?>

<body class="bg-slate-50 font-sans text-slate-900">

<?php 
    require_once __DIR__ . '/../../views/layout/navbar.php' 
?>

<main class="w-[83%] p-10">
            <header class="mb-8">
                <h1 class="text-3xl font-bold">Bienvenue, Étudiant</h1>
                <p class="text-slate-500">Voici un aperçu de vos activités</p>
            </header>

            <div class="grid grid-cols-3 gap-6 mb-8">
                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                    <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center text-white mb-4">
                        <i class="fa-solid fa-clipboard-list text-xl"></i>
                    </div>
                    <div class="text-3xl font-bold">2</div>
                    <div class="text-slate-400 text-sm">Travaux à faire</div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                    <div class="w-12 h-12 bg-purple-500 rounded-xl flex items-center justify-center text-white mb-4">
                        <i class="fa-solid fa-medal text-xl"></i>
                    </div>
                    <div class="text-3xl font-bold">16.5/20</div>
                    <div class="text-slate-400 text-sm">Moyenne générale</div>
                </div>

                <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                    <div class="w-12 h-12 bg-emerald-500 rounded-xl flex items-center justify-center text-white mb-4">
                        <i class="fa-solid fa-calendar-check text-xl"></i>
                    </div>
                    <div class="text-3xl font-bold">95%</div>
                    <div class="text-slate-400 text-sm">Taux de présence</div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8">
                
                <section>
                    <h2 class="text-xl font-bold mb-4">Ma Classe</h2>
                    <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100">
                        <div class="bg-indigo-50 p-6 rounded-xl border border-indigo-100">
                            <div class="w-12 h-12 bg-indigo-900 rounded-lg flex items-center justify-center text-white mb-4">
                                <i class="fa-solid fa-book-open"></i>
                            </div>
                            <h3 class="text-xl font-bold">Mathématiques Avancées</h3>
                            <p class="text-slate-400 text-sm mb-6">Cours de mathématiques niveau universitaire</p>
                            
                            <div class="flex items-center gap-4 text-sm">
                                <span class="bg-white px-3 py-1 rounded-full border border-slate-200 text-slate-600">24 élèves</span>
                                <span class="text-slate-400">Enseignant: <span class="text-slate-600">Marie Dubois</span></span>
                            </div>
                        </div>
                    </div>
                </section>