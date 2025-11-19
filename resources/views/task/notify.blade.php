<x-layout>

    <x-slot:title>Notifications</x-slot:title>
    <div class="layout-container flex h-full grow flex-col">
        <x-header/>
        <div class="px-40 flex flex-1 justify-center py-5 ">

            <div class="layout-content-container flex flex-col max-w-[960px]  ">
                <div class="flex flex-wrap justify-between gap-3 p-4 items-center ">
                    <p class="text-white tracking-light text-[32px] font-bold leading-tight min-w-72">Notifications</p>
                    @if($notifs->count() > 0)
                        <button onclick="confirmDeleteAll()" class="flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path>
                            </svg>
                            Tout supprimer ({{$notifs->total()}})
                        </button>
                    @endif
                </div>
                <h3 class="text-white text-lg font-bold leading-tight tracking-[-0.015em] px-4 pb-2 pt-4">Rappels</h3>


                @foreach($notifs as $notif)
                    <div class="flex items-center gap-4 bg-[#111a22] px-4 min-h-[72px] py-2 justify-between">
                        <div class="flex items-center gap-4">
                            <div class="text-white flex items-center justify-center rounded-lg bg-[#233648] shrink-0 size-12" data-icon="Bell" data-size="24px" data-weight="regular">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor" viewBox="0 0 256 256">
                                    <path
                                        d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                                    ></path>
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="text-white text-base font-medium leading-normal line-clamp-1">{{$notif->title}}</p>
                                <p class="text-[#92adc9] text-sm font-normal leading-normal line-clamp-2">{{$notif->body}}</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <p class="text-[#92adc9] text-sm font-normal leading-normal">Il y a {{$notif->created_at->diffForHumans()}}</p>
                            <form action="/notify/{{$notif->id}}/delete" method="post">
                                @csrf
                            <button  class="text-[#92adc9] hover:text-red-500 transition-colors p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path>
                                </svg>
                            </button>
                            </form>
                        </div>
                    </div>
                @endforeach
                @if($notifs->total() == 0)
                    <p class="text-white mt-5">Aucune notification pour le moment</p>
                @endif
            </div>

        </div>

    </div>
    {{$notifs->links()}}

    <!-- Popup de confirmation -->
    <div id="deleteAllModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-[#111a22] rounded-lg p-6 max-w-md w-full mx-4">
            <h3 class="text-white text-xl font-bold mb-4">Confirmer la suppression</h3>
            <p class="text-[#92adc9] mb-6">Êtes-vous sûr de vouloir supprimer toutes les notifications ? Cette action est irréversible.</p>
            <div class="flex gap-3 justify-end">
                <button onclick="closeDeleteAllModal()" class="px-4 py-2 bg-[#233648] text-white rounded-lg hover:bg-[#2d4458] transition-colors">
                    Annuler
                </button>
                <form action="/notify/deleteAll" method="post">
                    @csrf
                    <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors">
                        Supprimer tout
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function confirmDeleteAll() {
            document.getElementById('deleteAllModal').classList.remove('hidden');
        }

        function closeDeleteAllModal() {
            document.getElementById('deleteAllModal').classList.add('hidden');
        }

        // Fermer le modal en cliquant en dehors
        document.getElementById('deleteAllModal')?.addEventListener('click', function(e) {
            if (e.target === this) {
                closeDeleteAllModal();
            }
        });
    </script>

</x-layout>
