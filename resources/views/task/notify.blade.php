<x-layout>

    <x-slot:title>Notifications</x-slot:title>
    <div class="layout-container flex h-full grow flex-col">
        <x-header/>
        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <div class="flex flex-wrap justify-between gap-3 p-4"><p class="text-white tracking-light text-[32px] font-bold leading-tight min-w-72">Notifications</p></div>
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
                        <div class="shrink-0"><p class="text-[#92adc9] text-sm font-normal leading-normal">Il y a {{$notif->created_at->diffForHumans()}}</p></div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
