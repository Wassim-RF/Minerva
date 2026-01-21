<?php
    require_once __DIR__ . '/../../views/layout/head.php'
?>
<body class="w-full h-screen bg-[#F5F8FF] flex justify-center items-center flex-row p-[10%] pb-0 pt-0 overflow-hidden">
    <div class="bg-white w-2/5 rounded-3xl shadow-[0_20px_50px_rgba(0,0,0,0.1)] p-[2%] flex flex-col gap-5 overflow-y-auto">
        <h1 class="text-2xl font-semibold">Connexion</h1>
        
        <form method="POST" action="/login" class="flex flex-col gap-6">
            <div class="flex flex-col gap-4">
                <label for="">Adresse email <span class="text-red-500">*</span></label>
                <div class="w-full flex flex-col">
                    <div class="flex flex-col gap-1">
                        <input type="email" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="email_login--input">
                        <p class="<?= !empty($_SESSION['error']['email']) ? 'block' : 'hidden' ?> text-red-500 text-sm mb-2 ml-1 font-medium"><?= $_SESSION['error']['email'] ?></p>
                    </div>
                    <div class="items-center gap-1 mt-2 ml-1 <?= !empty($_SESSION['error']['email']) ? 'hidden' : 'flex' ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <p class="text-xs text-gray-500 italic">Format: <span class="font-semibold text-gray-600">exemple@mail.com</span></p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <label for="">Mot de passe <span class="text-red-500">*</span></label>
                <div class="w-full flex flex-col">
                    <input type="password" class="outline-none w-full border border-gray-300 p-[3%] rounded-xl transition-all duration-300 focus:border-[#6366F1] focus:ring-4 focus:ring-blue-100" required name="password_login--input">
                    <p class="<?= !empty($_SESSION['error']['password']) ? 'block' : 'hidden' ?> text-red-500 text-sm mb-2 ml-1 font-medium"><?= $_SESSION['error']['password'] ?></p>
                    <div class="flex items-center gap-1 mt-2 ml-1">
                        <a href="#" class="text-xs text-gray-500 hover:text-blue-600 hover:underline transition-all duration-200 cursor-pointer">Mot de passe oublié ?</a>
                    </div>
                </div>
            </div>

            <button type="submit" class="w-full cursor-pointer bg-blue-600 text-white text-lg font-semibold py-3 rounded-xl shadow-lg hover:bg-blue-700 active:scale-[0.98] transition-all duration-200">
                Se connecter
            </button>
        </form>

        <div class="flex items-center gap-3 my-2">
            <div class="h-[1px] bg-gray-200 flex-1"></div>
            <span class="text-xs text-gray-400 uppercase font-bold">Ou</span>
            <div class="h-[1px] bg-gray-200 flex-1"></div>
        </div>

        <a href="/register" class="w-full text-center border-2 border-blue-600 text-blue-600 text-lg font-semibold py-3 rounded-xl hover:bg-blue-50 transition-all duration-200">
            Créer un compte
        </a>
    </div>
</body>
</html>
<?php
    $_SESSION['error'] = [];
?>