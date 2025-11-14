<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#233648] px-4 sm:px-6 md:px-10 py-3">
    <a href="/" class="flex items-center gap-2 sm:gap-4 text-white">
        <div class="size-6 sm:size-8">
            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <!-- Dégradé pour le fond -->
                <defs>
                    <linearGradient id="bgGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#764ba2;stop-opacity:1" />
                    </linearGradient>

                    <linearGradient id="checkGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#ffffff;stop-opacity:1" />
                        <stop offset="100%" style="stop-color:#f0f0f0;stop-opacity:0.9" />
                    </linearGradient>

                    <!-- Ombre portée -->
                    <filter id="shadow" x="-50%" y="-50%" width="200%" height="200%">
                        <feDropShadow dx="0" dy="4" stdDeviation="8" flood-opacity="0.3"/>
                    </filter>
                </defs>

                <!-- Cercle de fond avec dégradé -->
                <circle cx="100" cy="100" r="90" fill="url(#bgGradient)" filter="url(#shadow)"/>

                <!-- Horloge stylisée (cercle intérieur) -->
                <circle cx="100" cy="100" r="70" fill="none" stroke="white" stroke-width="4" opacity="0.3"/>

                <!-- Aiguille courte (heure) - pointant vers 10h -->
                <line x1="100" y1="100" x2="100" y2="60" stroke="white" stroke-width="6" stroke-linecap="round" opacity="0.5" transform="rotate(-60 100 100)"/>

                <!-- Aiguille longue (minute) - pointant vers 2 -->
                <line x1="100" y1="100" x2="100" y2="45" stroke="white" stroke-width="4" stroke-linecap="round" opacity="0.7" transform="rotate(60 100 100)"/>

                <!-- Check mark (coche) superposé - symbole principal -->
                <path d="M 65 100 L 90 125 L 135 70"
                      fill="none"
                      stroke="url(#checkGradient)"
                      stroke-width="12"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      filter="url(#shadow)"/>

                <!-- Point central -->
                <circle cx="100" cy="100" r="5" fill="white"/>

                <!-- Éclat lumineux (highlight) -->
                <circle cx="75" cy="75" r="15" fill="white" opacity="0.2"/>
            </svg>
        </div>
        <h2 class="font-bold uppercase text-xs sm:text-sm md:text-md tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-slate-200 via-slate-400 to-slate-300 drop-shadow-[0_2px_6px_rgba(0,0,0,0.6)]">
            JustDo
        </h2>
    </a>
    <div class="flex flex-1 justify-end gap-1 sm:gap-2 items-center">
        @auth
            <x-button type="a" href="/projects" >
                <svg width="20" height="20" fill="#ffff" viewBox="0 0 32 32" id="icon" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <defs> <style> .cls-1 { fill: none; } </style> </defs> <title>roadmap</title> <path d="M12,30H4a2.0023,2.0023,0,0,1-2-2V24a2.0023,2.0023,0,0,1,2-2h8a2.0023,2.0023,0,0,1,2,2v4A2.0023,2.0023,0,0,1,12,30ZM4,24v4h8V24Z"></path> <path d="M28,20H12a2.0023,2.0023,0,0,1-2-2V14a2.0023,2.0023,0,0,1,2-2H28a2.0023,2.0023,0,0,1,2,2v4A2.0023,2.0023,0,0,1,28,20ZM12,14v4H28V14Z"></path> <path d="M16,10H4A2.0023,2.0023,0,0,1,2,8V4A2.0023,2.0023,0,0,1,4,2H16a2.0023,2.0023,0,0,1,2,2V8A2.0023,2.0023,0,0,1,16,10ZM4,4V8H16V4Z"></path> <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" class="cls-1" width="32" height="32"></rect> </g></svg>
            </x-button>

            <x-button
                type="a"
                href="/tasks"
                class="relative"
            >
                <div class="text-white" data-icon="Bell" data-size="20px" data-weight="regular">
                    <svg fill="white" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-task-list w-[16px] h-[16px] sm:w-[20px] sm:h-[20px] text-white"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6zm0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4H6zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2zm-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2zm0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2zm-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414l.707.707z"></path></g></svg>
                </div>
            </x-button>
            <x-button
                type="a"
                href="/notify"
                class="mr-2 sm:mr-5 relative"
            >
                @if(\Illuminate\Support\Facades\Auth::user()->hasnotify?->status==1)
                    <span class="w-2 h-2 top-2 right-2 rounded-full bg-red-500 absolute"></span>
                @endif

                <div class="text-white" data-icon="Bell" data-size="20px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" class="sm:w-[20px] sm:h-[20px]" fill="currentColor" viewBox="0 0 256 256">
                        <path
                            d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                        ></path>
                    </svg>
                </div>
            </x-button>

            <!-- Nom utilisateur avec popup -->
            <div class="relative" x-data="{ open: false }">
                <button
                    @click="open = !open"
                    class="flex items-center gap-1 sm:gap-2 px-2 sm:px-4 py-2 rounded-lg hover:bg-gray-900 transition-colors"
                >
                    <span class="font-medium text-gray-300 text-xs sm:text-sm md:text-base truncate max-w-[80px] sm:max-w-[120px] md:max-w-none">{{ \Illuminate\Support\Facades\Auth::user()->fullname }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4 text-gray-500 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Popup -->
                <div
                    x-show="open"
                    @click.away="open = false"
                    x-transition
                    class="absolute right-0 mt-2 w-40 sm:w-48 bg-gray-700 rounded-lg shadow-lg py-1 z-50"
                >
                    <form action="/logout" method="post">
                        @csrf
                        <button
                            type="submit"
                            class="w-full text-left px-3 sm:px-4 py-2 text-red-600 transition-colors flex items-center gap-2 text-xs sm:text-sm"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 sm:h-4 sm:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Déconnexion
                        </button>
                    </form>
                </div>
            </div>
        @endauth

        @guest
            <x-button
                type="a"
                href="/login"
                class="text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2"
            >
                <span class="hidden sm:inline">Connexion</span>
                <span class="sm:hidden">Login</span>
            </x-button>
            <x-button
                href="/register"
                type="a"
                class="bg-blue-800 text-xs sm:text-sm px-2 sm:px-4 py-1.5 sm:py-2"
            >
                <span class="hidden sm:inline">Inscription</span>
                <span class="sm:hidden">Sign up</span>
            </x-button>
        @endguest
    </div>
</header>
