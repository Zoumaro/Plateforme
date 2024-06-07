
@include('navbar')
<div class="text-center p-10">
    <h1 class="font-bold text-4xl mb-4">Tout les Produits</h1>
</div>
<style>
    .progress-bar {
        height: 5px;
        background-color: #28a745; /* Couleur de la barre de progression */
    }

    .product-card {
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 16px;
        margin: 8px;
        width: 200px;
    }
</style>
</head>
<body>
<div class="flex justify-around items-center bg-gray-100 py-4">
    <div class="category-tab px-4 py-2 bg-blue-500 text-white rounded-lg cursor-pointer" onclick="filterItems('ALL')">ALL</div>
    <div class="category-tab px-4 py-2 bg-green-500 text-white rounded-lg cursor-pointer" onclick="filterItems('VEGETABLES')">VEGETABLES</div>
    <div class="category-tab px-4 py-2 bg-yellow-500 text-white rounded-lg cursor-pointer" onclick="filterItems('FRUITS')">FRUITS</div>
    <div class="category-tab px-4 py-2 bg-red-500 text-white rounded-lg cursor-pointer" onclick="filterItems('BREAD')">BREAD</div>
</div>
<div class="progress-bar" id="progressBar" style="width: 0;"></div> <!-- Barre de progression pour l'onglet actif -->
<div id="filteredItems">
    <div class="category-items ALL">
        <div class="product-card">Produit 1</div>
        <div class="product-card">Produit 2</div>
        <div class="product-card">Produit 3</div>
    </div>
    <div class="category-items VEGETABLES hidden">
        <div class="product-card">Légume 1</div>
        <div class="product-card">Légume 2</div>
        <div class="product-card">Légume 3</div>
    </div>
    <div class="category-items FRUITS hidden">
        <div class="product-card">Fruit 1</div>
        <div class="product-card">Fruit 2</div>
        <div class="product-card">Fruit 3</div>
    </div>
    <div class="category-items BREAD hidden">
        <div class="product-card">Pain 1</div>
        <div class="product-card">Pain 2</div>
        <div class="product-card">Pain 3</div>
    </div>
</div>

<script>
    function filterItems(category) {
        // Mettre à jour la largeur de la barre de progression en fonction de la catégorie sélectionnée
        const progressBar = document.getElementById('progressBar');
        if (category === 'ALL') {
            progressBar.style.width = '100%';
        } else {
            progressBar.style.width = '25%'; // Changer la largeur en fonction du nombre de catégories
        }

        // Afficher les éléments filtrés en dessous de la barre de progression
        const filteredItems = document.querySelectorAll('.category-items');
        filteredItems.forEach(item => {
            if (item.classList.contains(category)) {
                item.classList.remove('hidden');
            } else {
                item.classList.add('hidden');
            }
        });
    }
</script>
<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl category-items VEGETABLES">
        <img src="{{ asset('image/image4.jpg') }}" alt="image" class="h-80 w-72 object-cover rounded-t-xl" />
        <div class="px-4 py-3 w-72">
            <p class="text-lg font-bold text-black truncate block capitalize">Patate</p>
            <div class="flex items-center">
                <p class="text-lg font-semibold text-black cursor-auto my-3">2000 FCFA</p>
                <div class="ml-auto">
                    <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl" style="background-color: #f3f4f6;">
        <a href="#">
            <img src="{{ asset('img/produit1.jpg') }}" alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">
                <p class="text-lg font-bold text-black truncate block capitalize">SOJA</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">3000 FCFA</p>
                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/produit2.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">Tomate</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1500 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/produit3.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">OIGNON</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">2500 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img  src="{{ asset('img/produit5.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">MAÏS FRAI</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1000 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/mil.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">Mil</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">5000 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/media.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">HARICOT</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">2800 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/maïs.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">MAÏS SEC</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">4000 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('image/image6.jpg') }}"
                    alt="image" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">BANANE</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">900 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('image/image5.jpg') }}"
                    alt="image" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">CAROTE</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1600 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>


    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/laitue.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">Laitue</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">700 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/igname-assawa.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">IGNAME</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">5000 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/Haricot-vert.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">HARICOT VERT</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1800 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/piment.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">HARICOT VERT</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1800 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/manioc.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">MANIOC</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">800 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/riz.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">RIZ</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1000 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/ara.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">ARACHIDE</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1500 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
        <a href="#">
            <img src="{{ asset('img/araV.jpg') }}"
                    alt="img" class="h-80 w-72 object-cover rounded-t-xl" />
            <div class="px-4 py-3 w-72">

                <p class="text-lg font-bold text-black truncate block capitalize">ARACHIDE FRAIS</p>
                <div class="flex items-center">
                    <p class="text-lg font-semibold text-black cursor-auto my-3">1800 FCFA</p>

                    <div class="ml-auto">
                        <a href="/panier" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </a>
    </div>

</section>


@include('footer')

