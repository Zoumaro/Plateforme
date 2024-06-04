<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .fade-in {
            opacity: 0;
            transition: opacity 0.5s ease-in;
        }
        .fade-in.visible {
            opacity: 1;
            transition: opacity 1s ease-in;
        }
    </style>

</head>
<body class="font-sans">
    @include('navbar')

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
    <div class="py-12 mb-12 bg-transparent">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
            <div class="mr-20">
                <img src="/image/image7.jpg" alt="Description de l'image"class="w-100 h-auto mr-20 sm:border-0 lg:border-0">
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
            <h2 class="text-3xl font-extrabold text-white">Titre 1</h2>
            <p class="mt-2 text-lg text-gray-300">Contenu du titre 1.</p>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-4">
            <h2 class="text-3xl font-extrabold text-white">Titre 2</h2>
            <p class="mt-2 text-lg text-gray-300">Contenu du titre 2.</p>
        </div>
        <div class="w-full md:w-1/3 px-4 mb-4">
            <h2 class="text-3xl font-extrabold text-white">Titre 3</h2>
            <p class="mt-2 text-lg text-gray-300">Contenu du titre 3.</p>
        </div>
    </div>
</div>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mt-8">
    <!-- Première carte -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-between transition duration-100 transform hover:scale-105">
        <div class="flex justify-center items-center h-50"> <!-- Conteneur pour centrer l'image -->
            <img src="/image/image4.jpg" alt="Nom de l'image" class="w-full h-41 object-cover "> <!-- Ajustement de la taille de l'image -->
        </div>
        <div class="p-6 flex flex-col justify-center items-center"> <!-- Conteneur pour centrer le texte -->
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Patate</h3>
            <p class="text-gray-600">Prix : 2000 FCFA</p>
        </div>
    </div>
    <!-- Deuxième carte -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-between transition duration-100 transform hover:scale-105">
        <div class="flex justify-center items-center h-50"> <!-- Conteneur pour centrer l'image -->
            <img src="/image/image.jpg" alt="Nom de l'image"  class="w-full h-50 object-cover"> <!-- Ajustement de la taille de l'image -->
        </div>
        <div class="p-6 flex flex-col justify-center items-center"> <!-- Conteneur pour centrer le texte -->
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Carotte</h3>
            <p class="text-gray-600">Prix : 1600 FCFA</p>
        </div>
    </div>
    <!-- Troisième carte -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-between transition duration-100 transform hover:scale-105">
        <div class="flex justify-center items-center h-50"> <!-- Conteneur pour centrer l'image -->
            <img src="/image/image6.jpg" alt="Nom de l'image"  class="w-full h-41 object-cover"> <!-- Ajustement de la taille de l'image -->
        </div>
        <div class="p-6 flex flex-col justify-center items-center"> <!-- Conteneur pour centrer le texte -->
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Banane</h3>
            <p class="text-gray-600">Prix : 900 FCFA</p>
        </div>
    </div>
    <!-- Quatrième carte -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-between transition duration-100 transform hover:scale-105">
        <div class="flex justify-center items-center h-50"> <!-- Conteneur pour centrer l'image -->
            <img src="/image/image8.jpg" alt="Nom de l'image" class="w-full h-41 object-cover"> <!-- Ajustement de la taille de l'image -->
        </div>
        <div class="p-6 flex flex-col justify-center items-center"> <!-- Conteneur pour centrer le texte -->
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Fraise</h3>
            <p class="text-gray-600">Prix : 1500 FCFA</p>
        </div>
    </div>
</div>

@include('footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<div class="slideshow-container">
  <!-- bg-img -->
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

</body>
</html>
