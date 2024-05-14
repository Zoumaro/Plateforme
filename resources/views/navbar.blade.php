

<header class='font-[sans-serif] min-h-[60px] tracking-wide relative z-50'>
    <section class="bg-[#004d66] min-h-[40px] px-4 py-2 sm:px-10 flex items-center max-sm:flex-col">
      
      <span class="border-l h-3 mx-6 max-sm:hidden"></span>
      <div class="sm:ml-auto text-white">
        <a href="/login" class="text-white text-sm mr-1">Se connecter</a>
        /
        <a href="/register" class="text-white text-sm ml-1">S'inscrire</a>
      </div>
    </section>
  
    <div class='flex flex-wrap items-center justify-between py-3 px-4 sm:px-10 bg-[#151d20] lg:gap-y-4 gap-y-6 gap-x-4'>
  
      <div id="collapseMenu"
        class="max-lg:hidden lg:!flex lg:items-center max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50">
        <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
            <path
              d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
              data-original="#000000"></path>
            <path
              d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
              data-original="#000000"></path>
          </svg>
        </button>
  
        <ul
          class='lg:!flex lg:gap-x-10 max-lg:space-y-3 max-lg:fixed max-lg:bg-[#151d20] max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:px-10 max-lg:py-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
          <li class='mb-6 hidden max-lg:block'>
            <a href=""><img src="" alt="logo"
                class='w-36' />
            </a>
          </li>
          <li
            class='max-lg:border-b max-lg:py-3 relative lg:after:absolute lg:after:bg-white lg:after:w-full lg:after:h-[2px] lg:after:block lg:after:-bottom-4 lg:after:transition-all lg:after:duration-300'>
            <a href='/' class='text-white block text-[15px] font-medium'>Accueil</a>
          </li>
          <li
            class='max-lg:border-b max-lg:py-3 relative lg:hover:after:absolute lg:after:bg-white lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:-bottom-4 lg:after:transition-all lg:after:duration-300'>
            <a href='' class='text-white block text-[15px] font-medium'>Contact</a>
          </li>
          <li
            class='max-lg:border-b max-lg:py-3 relative lg:hover:after:absolute lg:after:bg-white lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:-bottom-4 lg:after:transition-all lg:after:duration-300'>
            <a href='' class='text-white block text-[15px] font-medium'>Produit</a>
          </li>
          
        </ul>
      </div>
      <div class="flex items-center">
      <div class="flex items-center">
        <input type="text" placeholder="Rechercher" class="px-2 py-1 border rounded-md border-gray-300 focus:outline-none focus:border-blue-500">
        <button id="searchButton" class="bg-blue-500 text-white px-3 py-1 rounded-md ml-2">
      
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </button>
      </div>
      <div class='flex items-center max-sm:ml-auto'>
        <ul class="flex space-x-4">
          <li
            class="relative px-1 lg:hover:after:absolute lg:after:bg-white lg:after:w-0 lg:hover:after:w-full lg:hover:after:h-[2px] lg:after:block lg:after:-bottom-4 lg:after:transition-all lg:after:duration-300">
            <span class="relative">
              <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                class="cursor-pointer fill-white inline-block" viewBox="0 0 512 512">
                <path
                  d="M164.96 300.004h.024c.02 0 .04-.004.059-.004H437a15.003 15.003 0 0 0 14.422-10.879l60-210a15.003 15.003 0 0 0-2.445-13.152A15.006 15.006 0 0 0 497 60H130.367l-10.722-48.254A15.003 15.003 0 0 0 105 
                  0H15C6.715 0 0 6.715 0 15s6.715 15 15 15h77.969c1.898 8.55 51.312 230.918 54.156 243.71C131.184 280.64 120 296.536 120 315c0 24.812 20.188 45 45 45h272c8.285 0 15-6.715 15-15s-6.715-15-15-15H165c-8.27 0-15-6.73-15-15 0-8.258 6.707-14.977 
                  14.96-14.996zM477.114 90l-51.43 180H177.032l-40-180zM150 405c0 24.813 20.188 45 45 45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm167 15c0 24.813 20.188 45 45 
                  45s45-20.188 45-45-20.188-45-45-45-45 20.188-45 45zm45-15c8.27 0 15 6.73 15 15s-6.73 15-15 15-15-6.73-15-15 6.73-15 15-15zm0 0"
                  data-original="#000000"></path>
              </svg>
              <span class="absolute left-auto -ml-1 -top-1 rounded-full bg-red-500 px-1 py-0 text-xs text-white">0</span>
            </span>
          </li>
        </ul>
  
        <button id="toggleOpen" class='lg:hidden ml-6'>
          <svg class="w-7 h-7" fill="#fff" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>