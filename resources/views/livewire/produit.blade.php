
@include('livewire.navbar')
<div class="text-center p-10">
    <h1 class="font-bold text-4xl mb-4">Produits</h1>
</div>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2" defer></script>
<style>
    .category-tab {

        margin-right: 10px;
    }
    .progress-bar {
        transition: width 0.3s, left 0.3s;

    }
</style>

<div x-data="{ tab: 'TOUT LES PRODUITS', tabWidth: 0, tabLeft: 0 }" class="relative w-full max-w-lg mx-auto mt-10">
<div class="flex justify-around text-gray-600">
    <div class="category-tab cursor-pointer" :class="{ 'text-green-600': tab === 'TOUT LES PRODUITS' }" @click="tab = 'TOUT LES PRODUITS'; updateProgress($event)">TOUT LES PRODUITS</div>
    <div class="category-tab cursor-pointer" :class="{ 'text-green-600': tab === 'CEREALES' }" @click="tab = 'CEREALES'; updateProgress($event)">CEREALES</div>
    <div class="category-tab cursor-pointer" :class="{ 'text-green-600': tab === 'FRUITS' }" @click="tab = 'FRUITS'; updateProgress($event)">FRUITS</div>
    <div class="category-tab cursor-pointer" :class="{ 'text-green-600': tab === 'LEGUMES' }" @click="tab = 'LEGUMES'; updateProgress($event)">LEGUMES</div>
    <div class="category-tab cursor-pointer" :class="{ 'text-green-600': tab === 'LEGUMINEUSE' }" @click="tab = 'LEGUMINEUSE'; updateProgress($event)">LEGUMINEUSE</div>
    <div class="category-tab cursor-pointer" :class="{ 'text-green-600': tab === 'OLEAGINEUX' }" @click="tab = 'OLEAGINEUX'; updateProgress($event)">OLEAGINEUX</div>
</div>
<div class="relative mt-2 h-1 bg-gray-300">
    <div x-ref="progressBar" class="absolute h-1 bg-green-600 progress-bar"></div>
</div>
</div>

<script>
function updateProgress(event) {
    const progressBar = document.querySelector('.progress-bar');
    const tabWidth = event.target.offsetWidth;
    const tabOffsetLeft = event.target.offsetLeft;

    progressBar.style.width = `${tabWidth}px`;
    progressBar.style.left = `${tabOffsetLeft}px`;
}
</script>
<section id="Projects" class="w-fit mx-auto grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 justify-items-center justify-center gap-y-20 gap-x-14 mt-10 mb-5">
    @foreach ($products as $product)
    <div class="w-72 bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl category-items VEGETABLES">
        <img src="{{ $product->picture }}" alt="image" class="h-80 w-auto object-cover rounded-t-xl" />
        <div class="px-4 py-3 w-72">
            <p class="text-lg font-bold text-black truncate block capitalize">{{$product->name}}</p>
            <div class="flex items-center">
                <p class="text-lg font-semibold text-black cursor-auto my-3">{{$product->unitPrice}} FCFA</p>
                <div class="ml-auto">
                    <a href="/product/{{$product->id}}" class="bg-blue-300 hover:bg-yellow-300 text-black font-bold py-2 px-4 rounded-full flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
            <div class="flex items-center">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2C9.79 2 8 3.79 8 6C8 8.21 9.79 10 12 10C14.21 10 16 8.21 16 6C16 3.79 14.21 2 12 2ZM12 12C9.33 12 4 13.34 4 16V18C4 18.55 4.45 19 5 19H19C19.55 19 20 18.55 20 18V16C20 13.34 14.67 12 12 12Z" fill="#666"/>
                  </svg>
                <p class="text-sm font-semibold text-black">{{$product->user->name}}</p>
            </div>
        </div>
    </div>
    @endforeach
</section>

@include('footer')

