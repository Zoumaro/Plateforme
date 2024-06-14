@include('livewire.navbar')

    <div class="relative -mt-32 md:-mt-24 h-[750px] w-full overflow-hidden">
        <div id="slideshow-container" class="w-full h-full relative">
            <div class="slide">
                <img src="/image/img.avif" alt="Description de l'image" class="w-full h-full object-cover">
            </div>
            <div class="slide">
                <img src="/image/img1.jpg" alt="Description de l'image" class="w-full h-full object-cover">
            </div>
            <div class="slide">
                <img src="/image/img5.avif" alt="Description de l'image" class="w-full h-full object-cover">
            </div>
        </div>
        <div id="text-container" class="absolute inset-0 flex justify-center items-center text-black">
            <div class="max-w-3xl mx-auto text-center p-4 md:p-8">
                <h1 id="slide-title" class='text-2xl md:text-4xl font-bold mb-2 md:mb-4 text-white fade-in sm:text-lg md:text-6xl lg:text-7xl'></h1>
                <p id="slide-description" class='text-base md:text-lg leading-relaxed text-white fade-in sm:text-base md:text-xl lg:text-2xl'></p>
            </div>
        </div>
    </div>

    <div class="bg-transparent pt-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
            <div class="mr-20">
                <img src="/image/image7.jpg" alt="Description de l'image"class="w-90 h-auto mr-20 sm:border-0 lg:border-0">
            </div>
            <div>
                <div class="ml-20">
                <h2 class="text-3xl font-extrabold text-gray-900">QUI SOMMES-NOUS</h2>
                <p class="mt-4 text-lg text-gray-500">Sous prétexte de faciliter les échanges entre les acteurs agricoles, notre plateforme devient un intermédiaire obscur où les véritables intentions et les relations réelles restent voilées.</p>
            </div>
        </div>
    </div>

<div class="bg-gray-600 py-12 mb-12 mt-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-wrap justify-center items-start">
        <div class="w-full md:w-1/3 px-4 mb-4">
            <h2 class="text-3xl font-extrabold text-white">TOUJOURS FRAIS</h2>
            <p class="mt-2 text-lg text-gray-300">Grâce à des technologies biologiques innovantes, nos produits sont toujours frais et ne nécessitent aucun traitement..</p>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-4">
            <h2 class="text-3xl font-extrabold text-white">100% BIOLOGIQUE</h2>
            <p class="mt-2 text-lg text-gray-300">Nous adhérons à notre philosophie biologique, qui implique d’éviter les pesticides et les engrais non biologiques..</p>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-4">
            <h2 class="text-3xl font-extrabold text-white">SANS ADDITIFS</h2>
            <p class="mt-2 text-lg text-gray-300">Nous évitons tout additif artificiel après la récolte des cultures pour vous offrir les meilleurs produits biologiques..</p>
        </div>
    </div>
</div>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl category-items VEGETABLES flex flex-col h-30">
        <div class="relative flex-grow">
            <img src="/image/image4.jpg" alt="Nom de l'image" class="h-50 w-full object-cover rounded-t-xl" />
        </div>
        <div class="px-4 py-3">
            <div class="flex flex-col flex-grow">
                <p class="text-lg font-bold text-black truncate capitalize">Patate</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-lg font-semibold text-black cursor-auto">2000 FCFA</p>
                    <div class="ml-auto">
                        <a href="/product/1" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="px-4 py-3 mt-auto">
            <div class="flex items-center">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C9.79 2 8 3.79 8 6C8 8.21 9.79 10 12 10C14.21 10 16 8.21 16 6C16 3.79 14.21 2 12 2ZM12 12C9.33 12 4 13.34 4 16V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V16C20 13.34 14.67 12 12 12Z" fill="#666"/>
                </svg>
                <p class="ml-2 text-sm font-semibold text-black">SOVI</p>
            </div>
        </div>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl category-items VEGETABLES flex flex-col h-30">
        <div class="relative flex-grow">
            <img src="/image/image.jpg" alt="Nom de l'image" class="h-50 w-full object-cover rounded-t-xl" />
        </div>
        <div class="px-4 py-3">
            <div class="flex flex-col flex-grow">
                <p class="text-lg font-bold text-black truncate capitalize">Carotte</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-lg font-semibold text-black cursor-auto">1600 FCFA</p>
                    <div class="ml-auto">
                        <a href="/product/4" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="px-4 py-3 mt-auto">
            <div class="flex items-center">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C9.79 2 8 3.79 8 6C8 8.21 9.79 10 12 10C14.21 10 16 8.21 16 6C16 3.79 14.21 2 12 2ZM12 12C9.33 12 4 13.34 4 16V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V16C20 13.34 14.67 12 12 12Z" fill="#666"/>
                </svg>
                <p class="ml-2 text-sm font-semibold text-black">SOVI</p>
            </div>
        </div>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl category-items VEGETABLES flex flex-col h-30">
        <div class="relative flex-grow">
            <img src="/image/image6.jpg" alt="Nom de l'image" class="h-50 w-full object-cover rounded-t-xl" />
        </div>
        <div class="px-4 py-3">
            <div class="flex flex-col flex-grow">
                <p class="text-lg font-bold text-black truncate capitalize">Banane</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-lg font-semibold text-black cursor-auto">900 FCFA</p>
                    <div class="ml-auto">
                        <a href="/product/1" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="px-4 py-3 mt-auto">
            <div class="flex items-center">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C9.79 2 8 3.79 8 6C8 8.21 9.79 10 12 10C14.21 10 16 8.21 16 6C16 3.79 14.21 2 12 2ZM12 12C9.33 12 4 13.34 4 16V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V16C20 13.34 14.67 12 12 12Z" fill="#666"/>
                </svg>
                <p class="ml-2 text-sm font-semibold text-black">SOVI</p>
            </div>
        </div>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl category-items VEGETABLES flex flex-col h-30">
        <div class="relative flex-grow">
            <img src="/image/image8.jpg" alt="Nom de l'image" class="h-50 w-full object-cover rounded-t-xl" />
        </div>
        <div class="px-4 py-3">
            <div class="flex flex-col flex-grow">
                <p class="text-lg font-bold text-black truncate capitalize">Fraise</p>
                <div class="flex items-center justify-between mt-2">
                    <p class="text-lg font-semibold text-black cursor-auto">1500 FCFA</p>
                    <div class="ml-auto">
                        <a href="/product/1" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="px-4 py-3 mt-auto">
            <div class="flex items-center">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C9.79 2 8 3.79 8 6C8 8.21 9.79 10 12 10C14.21 10 16 8.21 16 6C16 3.79 14.21 2 12 2ZM12 12C9.33 12 4 13.34 4 16V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V16C20 13.34 14.67 12 12 12Z" fill="#666"/>
                </svg>
                <p class="ml-2 text-sm font-semibold text-black">SOVI</p>
            </div>
        </div>
    </div>
</div>

@include('livewire.footer')

<div class="slideshow-container">

  <div class="bg-img">
    <div class="description"></div>
  </div>

<script>
     $(document).ready(function(){
            // Contenu des textes associés aux images
            const slidesContent = [
                {
                    title: "Bienvenue chez nous !",
                    description: "NOS PRODUITS ISSUS D'UNE CULTURE AMOUREUSE"
                },
                {
                    title: "LÉGUMES",
                    description: " SANS ADDITIFS NOCIFS"
                },
                {
                    title: "FRUITS",
                    description: "AVEC BEAUCOUP DE VITAMINES"
                }
            ];

            // Initialisation du carrousel
            $('#slideshow-container').slick({
                autoplay: true,
                autoplaySpeed: 5000,
                arrows: false,
                vertical: false,
                pauseOnHover: false,
                pauseOnFocus: false,
                speed: 1000,
                adaptiveHeight: true
            }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
                // Masquer les textes
                $('#slide-title').removeClass('visible');
                $('#slide-description').removeClass('visible');
            }).on('afterChange', function(event, slick, currentSlide){
                // Mettre à jour les textes
                $('#slide-title').text(slidesContent[currentSlide].title);
                $('#slide-description').text(slidesContent[currentSlide].description);
                // Afficher les textes
                $('#slide-title').addClass('visible');
                $('#slide-description').addClass('visible');
            });

            // Initialisation du premier texte
            $('#slide-title').text(slidesContent[0].title);
            $('#slide-description').text(slidesContent[0].description);
            $('#slide-title').addClass('visible');
            $('#slide-description').addClass('visible');
        });

</script>

