<x-layout>
    <x-slot:title>Connexion</x-slot:title>
    <div class="layout-container flex h-full grow flex-col">
        <x-header/>
        <form method="POST" action="/login" class="px-4 sm:px-8 md:px-20 lg:px-40 flex justify-center py-5">
            @csrf
            <div class="layout-content-container flex flex-col w-full sm:w-[512px] max-w-[512px] py-5">
                <h2 class="text-white tracking-light text-2xl sm:text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">Se Connecter</h2>
                @error('email')
                <p class="text-red-500 text-sm font-bold text-center px-4">{{$message}}</p>
                @enderror

                <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-white text-sm sm:text-base font-medium leading-normal pb-2">Email</p>
                        <input
                            type="email"
                            placeholder="email"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#324d67] bg-[#192633] focus:border-[#324d67] h-12 sm:h-14 placeholder:text-[#92adc9] p-3 sm:p-[15px] text-sm sm:text-base font-normal leading-normal"
                            value="{{old('email')}}"
                            name="email"
                        />
                    </label>
                </div>

                <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-white text-sm sm:text-base font-medium leading-normal pb-2">Mot de Passe</p>
                        <div class="relative" x-data="{ showPassword: false }">
                            <input
                                :type="showPassword ? 'text' : 'password'"
                                placeholder="mot de passe"
                                class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#324d67] bg-[#192633] focus:border-[#324d67] h-12 sm:h-14 placeholder:text-[#92adc9] p-3 sm:p-[15px] pr-12 text-sm sm:text-base font-normal leading-normal"
                                value="{{old('password')}}"
                                name="password"
                            />
                            <button
                                type="button"
                                @click="showPassword = !showPassword"
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-[#92adc9] hover:text-white transition-colors"
                            >
                                <!-- Icône Oeil Ouvert -->
                                <svg x-show="!showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                </svg>
                                <!-- Icône Oeil Fermé -->
                                <svg x-show="showPassword" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                                </svg>
                            </button>
                        </div>
                    </label>
                </div>

                <div class="flex px-4 py-3">
                    <button
                        type="submit"
                        class="flex min-w-[84px] max-w-[450px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 sm:h-12 px-4 sm:px-5 flex-1 bg-[#2b8dee] text-white text-sm sm:text-base font-bold leading-normal tracking-[0.015em] hover:bg-[#2380d4] transition-colors"
                    >
                        <span class="truncate">Valider</span>
                    </button>
                </div>
            </div>
        </form>
        <x-button type="a" href="/" class="absolute top-16 sm:top-20 left-4 sm:left-10 text-sm sm:text-base">
            ← Retour
        </x-button>
    </div>
</x-layout>
