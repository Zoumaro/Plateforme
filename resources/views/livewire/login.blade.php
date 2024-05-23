
  <body class="text-white">
  <div class="font-[sans-serif] text-[#333]">
      <div class="min-h-screen flex fle-col items-center justify-center py-6 px-4">
        <div class="grid md:grid-cols-2 items-center gap-10 max-w-6xl w-full">
          <form class="space-y-6 max-w-md md:ml-auto max-md:mx-auto w-full">
            <h3 class="text-3xl font-extrabold mb-8 max-md:text-center">
              Se connecter
            </h3>
            <div>
              <input name="email" type="email" autocomplete="email" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-600" placeholder="Adresse email" />
            </div>
            <div>
              <input name="password" type="password" autocomplete="current-password" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-600" placeholder="Mot de passe" />
            </div>
            <div class="flex items-center justify-between">
              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
                <label for="remember-me" class="ml-3 block text-sm">
                  se souvenir de moi
                </label>
              </div>
              <div class="text-sm">
                <a href="jajvascript:void(0);" class="text-blue-600 hover:text-blue-500">
                  Mot de passe oublié ?
                </a>
              </div>
            </div>
            <div class="!mt-10">
              <button type="button" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                Se connecter
              </button>
            </div>
            <p class="text-sm !mt-10 text-center">vous n'avez pas de compte <a href="/register" class="text-blue-600 hover:underline ml-1 whitespace-nowrap">inscrivez-vous</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
