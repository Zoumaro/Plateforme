<div>
    @include('livewire.navbar')

  
        <div class="hidden md:flex flex-col w-64 bg-gray-800 rounded-2xl">
          
        </div>
        <div class="flex-1">
            <div class="p-4">
                <h1 class="text-2xl font-bold mb-4">Liste des Commandes</h1>
                @foreach ($orders as $order)
                <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                    <h2 class="text-xl font-semibold mb-2">Commande #{{ $order->id }}</h2>
                    <p class="mb-2">Client: {{ $order->customer_name }}</p>
                    <p class="mb-2">Total: {{ $order->total }} FCFA</p>
                    <p class="mb-2">Statut: {{ $order->status }}</p>
                    <div class="flex gap-2">
                        <button wire:click="confirmOrder({{ $order->id }})" class="bg-green-500 text-white px-4 py-2 rounded-lg">Confirmer</button>
                        <button wire:click="shipOrder({{ $order->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Expédier</button>
                        <button wire:click="cancelOrder({{ $order->id }})" class="bg-red-500 text-white px-4 py-2 rounded-lg">Annuler</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
