<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
</head>
<body class="font-sans">

@include('navbar')

<div class="relative -mt-32 md:-mt-24 h-[750px] w-full overflow-hidden">
    <div id="slideshow-container" class="w-full h-full relative">

        <div class="relative">
            <img src="/image/image1.jpg" alt="Description de l'image" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex justify-center items-center text-black">
                <div class="max-w-3xl mx-auto text-center p-4 md:p-8">
                    <h1 class='text-2xl md:text-4xl font-bold mb-2 md:mb-4 text-white'>Qui sommes-nous?<br>Notre histoire</h1>
                    <p class='text-base md:text-lg leading-relaxed text-white'>AgriBros Market est une plate-forme digitale spécialisée dans la promotion et la commercialisation des produits agricoles, permettant de connecter les exploitations aux marchés et de valoriser les produits locaux sur le plan international. Plateforme web, mobile et SMS (USSD) connectant les agriculteurs et producteurs locaux aux acheteurs potentiels et consommateurs finaux sur un marché numérique et permettant le financement participatif des projets dans le domaine agricole et agro-alimentaire.</p>
                </div>
            </div>
        </div>
        <div class="relative">
            <img src="/image/image2.jpg" alt="Description de l'image" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex justify-center items-center text-black">
                <div class="max-w-3xl mx-auto text-center p-4 md:p-8">
                    <h1 class='text-2xl md:text-4xl font-bold mb-2 md:mb-4 text-white'>Description pour la deuxième image</h1>
                    <p class='text-base md:text-lg leading-relaxed text-white'>Ajoutez votre description pour la deuxième image ici.</p>
                </div>
            </div>
        </div>
        <div class="relative">
            <img src="/image/image3.jpg" alt="Description de l'image" class="w-full h-full object-cover">
            <div class="absolute inset-0 flex justify-center items-center text-black">
                <div class="max-w-3xl mx-auto text-center p-4 md:p-8">
                    <h1 class='text-2xl md:text-4xl font-bold mb-2 md:mb-4 text-white'>Description pour la troisième image</h1>
                    <p class='text-base md:text-lg leading-relaxed text-white'>Ajoutez votre description pour la troisième image ici.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-12 mb-12 bg-transparent">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
        <div class="mr-20">
            <img src="/image/image7.jpg" alt="Description de l'image"class="w-80 h-auto mr-20 sm:border-0 lg:border-0">
        </div>
        <div>
            <div class="ml-20">
            <h2 class="text-3xl font-extrabold text-gray-900">Autres descriptions</h2>
            <p class="mt-4 text-lg text-gray-500">Ajoutez ici d'autres descriptions.</p>
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
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Nom du produit 1</h3>
            <p class="text-gray-600">Prix : $20</p>
        </div>
    </div>
    <!-- Deuxième carte -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-between transition duration-100 transform hover:scale-105">
        <div class="flex justify-center items-center h-50"> <!-- Conteneur pour centrer l'image -->
            <img src="/image/image5.jpg" alt="Nom de l'image"  class="w-full h-50 object-cover"> <!-- Ajustement de la taille de l'image -->
        </div>
        <div class="p-6 flex flex-col justify-center items-center"> <!-- Conteneur pour centrer le texte -->
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Nom du produit 2</h3>
            <p class="text-gray-600">Prix : $30</p>
        </div>
    </div>
    <!-- Troisième carte -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-between transition duration-100 transform hover:scale-105">
        <div class="flex justify-center items-center h-50"> <!-- Conteneur pour centrer l'image -->
            <img src="/image/image6.jpg" alt="Nom de l'image"  class="w-full h-41 object-cover"> <!-- Ajustement de la taille de l'image -->
        </div>
        <div class="p-6 flex flex-col justify-center items-center"> <!-- Conteneur pour centrer le texte -->
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Nom du produit 3</h3>
            <p class="text-gray-600">Prix : $25</p>
        </div>
    </div>
    <!-- Quatrième carte -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col justify-between transition duration-100 transform hover:scale-105">
        <div class="flex justify-center items-center h-50"> <!-- Conteneur pour centrer l'image -->
            <img src="/image/image8.jpg" alt="Nom de l'image" class="w-full h-41 object-cover"> <!-- Ajustement de la taille de l'image -->
        </div>
        <div class="p-6 flex flex-col justify-center items-center"> <!-- Conteneur pour centrer le texte -->
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Nom du produit 4</h3>
            <p class="text-gray-600">Prix : $35</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



<script>
    $(document).ready(function(){
        // Initialisation du carrousel
        $('#slideshow-container').slick({
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            vertical: false, // Défilement horizontal
            pauseOnHover: false,
            pauseOnFocus: false,
            speed: 1000, // Vitesse de défilement en millisecondes (1 seconde)
            adaptiveHeight: true // Ajustement de la hauteur du conteneur en fonction du contenu
        });
    });

</script>

</body>
</html>
