
<div class="px-10 lg:px-40 flex justify-center py-5 w-full ">
    <div class="layout-content-container flex flex-col w-full ">
        <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-white tracking-light text-[32px] font-bold leading-tight min-w-72">Mes Taches</p>
            <a href="/step/{{request()->route('project')}}/create"
               class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#233648] text-white text-sm font-medium leading-normal"
            >
                <span class="truncate"><svg class="inline mr-2"  height="15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>Nouvelle  Tache</span>
            </a>
        </div>
        <div class="px-4 py-3">
            <label class="flex flex-col min-w-40 h-12 w-full">
                <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                    <div
                        class="text-[#92adc9] flex border-none bg-[#233648] items-center justify-center pl-4 rounded-l-lg border-r-0"
                        data-icon="MagnifyingGlass"
                        data-size="24px"
                        data-weight="regular"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                            <path
                                d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                            ></path>
                        </svg>
                    </div>
                    <input
                        wire:model.live.debounce.300ms="search"
                        placeholder="rechercher taches"
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-white focus:outline-0 focus:ring-0 border-none bg-[#233648] focus:border-none h-full placeholder:text-[#92adc9] px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal"
                        type="text"
                    />
                </div>
            </label>
        </div>

        @php
            $filterLink = url()->current().'?filter=completed';
            $menus = ['all', 'todo', 'pending', 'completed'];
        @endphp
        <div class="pb-3">
            <div class="flex border-b border-[#324d67] px-4 gap-8">
                <button wire:click="filterMenu('{{$menus[0]}}')"  class="flex flex-col items-center justify-center {{$filter=='all'?'border-b-[3px] border-b-[#2b8dee] text-white':'text-[#92adc9]'}}   pb-[13px] pt-4" >
                    <p class="{{$filter=='all'?'text-white':'text-[#92adc9]'}} text-sm font-bold leading-normal tracking-[0.015em]">Toutes ({{$all}})</p>
                </button>
                <button wire:click="filterMenu('{{$menus[1]}}')"  class="flex flex-col items-center justify-center {{$filter=='todo'?'border-b-[3px] border-b-[#2b8dee] text-white':'text-[#92adc9]'}}   pb-[13px] pt-4" >
                    <p class="{{$filter=='todo'?'text-white':'text-[#92adc9]'}} text-sm font-bold leading-normal tracking-[0.015em]">A Faire ({{$todo}})</p>
                </button>
                <button wire:click="filterMenu('{{$menus[2]}}')"  class="flex flex-col items-center justify-center {{$filter=='pending'?'border-b-[3px] border-b-[#2b8dee] text-white':'text-[#92adc9]'}}   pb-[13px] pt-4" >
                    <p class="{{$filter=='pending'?'text-white':'text-[#92adc9]'}} text-sm font-bold leading-normal tracking-[0.015em]">En Cours ({{$pending}})</p>
                </button>
                <button wire:click="filterMenu('{{$menus[3]}}')" class="flex flex-col items-center justify-center {{$filter!=='completed'?'text-[#92adc9]':'border-b-[3px] border-b-[#2b8dee] text-white'}}  pb-[13px] pt-4">
                    <p  class=" {{$filter!=='completed'?'text-[#92adc9]':'text-white'}} text-sm font-bold leading-normal tracking-[0.015em]">Terminée ({{$completed}}) </p>
                </button>
            </div>
        </div>

        <div class="flex gap-3 p-3 flex-wrap pr-4">

            <button wire:click="dues_date" class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#233648] pl-4 pr-2">
                <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                <p class="text-white text-sm font-medium leading-normal">Date Limite</p>
                <div class="text-white" data-icon="CaretDown" data-size="20px" data-weight="regular">
                    @if($dues == 'asc')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    @endif

                    @if($dues == 'desc')
                        <svg class="rotate-180 xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    @endif
                </div>
            </button>
            <button wire:click="priorit"  class="flex h-8 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-[#233648] pl-4 pr-2">
                <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>

                <p class="text-white text-sm font-medium leading-normal">Priorité</p>
                <div class="text-white" data-icon="CaretDown" data-size="20px" data-weight="regular">
                    @if($priority == 'low')
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                            <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    @endif

                    @if($priority == 'high')
                        <svg class="rotate-180 xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                    @endif
                </div>
            </button>
        </div>
        <div class="px-4 py-3 w-full ">
            <div class="flex w-full mb-3  max-h-[55vh] overflow-y-scroll rounded-lg border border-[#324d67] bg-[#111a22] scrollbar-thin scrollbar-thumb-[#2b8dee]/60 scrollbar-track-[#192633] hover:scrollbar-thumb-[#2b8dee]/80     custom-scrollbar">
                <table>
                    <thead>
                    <tr class="bg-[#192633]">
                        <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-120 px-4 py-3 text-left text-white w-[400px] text-sm font-medium leading-normal">Tache</th>
                        <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-120 px-4 py-3 text-left text-white w-[400px] text-sm font-medium leading-normal">Description</th>
                        <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-240 px-4 py-3 text-left text-white w-60 text-sm font-medium leading-normal">Status</th>
                        <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-360 px-4 py-3 text-left text-white w-[400px] text-sm font-medium leading-normal">Date Limite</th>
                        <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 px-4 py-3 text-left text-white w-60 text-sm font-medium leading-normal">Priorité</th>
                        <th colspan="2" class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 px-4 py-3 text-left text-white w-60 text-sm font-medium leading-normal text-center">Rappel Email</th>
                        <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-600 px-4 py-3 text-left text-white w-60 text-[#92adc9] text-sm font-medium leading-normal"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $colorCode = [
                            'completed' => 'green',
                            'todo' => 'yellow',
                            'pending' => 'blue'
                            ];
                        $priorityCode = [
                                'high' => 'red',
                                'medium' => 'yellow',
                                'normal' => 'blue'
                                       ];

                         $priorityName = [
                                'high' => 'Haut',
                                'medium' => 'Moyen',
                                'normal' => 'Normal'
                                       ];
                         $statusName = [

                                'todo' => 'A Faire',
                                'pending' => 'En Cours',
                                'completed' => 'Terminé'
                                        ];



                    @endphp
                    @foreach($tasks as $task)
                        <tr class="border-t border-t-[#324d67]">
                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-120 h-[72px] px-4 py-2 w-[400px]   text-white text-sm font-normal leading-normal">

                                @if($task->status =='completed')
                                    <em><s>{{$task->title}}</s></em>
                                @else
                                    {{$task->title}}
                                @endif
                            </td>

                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal text-white leading-normal">
                                {{\Illuminate\Support\Str::limit($task->description, 100)}}


                            </td>
                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-240 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                <x-status
                                    :color="$colorCode[$task->status]"
                                    wire:click="status({{$task}})"
                                >

                                    {{$statusName[$task->status]}}
                                </x-status>
                            </td>
                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-360 h-[72px] {{\Illuminate\Support\Str::limit($task->due_date, 10, end:'') == now()->toDateString()?'text-red-500':''}} px-4 py-2 w-[400px] text-[#92adc9] text-sm font-normal leading-normal">
                                {{\Illuminate\Support\Str::limit($task->due_date, 10, end: '')}}
                            </td>
                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                <x-status
                                    :color="$priorityCode[$task->priority]"
                                    class="text-yello-500"
                                >
                                    {{$priorityName[$task->priority]}}
                                </x-status>
                            </td>

                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">

                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 h-[72px]  py-2 w-60 text-sm font-normal leading-normal">
                                <label  class="inline-flex items-center cursor-pointer relative">
                                    <!-- Checkbox cachée -->
                                    <input wire:click="remind({{$task}})" type="checkbox" class="sr-only peer" />

                                    <!-- Track -->
                                    <div class="w-11 h-6  rounded-full {{$task->remind==1?'bg-green-500':'bg-gray-300'}}   transition-colors"></div>

                                    <!-- Thumb -->
                                    <div class="absolute top-0.5 left-0.5 w-5 h-5 bg-white rounded-full shadow transform transition-transform {{$task->remind==1?'translate-x-5 ':''}} "></div>

                                    <!-- Label texte -->
                                    <span class="ml-3 text-sm text-gray-700 select-none">{{$task->remind?'OUI':'NON'}}</span>
                                </label>



                            </td>
                            </td>
                            <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-600 -z-1 h-[72px] px-2 py-5 w-60 text-[#92adc9] text-sm font-bold leading-normal tracking-[0.015em] flex justify-evenly relative">
                                <div wire:key="task-menu-{{ $task->id }}" x-data="{ open: @entangle('openMenus.'.$task->id).live }" class="relative ">
                                    <x-status   @click="open = !open" class="p-2 rounded-full hover:bg-[#1a2b3b] transition">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </x-status>

                                    <div
                                        wire:ignore.self x-show="open" @click.away="open = false"
                                        class="fixed bg-[#1a2b3b] border border-[#324d67] rounded-lg shadow-lg z-[9999] w-32"
                                        x-transition
                                        x-cloak
                                        x-ref="menu"
                                        x-on:click="open = false"
                                        x-bind:style="'top:' + ($el.previousElementSibling.getBoundingClientRect().bottom + window.scrollY) + 'px; left:' + ($el.previousElementSibling.getBoundingClientRect().right - 130) + 'px;'"
                                    >
                                        <a href="/step/{{$task->id}}/edit" class="w-full text-left px-4 py-2 text-sm text-white hover:bg-[#22364a] flex items-center gap-2">
                                            Modifier
                                        </a>
                                        <button  wire:click="destroy({{$task}})" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-[#22364a] flex items-center gap-2">
                                            Supprimer
                                        </button>
                                    </div>
                                </div>
                                {{--                                        <livewire:task-menu :task="$task" />--}}

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

            {{$tasks->links()}}

        </div>
    </div>
</div>
