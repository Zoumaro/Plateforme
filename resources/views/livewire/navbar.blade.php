<header class='font-[sans-serif] min-h-[60px] tracking-wide relative z-50'>
 

  <div class='flex flex-wrap items-center justify-between py-3 px-4 sm:px-10 bg-[#151d20] lg:gap-y-4 gap-y-6 gap-x-4'>

    <div id="collapseMenu" class="max-lg:hidden lg:!flex lg:items-center max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50">
      <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
          <path d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z" data-original="#000000"></path>
          <path d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z" data-original="#000000"></path>
        </svg>
      </button>

      <ul class='lg:!flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-[#151d20] max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:px-10 max-lg:py-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
        <li class='mb-6 hidden max-lg:block'>
          <a href=""><img src="" alt="logo" class='w-36' />
          </a>
        </li>
        <li class='max-lg:border-b  max-lg:py-3 relative lg:after:absolute lg:after:bg-white lg:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:-bottom-4 lg:after:transition-all lg:after:duration-300'>
          <a href='/' class='text-white block text-[15px] font-medium'>Accueil</a>
        </li>

        <li class='max-lg:border-b max-lg:py-3 relative lg:hover:after:absolute lg:after:bg-white lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:-bottom-4 lg:after:transition-all lg:after:duration-300'>
          <a href='/produit' class='text-white block text-[15px] font-medium active'>Produit</a>
        </li>


        <li class='max-lg:border-b max-lg:py-3 relative lg:hover:after:absolute lg:after:bg-white lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:-bottom-4 lg:after:transition-all lg:after:duration-300'>
          <a href='/contact' class='text-white block text-[15px] font-medium'>Contact</a>
        </li>

      </ul>
    </div>
    <div class="flex items-center pl-6"> 
    <div class="flex items-center">
        <input type="text" placeholder="Rechercher" class="px-2 py-1 border rounded-md border-gray-300 focus:outline-none focus:border-blue-500">
        <button id="searchButton" class="bg-blue-500 text-white px-3 py-1 rounded-md ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </button>
    </div>
    

        <button id="toggleOpen" class='lg:hidden ml-6'>
          <svg class="w-7 h-7" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>

        <section>
    <span class="border-l h-3 mx-6 sm:hidden"></span>
    <div class="sm:ml-auto text-white pl-6">
      @auth
      <div x-data="{ open: false }" class="relative inline-block text-left">
        <div>
          <button @click="open = !open" type="button" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 shadow-lg bg-white hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out" id="menu-button" aria-expanded="true" aria-haspopup="true">
            <span class="font-medium text-gray-700">M</span>
          </button>
        </div>

        <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
          <div class="py-1" role="none">
          <a href="/producteur-dashboard" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">{{ Auth::user()->name }}</a>
            <p class="block px-4 py-2 text-sm text-gray-700" role="menuitem">{{ Auth::user()->email }}</p>
            <a href="/" wire:click.prevent="logout" class="block px-4 py-2 text-sm text-gray-700" role="menuitem">Déconnexion</a>
          </div>
        </div>
      </div>
      @else
      <a href="/login" class="text-white text-sm mr-1">Se connecter</a>
      /
      <a href="/register" class="text-white text-sm ml-1">S'inscrire</a>
      @endauth
    </div>
  </section>


      </div>
    </div>
</header>