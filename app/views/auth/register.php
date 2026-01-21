<?php
    require_once __DIR__ . '/../../views/layout/head.php'
?>
<body class="w-full h-screen bg-[#F5F8FF] flex justify-center items-center flex-row p-[10%] pb-0 pt-0 overflow-hidden">
    <div class="bg-white w-2/5 h-[95%] rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] p-[2.5%] flex flex-col gap-4 overflow-y-auto style-scrollbar">
        
        <div class="flex flex-col gap-1">
            <h1 class="text-2xl font-semibold text-gray-800">Inscription</h1>
            <p class="text-sm text-gray-500">Créez votre compte pour commencer.</p>
        </div>

        <form method="POST" action="/register" class="flex flex-col gap-5">
            <div class="flex flex-col gap-2">
                <label class="text-sm font-medium text-gray-700">Nom complet <span class="text-red-500">*</span></label>
                <input type="text" placeholder="Ex: Ahmed Alami" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="full_name">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm font-medium text-gray-700">Adresse email <span class="text-red-500">*</span></label>
                <input type="email" placeholder="exemple@mail.com" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="email_register">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm font-medium text-gray-700">Mot de passe <span class="text-red-500">*</span></label>
                <input type="password" placeholder="••••••••" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="password_register">
            </div>

            <div class="flex flex-col gap-2">
                <label class="text-sm font-medium text-gray-700">Confirmer le mot de passe <span class="text-red-500">*</span></label>
                <input type="password" placeholder="••••••••" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="password_confirm">
            </div>

            <button type="submit" class="w-full cursor-pointer bg-blue-600 text-white text-lg font-semibold py-3 rounded-xl shadow-lg hover:bg-blue-700 active:scale-[0.98] transition-all duration-200 mt-2">
                S'inscrire
            </button>
        </form>

        <div class="flex items-center gap-3 my-1">
            <div class="h-[1px] bg-gray-200 flex-1"></div>
            <span class="text-xs text-gray-400 uppercase font-bold">Déjà inscrit ?</span>
            <div class="h-[1px] bg-gray-200 flex-1"></div>
        </div>

        <a href="/login" class="w-full text-center border-2 border-blue-600 text-blue-600 text-lg font-semibold py-3 rounded-xl hover:bg-blue-50 transition-all duration-200">
            Se connecter
        </a>

        <p class="text-[10px] text-center text-gray-400 px-5">
            En s'inscrivant, vous acceptez nos <a href="#" class="underline">Conditions d'utilisation</a> et notre <a href="#" class="underline">Politique de confidentialité</a>.
        </p>
    </div>
</body>

<style>
    .style-scrollbar::-webkit-scrollbar { width: 5px; }
    .style-scrollbar::-webkit-scrollbar-track { background: transparent; }
    .style-scrollbar::-webkit-scrollbar-thumb { background: #E5E7EB; border-radius: 10px; }
</style>