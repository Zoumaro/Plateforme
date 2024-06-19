<div>
    <div class="flex items-center">
        <input wire:model="query" type="text" placeholder="Rechercher"
            class="px-2 py-1 border rounded-md border-gray-300 focus:outline-none focus:border-blue-500">
        <button wire:click="search" class="bg-blue-500 text-white px-3 py-1 rounded-md ml-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </button>
    </div>
</div>
