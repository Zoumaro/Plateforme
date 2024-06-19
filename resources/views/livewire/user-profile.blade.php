<div>
    @include('livewire.navbar')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="container mx-auto p-6">
            <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                <h2 class="text-2xl font-bold mb-4">Informations générales</h2>
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <tbody>
                        <tr class="bg-gray-100 border-b">
                            <td class="font-bold p-4 border-r border-gray-300">Nom</td>
                            <td class="text-xl p-4">{{ $user->name }}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-bold p-4 border-r border-gray-300">Prénom</td>
                            <td class="text-xl p-4">{{ $user->first_name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold mb-4">Coordonnées</h2>
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <tbody>
                        <tr class="bg-gray-100 border-b">
                            <td class="font-bold p-4 border-r border-gray-300">Adresse e-mail</td>
                            <td class="text-gray-700 text-base p-4">{{ $user->email }}</td>
                        </tr>
                        <tr class="border-b">
                            <td class="font-bold p-4 border-r border-gray-300">Téléphone</td>
                            <td class="text-gray-700 text-base p-4">{{ $user->telephone }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
