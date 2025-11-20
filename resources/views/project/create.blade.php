<x-layout>
    <x-slot:title>CREATE</x-slot:title>
    <div class="layout-container flex h-full grow flex-col">
        <x-header/>
        <div class="px-40 flex justify-center py-5">
            <form method="post" action="/project/create" class=" flex mx-auto flex-col w-[512px] max-w-[512px] py-5 max-w-[960px]">
                @csrf
                <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-white tracking-light text-[32px] font-bold leading-tight min-w-72">Creer Un Projet</p></div>
                <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-white text-base font-medium leading-normal pb-2">Nom du Projet</p>
                        <input
                            placeholder="Entrer le nom du projet"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#233648] focus:border-none h-14 placeholder:text-[#92adc9] p-4 text-base font-normal leading-normal"
                            value="{{old('title')}}"
                            name="title"
                        />
                        @error('title')
                        {{$message}}
                        @enderror
                    </label>
                </div>

                <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
                    <label class="flex flex-col min-w-40 flex-1">
                        <p class="text-white text-base font-medium leading-normal pb-2">Date Limite</p>
                        <input
                            placeholder="choisir la date limite"
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#233648] focus:border-none h-14 placeholder:text-[#92adc9] p-4 text-base font-normal leading-normal"
                            value="{{old('due_date')}}"
                            type="date"
                            name="due_date"
                        />
                        @error('due_date')
                        {{$message}}
                        @enderror
                    </label>
                </div>
                <div class="flex justify-stretch">
                    <div class="flex flex- gap-3 flex-wrap px-4 py-3 justify-start">
                        <a href="{{url()->previous()}}"
                           class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#233648] text-white text-sm font-bold leading-normal tracking-[0.015em]"
                        >
                            <span class="truncate">Annuler</span>
                        </a>
                        <button
                            type="submit"
                            class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-[#2b8dee] text-white text-sm font-bold leading-normal tracking-[0.015em]"
                        >
                            <span class="truncate">Ajouter</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
