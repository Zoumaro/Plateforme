<div>
    @include('livewire.navbar')
                    @if (session()->has('message'))
                        <div class="bg-green-500 text-white p-4 rounded-lg shadow-md mt-4">
                            {{ session('message') }}
                        </div>
                        @endif

    <div class="flex h-screen bg-gray-100">
        <div class="hidden md:flex flex-col w-64 bg-gray-800 rounded-2xl">
            <div class="flex flex-col flex-1 overflow-y-auto">
                <nav class="flex flex-col flex-1 overflow-y-auto bg-gradient-to-b from-gray-700 to-blue-500 px-2 py-4 gap-10 rounded-0xl">
                    <div>
                        <a href="/" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                            Dashboard
                        </a>
                    </div>
                    <div class="flex flex-col flex-1 gap-3">
                        <a href="/" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-400 hover:bg-opacity-25 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="margin-right: 80 px">
                                <path fill="currentColor" fill-rule="evenodd" d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6l2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2z" clip-rule="evenodd" />
                            </svg>
                            Home
                        </a>
                        <a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-400 hover:bg-opacity-25 rounded-2xl" wire:click="$set('showModal', true)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 2a6 6 0 0 0-6 6v4H5a3 3 0 0 0-3 3v5h20v-5a3 3 0 0 0-3-3h-1V8a6 6 0 0 0-6-6zm0 2a4 4 0 0 1 4 4v4H8V8a4 4 0 0 1 4-4zM4 16h16v3H4v-3z" />
                            </svg>
                            Passer commande
                        </a>
                        <a href="{{ route('profile') }}" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-400 hover:bg-opacity-25 rounded-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M12 2a6 6 0 0 0-6 6c0 1.978.957 3.726 2.438 4.84c.025.02.05.04.077.056A8.973 8.973 0 0 0 11 15.91V20H8.5a1.5 1.5 0 0 0 0 3h7a1.5 1.5 0 0 0 0-3H13v-4.09c1.485-.292 2.832-.965 3.485-2.014c.027-.016.052-.036.077-.056A5.996 5.996 0 0 0 18 8a6 6 0 0 0-6-6zm-4 6a4 4 0 1 1 8 0a4 4 0 0 1-8 0z" />
                            </svg>
                            Profile
                        </a>
                    </div>

                        @if($showModal)
                        <div class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

                                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                                    Passer une commande
                                                </h3>
                                                <div class="mt-2">
                                                    <form wire:submit.prevent="submit">
                                                        <div class="mb-4">
                                                            <label for="product_id" class="block text-gray-700 text-sm font-bold mb-2">Produit:</label>
                                                            <select id="product_id" wire:model="product_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                                <option value="">Sélectionnez un produit</option>
                                                                @foreach($products as $product)
                                                                <option value="{{ $product->id }}">{{ $product->name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('product_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="quantity" class="block text-gray-700 text-sm font-bold mb-2">Quantité:</label>
                                                            <input type="number" id="quantity" wire:model="quantity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                            @error('quantity') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="mb-4">
                                                            <label for="deliveryAddress" class="block text-gray-700 text-sm font-bold mb-2">Adresse de livraison:</label>
                                                            <input type="text" id="deliveryAddress" wire:model="deliveryAddress" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                                            @error('deliveryAddress') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                                                        </div>

                                                        <div class="flex items-center justify-between">
                                                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                                                Soumettre
                                                            </button>
                                                            <button type="button" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" wire:click="$set('showModal', false)">
                                                                Annuler
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif

                    </div>
                </nav>
            </div>
        </div> 
    </div>
</div>