<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#233648] px-10 py-3">
    <a href="/" class="flex items-center gap-4 text-white">
        <div class="size-8">
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
{{--            <svg class="text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C17.1086 2.75 21.25 6.89137 21.25 12C21.25 12.4142 21.5858 12.75 22 12.75C22.4142 12.75 22.75 12.4142 22.75 12C22.75 6.06294 17.9371 1.25 12 1.25C11.5858 1.25 11.25 1.58579 11.25 2C11.25 2.41421 11.5858 2.75 12 2.75Z" fill="white"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.25C12.4142 8.25 12.75 8.58579 12.75 9V12.25H16C16.4142 12.25 16.75 12.5858 16.75 13C16.75 13.4142 16.4142 13.75 16 13.75H12C11.5858 13.75 11.25 13.4142 11.25 13V9C11.25 8.58579 11.5858 8.25 12 8.25Z" fill="gray"></path> <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M9.09958 2.39808C9.24874 2.7845 9.05641 3.21868 8.66999 3.36785C8.52855 3.42245 8.38879 3.48042 8.2508 3.54168C7.87221 3.70975 7.42906 3.5391 7.261 3.16051C7.09293 2.78193 7.26358 2.33878 7.64217 2.17071C7.80267 2.09946 7.96526 2.03201 8.12981 1.96849C8.51623 1.81932 8.95041 2.01166 9.09958 2.39808ZM5.6477 4.2408C5.93337 4.54075 5.92178 5.01549 5.62183 5.30115C5.51216 5.40559 5.40505 5.5127 5.30061 5.62237C5.01495 5.92232 4.54021 5.93391 4.24026 5.64824C3.94031 5.36258 3.92873 4.88785 4.21439 4.5879C4.33566 4.46056 4.46002 4.3362 4.58736 4.21493C4.88731 3.92927 5.36204 3.94085 5.6477 4.2408ZM3.15997 7.26154C3.53856 7.42961 3.70921 7.87275 3.54114 8.25134C3.47988 8.38933 3.42191 8.52909 3.36731 8.67053C3.21814 9.05695 2.78396 9.24928 2.39754 9.10012C2.01112 8.95095 1.81878 8.51677 1.96795 8.13035C2.03147 7.9658 2.09892 7.80321 2.17017 7.64271C2.33824 7.26412 2.78139 7.09347 3.15997 7.26154ZM2.02109 11.0046C2.43518 11.0146 2.76276 11.3584 2.75275 11.7725C2.75092 11.8483 2.75 11.9243 2.75 12.0005C2.75 12.0768 2.75092 12.1528 2.75275 12.2286C2.76276 12.6427 2.43518 12.9865 2.02109 12.9965C1.60699 13.0065 1.26319 12.6789 1.25319 12.2648C1.25107 12.177 1.25 12.0889 1.25 12.0005C1.25 11.9122 1.25107 11.8241 1.25319 11.7363C1.26319 11.3222 1.60699 10.9946 2.02109 11.0046ZM21.6025 14.901C21.9889 15.0501 22.1812 15.4843 22.032 15.8707C21.9685 16.0353 21.9011 16.1979 21.8298 16.3584C21.6618 16.737 21.2186 16.9076 20.84 16.7395C20.4614 16.5715 20.2908 16.1283 20.4589 15.7497C20.5201 15.6117 20.5781 15.472 20.6327 15.3306C20.7819 14.9441 21.216 14.7518 21.6025 14.901ZM2.39754 14.901C2.78396 14.7518 3.21814 14.9441 3.36731 15.3306C3.42191 15.472 3.47988 15.6117 3.54114 15.7497C3.70921 16.1283 3.53856 16.5715 3.15997 16.7395C2.78139 16.9076 2.33824 16.737 2.17017 16.3584C2.09892 16.1979 2.03147 16.0353 1.96795 15.8707C1.81878 15.4843 2.01112 15.0501 2.39754 14.901ZM19.7597 18.3528C20.0597 18.6385 20.0713 19.1132 19.7856 19.4132C19.6643 19.5405 19.54 19.6649 19.4126 19.7861C19.1127 20.0718 18.638 20.0602 18.3523 19.7603C18.0666 19.4603 18.0782 18.9856 18.3782 18.6999C18.4878 18.5955 18.5949 18.4884 18.6994 18.3787C18.9851 18.0788 19.4598 18.0672 19.7597 18.3528ZM4.24026 18.3528C4.54021 18.0672 5.01495 18.0788 5.30061 18.3787C5.40506 18.4884 5.51216 18.5955 5.62183 18.6999C5.92178 18.9856 5.93337 19.4603 5.6477 19.7603C5.36204 20.0602 4.88731 20.0718 4.58736 19.7861C4.46003 19.6649 4.33566 19.5405 4.21439 19.4132C3.92873 19.1132 3.94031 18.6385 4.24026 18.3528ZM7.261 20.8406C7.42907 20.462 7.87221 20.2913 8.2508 20.4594C8.38879 20.5207 8.52855 20.5786 8.66999 20.6332C9.05641 20.7824 9.24874 21.2166 9.09958 21.603C8.95041 21.9894 8.51623 22.1818 8.12981 22.0326C7.96526 21.9691 7.80267 21.9016 7.64217 21.8304C7.26358 21.6623 7.09293 21.2192 7.261 20.8406ZM16.739 20.8406C16.9071 21.2192 16.7364 21.6623 16.3578 21.8304C16.1973 21.9016 16.0347 21.9691 15.8702 22.0326C15.4838 22.1818 15.0496 21.9894 14.9004 21.603C14.7513 21.2166 14.9436 20.7824 15.33 20.6332C15.4714 20.5786 15.6112 20.5207 15.7492 20.4594C16.1278 20.2913 16.5709 20.462 16.739 20.8406ZM11.004 21.9795C11.0141 21.5654 11.3579 21.2378 11.7719 21.2478C11.8477 21.2496 11.9237 21.2505 12 21.2505C12.0763 21.2505 12.1523 21.2496 12.2281 21.2478C12.6421 21.2378 12.9859 21.5654 12.996 21.9795C13.006 22.3935 12.6784 22.7373 12.2643 22.7474C12.1764 22.7495 12.0883 22.7505 12 22.7505C11.9117 22.7505 11.8236 22.7495 11.7357 22.7474C11.3216 22.7373 10.994 22.3935 11.004 21.9795Z" fill="white"></path> </g></svg>--}}
        </div>
        <h2 class="font-bold uppercase text-md tracking-widest text-transparent bg-clip-text bg-gradient-to-r from-slate-200 via-slate-400 to-slate-300 drop-shadow-[0_2px_6px_rgba(0,0,0,0.6)]">
            JustDo
        </h2>
    </a>
    <div class="flex flex-1 justify-end gap-2 items-center">
        @auth
            <x-button
                type="a"
                href="/tasks"
                class=" relative"
            >

                <div class="text-white" data-icon="Bell" data-size="20px" data-weight="regular">
                    <svg  fill="white" viewBox="-2 -2 24 24" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMinYMin" class="jam jam-task-list w-[20px] h-[20px] text-white"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M6 0h8a6 6 0 0 1 6 6v8a6 6 0 0 1-6 6H6a6 6 0 0 1-6-6V6a6 6 0 0 1 6-6zm0 2a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V6a4 4 0 0 0-4-4H6zm6 7h3a1 1 0 0 1 0 2h-3a1 1 0 0 1 0-2zm-2 4h5a1 1 0 0 1 0 2h-5a1 1 0 0 1 0-2zm0-8h5a1 1 0 0 1 0 2h-5a1 1 0 1 1 0-2zm-4.172 5.243L7.95 8.12a1 1 0 1 1 1.414 1.415l-2.828 2.828a1 1 0 0 1-1.415 0L3.707 10.95a1 1 0 0 1 1.414-1.414l.707.707z"></path></g></svg>
                </div>
            </x-button>
            <x-button
                type="a"
                href="/notify"
                class="mr-5 relative"
            >
                @if(\Illuminate\Support\Facades\Auth::user()->hasnotify->status==1)
                    <span class="w-2 h-2 top-2 right-2 rounded-full bg-red-500 absolute"></span>
                @endif

                <div class="text-white" data-icon="Bell" data-size="20px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
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
                    class="flex items-center gap-2 px-4 py-2 rounded-lg hover:bg-gray-900 transition-colors"
                >
                    <span class="font-medium text-gray-300">{{ \Illuminate\Support\Facades\Auth::user()->fullname }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>

                <!-- Popup -->
                <div
                    x-show="open"
                    @click.away="open = false"
                    x-transition
                    class="absolute right-0 mt-2 w-48 bg-gray-700 rounded-lg shadow-lg  py-1 z-50"
                >
                    <form action="/logout" method="post">
                        @csrf
                        <button
                            type="submit"
                            class="w-full text-left px-4 py-2 text-red-600  transition-colors flex items-center gap-2"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                class=""
            >
                Connexion
            </x-button>
            <x-button
                href="/register"
                type="a"
                class="bg-blue-800"
            >
                Inscription
            </x-button>
        @endguest
    </div>
</header>
