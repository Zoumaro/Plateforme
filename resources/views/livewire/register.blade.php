<div class="relative overflow-hidden rounded-lg bg-cover bg-no-repeat p-12 text-center"
    style="background-image: url('/image/im5.jpg'); height: 100vh">
    <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
        style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
            <div class="text-white">
                <h2 class="mb-4 text-4xl font-semibold">Inscription</h2>
                <form wire:submit.prevent="submit">
                    <div class="grid sm:grid-cols-2 gap-y-7 gap-x-12 text-left">
                        <div>
                            <label class="text-base mb-2 block">Nom</label>
                            <input wire:model="name" type="text"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black"
                                placeholder="Entrez le nom" />
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-base mb-2 block">Prénom</label>
                            <input wire:model="first_name" type="text"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black"
                                placeholder="Entrez le prénom" />
                            @error('first_name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-base mb-2 block">Email</label>
                            <input wire:model="email" type="text"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black"
                                placeholder="Entrez l'email" />
                            @error('email')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-base mb-2 block">Téléphone</label>
                            <input wire:model="telephone" type="text"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black"
                                placeholder="Entrez votre numéro" />
                            @error('telephone')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-base mb-2 block">Mot de passe</label>
                            <input wire:model="password" type="password"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black"
                                placeholder="Entrez mot de passe" />
                            @error('password')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label class="text-base mb-2 block">Confirmer mot de passe</label>
                            <input wire:model="password_confirmation" type="password"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black"
                                placeholder="Confirmer le mot de passe" />
                            @error('password_confirmation')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex space-x-12 mt-4">
                        <div class=" flex flex-col">
                            <label class="text-base mb-2 block">Département</label>
                            <select wire:model="selectedDepartment"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black">
                                <option value="">Sélectionnez le département</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->name }}</option>
                                @endforeach
                            </select>
                            <div class="flex flex-col">
                                @error('selectedDepartment')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div>
                            <label class="text-base mb-2 block">Commune</label>
                            <select wire:model="selectedMunicipality"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black">
                                <option value="">Sélectionnez la commune</option>
                                @foreach ($municipalities as $municipality)
                                    <option value="{{ $municipality->id }}">{{ $municipality->name }}</option>
                                @endforeach
                            </select>
                            <div class="flex flex-col">
                            @error('selectedMunicipality')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div>
                            <label class="text-base mb-2 block"> Arrondissement</label>
                            <select wire:model="selectedDistrict"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black">
                                <option value="">Sélectionnez l'arrondissement'</option>
                                @foreach ($districts as $district)
                                    <option value="{{ $district->id }}">{{ $district->name }}</option>
                                @endforeach
                            </select>
                            <div class="flex flex-col">
                            @error('selectedDistrict')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                        <div>
                            <label class="text-base mb-2 block">Localité</label>
                            <select wire:model="selectedLocality"
                                class="bg-gray-100 w-full text-base px-4 py-3.5 rounded-md outline-blue-500 text-black">
                                <option value="">Sélectionnez la localité</option>
                                @foreach ($localities as $locality)
                                    <option value="{{ $locality->id }}">{{ $locality->name }}</option>
                                @endforeach
                            </select>
                            <div class="flex flex-col">
                            @error('selectedLocality')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 text-left">
                        <label class="text-base mb-2 block">Type d'utilisateur</label>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                            @foreach ($roles as $role)
                                <div class="flex items-center">
                                    <input wire:model="role_id" type="radio" id="role_id_{{ $role->id }}"
                                        name="role_id" value="{{ $role->id }}" class="mr-2">
                                    <label for="role_id_{{ $role->id }}"
                                        class="text-base">{{ $role->name }}</label>
                                </div>
                            @endforeach
                            @error('role_id')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-10 text-center">
                        <button type="submit"
                            class="rounded border-2 border-neutral-50 px-7 pb-[8px] pt-[10px] text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200">
                            S'inscrire
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
