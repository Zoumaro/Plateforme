

<div>
    <h2 class="font-bold text-2xl md:text-4xl mb-4">Panier</h2>
    <div class="p-4 bg-gray-100 rounded-lg shadow-md">
        @forelse($panier as $item)
            <div>{{ $item['name'] }} - {{ $item['quantity'] }} x {{ $item['price'] }} FCFA</div>
        @empty
            <div>Le panier est vide.</div>
        @endforelse
    </div>
    <div class="font-bold text-lg mt-4">
        Total: {{ $total }} FCFA
    </div>
</div>