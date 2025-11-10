
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <div class="flex flex-wrap justify-between gap-3 p-4">
                    <p class="text-white tracking-light text-[32px] font-bold leading-tight min-w-72">Mes Taches</p>
                    <a href="/task/create"
                       class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 px-4 bg-[#233648] text-white text-sm font-medium leading-normal"
                    >
                        <span class="truncate">Nouvelle  Tache</span>
                    </a>
                </div>
{{--                @if($success)--}}
{{--                    <p class="px-5 py-3 bg-green-500 rounded-md text-light">{{$success}}</p>--}}
{{--                @endif--}}
{{--                @if(session('success'))--}}
{{--                    <p class="px-5 py-3 bg-green-500 rounded-md text-light">{{session('success')}}</p>--}}
{{--                @endif--}}

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
                <div class="px-4 py-3 @container">
                    <div class="flex max-h-[55vh] overflow-y-scroll rounded-lg border border-[#324d67] bg-[#111a22] scrollbar-thin scrollbar-thumb-[#2b8dee]/60 scrollbar-track-[#192633] hover:scrollbar-thumb-[#2b8dee]/80     custom-scrollbar">
                        <table>
                            <thead>
                            <tr class="bg-[#192633]">
                                <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-120 px-4 py-3 text-left text-white w-[400px] text-sm font-medium leading-normal">Tache</th>
                                <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-240 px-4 py-3 text-left text-white w-60 text-sm font-medium leading-normal">Status</th>
                                <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-360 px-4 py-3 text-left text-white w-[400px] text-sm font-medium leading-normal">Date Limite</th>
                                <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 px-4 py-3 text-left text-white w-60 text-sm font-medium leading-normal">Priorité</th>
                                <th class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 px-4 py-3 text-left text-white w-60 text-sm font-medium leading-normal">Rappel</th>
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
                                               ]
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
                                    <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-240 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                        <x-status
                                            :color="$colorCode[$task->status]"
                                            wire:click="status({{$task}})"
                                        >

                                            {{$task->status}}
                                        </x-status>
                                    </td>
                                    <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-360 h-[72px] {{$task->due_date == now()->toDateString()?'text-red-500':''}} px-4 py-2 w-[400px] text-[#92adc9] text-sm font-normal leading-normal">
                                        {{$task->due_date}}
                                    </td>
                                    <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-480 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                                        <x-status
                                            :color="$priorityCode[$task->priority]"
                                            class="text-yello-500"
                                        >
                                            {{$task->priority}}
                                        </x-status>
                                    </td>
                                    <td class="table-14759d78-e315-4e2e-8b8d-9474bae781df-column-600 -z-1 h-[72px] px-2 py-5 w-60 text-[#92adc9] text-sm font-bold leading-normal tracking-[0.015em] flex justify-evenly relative">
                                        <div wire:key="task-menu-{{ $task->id }}"  x-init="$watch('open', value => { if (!value) $refs.menu?.classList.remove('active'); })"  x-data="{ open: false }" class="relative ">
                                            <x-status   @click="open = !open" class="p-2 rounded-full hover:bg-[#1a2b3b] transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0 014 0z" />
                                                </svg>
                                            </x-status>

                                            <div
                                                x-show="open"
                                                @click.away="open = false"
                                                class="fixed bg-[#1a2b3b] border border-[#324d67] rounded-lg shadow-lg z-[9999] w-32"
                                                x-transition
                                                x-cloak
                                                x-ref="menu"
                                                x-on:click="open = false"
                                                x-bind:style="'top:' + ($el.previousElementSibling.getBoundingClientRect().bottom + window.scrollY) + 'px; left:' + ($el.previousElementSibling.getBoundingClientRect().right - 130) + 'px;'"
                                            >
                                                <a href="/task/{{$task->id}}/edit" class="w-full text-left px-4 py-2 text-sm text-white hover:bg-[#22364a] flex items-center gap-2">
                                                    Modifier
                                                </a>
                                                <button  wire:click="destroy({{$task}})" class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-[#22364a] flex items-center gap-2">
                                                    Supprimer
                                                </button>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
