
<div class="container mx-auto">
    <h1 class="text-2xl font-semibold mb-4">Créer une Nouvelle Entreprise</h1>

    @if (session()->has('message'))
        <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="store">
        <div class="mb-4">
            <label for="companyName" class="block text-gray-700">Nom de l'Entreprise</label>
            <input type="text" wire:model="companyName" id="companyName" class="w-full px-4 py-2 border rounded-lg @error('companyName') border-red-500 @enderror">
            @error('companyName') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="contact" class="block text-gray-700">Contact</label>
            <input type="text" wire:model="contact" id="contact" class="w-full px-4 py-2 border rounded-lg @error('contact') border-red-500 @enderror">
            @error('contact') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700">Description</label>
            <textarea wire:model="description" id="description" class="w-full px-4 py-2 border rounded-lg @error('description') border-red-500 @enderror"></textarea>
            @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Créer</button>
        </div>
    </form>
</div>