<div class="bg-background-dark font-display">
    <div class="flex h-screen w-full px-4 md:px-10 lg:px-40 flex justify-center py-5 w-full">
        <main class="flex-1 flex flex-col h-full overflow-y-auto">
            <header class="flex flex-wrap items-center justify-between gap-4 p-4 md:p-6 border-b border-border-dark">
                <div class="flex flex-col gap-1">
                    <h1 class="text-text-dark text-xl md:text-2xl font-bold leading-tight tracking-[-0.02em]">Projet Personnel</h1>
                    <p class="text-text-muted-dark text-sm font-normal leading-normal">Liste de tes projets.</p>
                </div>
                <div class="flex flex-wrap items-center gap-2 w-full sm:w-auto">
                    <button wire:click="changeDateFilter" class="flex h-9 cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg bg-border-dark px-3 text-xs md:text-sm font-medium text-text-dark hover:bg-opacity-80 flex-1 sm:flex-none">
                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span class="hidden sm:inline">Date limite</span>
                        <span class="sm:hidden">Limite</span>
                        @if($date_filter == 'asc')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        @endif

                        @if($date_filter == 'desc')
                            <svg class="rotate-180 " xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        @endif
                    </button>
                    <button wire:click="changeDateCreation" class="flex h-9 cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg bg-border-dark px-3 text-xs md:text-sm font-medium text-text-dark hover:bg-opacity-80 flex-1 sm:flex-none">
                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span class="hidden sm:inline">Date de creation</span>
                        <span class="sm:hidden">Création</span>
                        @if($date_creation == 'asc')
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        @endif

                        @if($date_creation == 'desc')
                            <svg class="rotate-180 " xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                        @endif
                    </button>
                    <x-button type="a"  href="/projects/creates"
                              class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg py-[18px] h-8 px-4 bg-[#233648] text-white text-xs md:text-sm font-medium leading-normal w-full sm:w-auto"
                    >
                        <span class="truncate"><svg class="inline mr-2"  height="15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 12H20M12 4V20" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>Nouveau  Projet</span>
                    </x-button>
                </div>
            </header>
            <div class="flex-1 p-4 md:p-6">
                <!-- Vue Desktop (Tableau) -->
                <div class="hidden md:block overflow-hidden rounded-lg border border-border-dark bg-card-dark mb-4">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-background-dark text-xs uppercase text-text-muted-dark">
                        <tr>
                            <th class="w-12 p-4"></th>
                            <th class="px-6 py-3">Projet</th>
                            <th class="px-6 py-3">Taches</th>
                            <th class="px-6 py-3">Progression</th>
                            <th class="px-6 py-3">Date Limite</th>
                            <th class="px-6 py-3">Status</th>
                            <th colspan="2" class="px-6 py-3">Actions</th>
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
                        @foreach($projects as $project)
                            <tr class="border-b border-border-dark hover:bg-white/5">
                                <td class="p-4">
                                    <input @checked($project->status == 'completed') wire:click="changeStatus({{$project}})"  class="form-checkbox h-4 w-4 rounded border-gray-600 bg-transparent text-primary focus:ring-primary focus:ring-2" type="checkbox"/>
                                </td>
                                @if($project->status=='completed')
                                    <td class="px-6 py-4 font-medium text-text-dark"><a href="project/{{$project->id}}" class="decoration-white  decoration hover:underline"><s>{{$project->title}}</s></a></td>
                                @else
                                    <td class="px-6 py-4 font-medium text-text-dark"><a href="project/{{$project->id}}" class="decoration-white  decoration hover:underline">{{$project->title}}</a></td>
                                @endif

                                <td class="px-6 py-4 text-white ">{{$project->steps->count()}}</td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-2">
                                        <div class="w-full  rounded-full h-2 bg-gray-700">
                                            <div class="bg-primary h-2 rounded-full" style="width: {{$project->taskDone * 100/($project->steps->count()==0?1:$project->steps->count())}}%"></div>
                                        </div>
                                        <span class="text-xs font-medium  text-text-muted-dark">{{$project->taskDone * 100/($project->steps->count()==0?1:$project->steps->count())}}%</span>
                                    </div>
                                </td>

                                <td class="px-6 py-4 font-medium {{$project->due_date->diffInDay(now()) <= 2?'text-red-500':'text-text-dark'}} ">{{$project->due_date->toDateString()}}</td>

                                <td  class="px- py-4">
                                    <button

                                        class="px-5 py-2 rounded-3xl bg-gray-700 text-{{$colorCode[$project->status]}}-500 cursor-default"
                                    >
                                        {{$statusName[$project->status]}}
                                    </button>
                                </td>

                                <td colspan="2"  class="px-6 py-4 flex justify-evenly">
                                    <x-button type="a" href="/project/{{$project->id}}/edit"><svg  class="w-6 cursor-pointer h-6 " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#9AA0A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#9AA0A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></x-button>
                                    <x-button > <svg style="color: #4a5568"  wire:click="destroy({{$project->id}})" class="w-7 cursor-pointer h-7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></x-button>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Vue Mobile (Cartes) -->
                <div class="md:hidden space-y-4">
                    @foreach($projects as $project)
                        <div class="rounded-lg border border-border-dark bg-card-dark p-4">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex items-start gap-3 flex-1">
                                    <input @checked($project->status == 'completed') wire:click="changeStatus({{$project}})" class="form-checkbox h-4 w-4 mt-1 rounded border-gray-600 bg-transparent text-primary focus:ring-primary focus:ring-2" type="checkbox"/>
                                    <div class="flex-1">
                                        @if($project->status=='completed')
                                            <a href="project/{{$project->id}}" class="text-text-dark font-medium hover:underline block mb-2"><s>{{$project->title}}</s></a>
                                        @else
                                            <a href="project/{{$project->id}}" class="text-text-dark font-medium hover:underline block mb-2">{{$project->title}}</a>
                                        @endif
                                        <button class="px-3 py-1 text-xs rounded-3xl bg-gray-700 text-{{$colorCode[$project->status]}}-500 cursor-default">
                                            {{$statusName[$project->status]}}
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2 mb-3">
                                <div class="flex justify-between text-sm">
                                    <span class="text-text-muted-dark">Tâches:</span>
                                    <span class="text-white">{{$project->steps->count()}}</span>
                                </div>
                                <div>
                                    <div class="flex items-center gap-2">
                                        <div class="w-full rounded-full h-2 bg-gray-700">
                                            <div class="bg-primary h-2 rounded-full" style="width: {{$project->taskDone * 100/($project->steps->count()==0?1:$project->steps->count())}}%"></div>
                                        </div>
                                        <span class="text-xs font-medium text-text-muted-dark whitespace-nowrap">{{$project->taskDone * 100/($project->steps->count()==0?1:$project->steps->count())}}%</span>
                                    </div>
                                </div>
                                <div class="flex justify-between text-sm">
                                    <span class="text-text-muted-dark">Date limite:</span>
                                    <span class="{{$project->due_date->diffInDays(now()) <= 2?'text-red-500':'text-text-dark'}} font-medium">{{$project->due_date->toDateString()}}</span>
                                </div>
                            </div>

                            <div class="flex gap-2 pt-3 border-t border-border-dark">
                                <x-button type="a" href="/project/{{$project->id}}/edit" class="flex-1 flex items-center justify-center gap-2 px-4 py-2 bg-border-dark hover:bg-opacity-80 rounded-lg">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#9AA0A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#9AA0A8" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                    <span class="text-sm text-text-dark">Modifier</span>
                                </x-button>
                                <x-button wire:click="destroy({{$project->id}})" class="flex items-center justify-center px-4 py-2 bg-border-dark hover:bg-opacity-80 rounded-lg">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M4 6H20M16 6L15.7294 5.18807C15.4671 4.40125 15.3359 4.00784 15.0927 3.71698C14.8779 3.46013 14.6021 3.26132 14.2905 3.13878C13.9376 3 13.523 3 12.6936 3H11.3064C10.477 3 10.0624 3 9.70951 3.13878C9.39792 3.26132 9.12208 3.46013 8.90729 3.71698C8.66405 4.00784 8.53292 4.40125 8.27064 5.18807L8 6M18 6V16.2C18 17.8802 18 18.7202 17.673 19.362C17.3854 19.9265 16.9265 20.3854 16.362 20.673C15.7202 21 14.8802 21 13.2 21H10.8C9.11984 21 8.27976 21 7.63803 20.673C7.07354 20.3854 6.6146 19.9265 6.32698 19.362C6 18.7202 6 17.8802 6 16.2V6M14 10V17M10 10V17" stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                </x-button>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{$projects->links()}}
            </div>

        </main>
    </div>

</div>
