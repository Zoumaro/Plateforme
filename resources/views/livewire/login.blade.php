
<div class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat p-12" style="background-image: url('/image/HD.jpg'); height: 100vh;">
  <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6);">
    <div class="flex h-full items-center justify-center">
      <div class="text-white">
        <h2 class="mb-4 text-4xl font-semibold">Se connecter</h2>
        <form wire:submit.prevent="submit" class="space-y-6 max-w-md mx-auto w-full">
          <div>
            <input wire:model="email" name="email" type="email" autocomplete="email" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-600 text-black" placeholder="Adresse email" />
            @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>
          <div>
            <input wire:model="password" name="password" type="password" autocomplete="current-password" required class="bg-gray-100 w-full text-sm px-4 py-3.5 rounded-md outline-blue-600 text-black" placeholder="Mot de passe" />
            @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
          </div>
          <div class="flex items-center justify-between text-black">
            <div class="flex items-center">
              <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
              <label for="remember-me" class="ml-3 block text-sm">
                se souvenir de moi
              </label>
            </div>
            <div class="text-sm">
              <a href="javascript:void(0);" class="text-blue-600 hover:text-blue-500">
                Mot de passe oublié ?
              </a>
            </div>
          </div>
          <div class="mt-10">
            <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-sm font-semibold rounded text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
              Se connecter
            </button>
          </div>
          <p class="text-sm mt-10 text-center">vous n'avez pas de compte <a href="/register" class="text-blue-600 hover:underline ml-1 whitespace-nowrap">inscrivez-vous</a></p>
        </form>
      </div>
    </div>
  </div>
</div>
