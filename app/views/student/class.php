<?php
use App\Models\Repositories\ClassRepositories;
use App\Models\Services\ClassServices;

require_once __DIR__ . '/../../models/repositories/classRespositories.php';
require_once __DIR__ . '/../../models/services/classServices.php';

$classRepo = new ClassRepositories();
$classService = new ClassServices($classRepo);

// récupère la classe de l’étudiant connecté
$classes = $classService->getStudentClass($_SESSION['user']['id']);
?>


<?php 
    require_once __DIR__ . '/../../views/layout/head.php' 
?>

<body class="bg-slate-50 font-sans text-slate-900">

<?php 
    require_once __DIR__ . '/../../views/layout/navbar.php' 
?>

<main class="w-[83%] ml-[17%] p-10" id="mainbody">
            <header class="mb-10">
                <h1 class="text-3xl font-bold tracking-tight">Mes Classes</h1>
                <p class="text-slate-500 mt-1">Gérez vos classes et étudiants</p>
            </header>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col">
                    <div class="h-48 bg-gradient-to-br from-indigo-600 to-purple-500 flex items-center justify-center">
                        <i class="fa-solid fa-book-open text-white text-6xl"></i>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-2">Mathématiques Avancées</h3>
                        <p class="text-slate-400 text-sm mb-4">Cours de mathématiques niveau universitaire</p>
                        <div class="flex items-center text-slate-400 text-sm mb-6">
                            <i class="fa-solid fa-users mr-2"></i> 24 étudiants
                        </div>
                        <div class="flex gap-3 mt-auto">
                            <button class="flex-grow bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold py-3 rounded-xl transition">Voir détails</button>
                            <button class="w-12 h-12 flex items-center justify-center bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-100 transition">
                                <i class="fa-regular fa-comment-dots text-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col">
                    <div class="h-48 bg-gradient-to-br from-indigo-600 to-purple-500 flex items-center justify-center">
                        <i class="fa-solid fa-book-open text-white text-6xl"></i>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-2">Histoire Contemporaine</h3>
                        <p class="text-slate-400 text-sm mb-4">Histoire du 20ème siècle</p>
                        <div class="flex items-center text-slate-400 text-sm mb-6">
                            <i class="fa-solid fa-users mr-2"></i> 18 étudiants
                        </div>
                        <div class="flex gap-3 mt-auto">
                            <button class="flex-grow bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold py-3 rounded-xl transition">Voir détails</button>
                            <button class="w-12 h-12 flex items-center justify-center bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-100 transition">
                                <i class="fa-regular fa-comment-dots text-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 flex flex-col">
                    <div class="h-48 bg-gradient-to-br from-indigo-600 to-purple-500 flex items-center justify-center">
                        <i class="fa-solid fa-book-open text-white text-6xl"></i>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-xl font-bold mb-2">Littérature Française</h3>
                        <p class="text-slate-400 text-sm mb-4">Littérature classique et moderne</p>
                        <div class="flex items-center text-slate-400 text-sm mb-6">
                            <i class="fa-solid fa-users mr-2"></i> 20 étudiants
                        </div>
                        <div class="flex gap-3 mt-auto">
                            <button class="flex-grow bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold py-3 rounded-xl transition">Voir détails</button>
                            <button class="w-12 h-12 flex items-center justify-center bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-100 transition">
                                <i class="fa-regular fa-comment-dots text-lg"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </main>