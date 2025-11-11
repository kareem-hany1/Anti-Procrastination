<x-layout>
    <x-slot:title>Inscription</x-slot:title>
    <div class="layout-container flex h-full grow flex-col">
        <x-header/>
        <form method="post" action="/register" class="px-40 flex  justify-center py-5">
            @csrf


            <div class="layout-content-container flex flex-col w-[512px] max-w-[512px] py-5 max-w-[960px] ">
                <h2 class="text-white tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">S'inscrire</h2>
                @error('email')
                <p class="text-red-500 text-sm fond-bold text-center">{{$message}}</p>
                @enderror
                <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-white text-base font-medium leading-normal pb-2">Nom Complet</p>
                        <input
                            placeholder="nom complet"
                            name="fullname"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#324d67] bg-[#192633] focus:border-[#324d67] h-14 placeholder:text-[#92adc9] p-[15px] text-base font-normal leading-normal"
                            value="{{old('fullname')}}"
                        />
                    </label>
                </div>
                <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-white text-base font-medium leading-normal pb-2">Email</p>
                        <input
                            placeholder="email"
                            name="email"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#324d67] bg-[#192633] focus:border-[#324d67] h-14 placeholder:text-[#92adc9] p-[15px] text-base font-normal leading-normal"
                            value="{{old('email')}}"
                        />
                    </label>
                </div>
                <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-white text-base font-medium leading-normal pb-2">Mot de Passe</p>
                        <input
                            placeholder="mot de passe"
                            name="password"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border border-[#324d67] bg-[#192633] focus:border-[#324d67] h-14 placeholder:text-[#92adc9] p-[15px] text-base font-normal leading-normal"
                            value="{{old('password')}}"
                        />
                    </label>
                </div>
                {{--                <p class="text-[#92adc9] text-sm font-normal leading-normal pb-3 pt-1 px-4 underline">Forgot password?</p>--}}
                <div class="flex px-4 py-3">
                    <button
                        class="flex min-w-[84px] max-w-[450px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-5 flex-1 bg-[#2b8dee] text-white text-base font-bold leading-normal tracking-[0.015em]"
                    >
                        <span class="truncate">Valider</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
</x-layout>
