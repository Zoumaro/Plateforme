@include('livewire.navbar')
<div class="max-w-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
    <div class="p-4">
        <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $product->name }}</h1>
        <img src="{{ Storage::url($product->picture) }}" alt="image" class="w-24 h-auto mb-4">
        <table class="w-full text-left table-auto">
            <tbody>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Nom</th>
                    <td class="px-4 py-2">{{ $product->name }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Description</th>
                    <td class="px-4 py-2">{{ $product->description }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Prix Unitaire</th>
                    <td class="px-4 py-2">${{ number_format($product->unitPrice, 2) }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Adresse</th>
                    <td class="px-4 py-2">{{ $product->address }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Stock</th>
                    <td class="px-4 py-2">{{ $product->stock }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Utilisateur</th>
                    <td class="px-4 py-2">{{ $product->user->name }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Unité</th>
                    <td class="px-4 py-2">{{ $product->unit->name }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <th class="px-4 py-2 text-gray-600">Type de Produit</th>
                    <td class="px-4 py-2">{{ $product->productType->name }}</td>
                </tr>
                <tr class="border-t border-gray-200">
                    <td colspan="2" class="px-4 py-2 text-center">
                        <kkiapay-widget amount="{{ $product->unitPrice }}"
                            key="ecb931e02a6811ef989b714ab6952562"
                            position="center"
                            sandbox="true"
                            data=""
                            callback="javascript:transactionCallback()">
                        </kkiapay-widget>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@include('livewire.footer')

<script>
    function transactionCallback() {
        Livewire.emit('transactionCompleted');
    }

    Livewire.on('redirectAfterTransaction', (url) => {
        window.location.href = url;
    });
</script>
