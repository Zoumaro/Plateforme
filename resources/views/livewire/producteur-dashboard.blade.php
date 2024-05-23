




<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Tableau de bord du Producteur</h2>

    @if (session()->has('message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        <span class="block sm:inline">{{ session('message') }}</span>
    </div>
    @endif

    <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}" class="mb-4">
        <div class="mb-4">
            <label for="nameProduct" class="block text-gray-700 text-sm font-bold mb-2">Nom du produit:</label>
            <input type="text" id="nameProduct" wire:model="nameProduct" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="unitPrice" class="block text-gray-700 text-sm font-bold mb-2">Prix unitaire:</label>
            <input type="number" step="0.01" id="unitPrice" wire:model="unitPrice" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Image</label>
            <input class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-secondary-500 bg-white bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-surface 
            transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:me-3 file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-e file:border-solid file:border-inherit file:bg- 
            file:px-3  file:py-[0.32rem] file:text-surface focus:border-primary focus:text-gray-700 focus:shadow-inset focus:outline-none dark:border-black/70 dark:text-black file:dark:text-black" type="file" id="image" wire:model="image"/>
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Adresse:</label>
            <input type="text" id="address" wire:model="address" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="stock" class="block text-gray-700 text-sm font-bold mb-2">Stock:</label>
            <input type="number" id="stock" wire:model="stock" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="id_unit" class="block text-gray-700 text-sm font-bold mb-2">Unité:</label>
            <input type="number" id="id_unit" wire:model="id_unit" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ $isEdit ? 'Mettre à jour' : 'Ajouter' }}
            </button>
        </div>
    </form>

    <h3 class="text-xl font-bold mb-4">Liste des produits</h3>
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nom</th>
                <th class="py-2 px-4 border-b">Prix unitaire</th>
                <th class="py-2 px-4 border-b">Image</th>
                <th class="py-2 px-4 border-b">Adresse</th>
                <th class="py-2 px-4 border-b">Stock</th>
                <th class="py-2 px-4 border-b">Unité</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td class="py-2 px-4 border-b">{{ $product->nameProduct }}</td>
                <td class="py-2 px-4 border-b">{{ $product->unitPrice }}</td>
                <td class="py-2 px-4 border-b">{{ $product->picture }}</td>
                <td class="py-2 px-4 border-b">{{ $product->address }}</td>
                <td class="py-2 px-4 border-b">{{ $product->stock }}</td>
                <td class="py-2 px-4 border-b">{{ $product->unit->name }}</td>
                <td class="py-2 px-4 border-b">
                    <button wire:click="edit({{ $product->id }})" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 rounded mr-2">Modifier</button>
                    <button wire:click="delete({{ $product->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded">Supprimer</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
