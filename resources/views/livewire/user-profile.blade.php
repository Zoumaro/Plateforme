
<div>
    @include('livewire.navbar')
    <div class="container mx-auto p-6">
      
        <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
            <h2 class="text-2xl font-bold mb-4">Informations générales</h2>
                <div class="flex items-center">
                    <span class="font-bold w-1/3">Nom :</span>
                    <div class="font-bold text-xl mb-2">{{ $user->name }}</div>
                    <div class="font-bold text-xl mb-2">{{ $user->first_name }}</div>
                   
                </div>
               
            </div>
        </div>

    
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h2 class="text-2xl font-bold mb-4">Coordonnées</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center">
                    <span class="font-bold w-1/3">Adresses e-mail :</span>
                    <p class="text-gray-700 text-base">{{ $user->email }}</p>
                </div>
               
                <div class="flex items-center">
                    <span class="font-bold w-1/3">Téléphone :</span>
                    <p>Téléphone : {{ $user->telephone }}</p>
                </div>
            </div>
        </div>
    </div>

    </div>