<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#233648] px-10 py-3">
    <div class="flex items-center gap-4 text-white">
        <div class="size-4">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 6H42L36 24L42 42H6L12 24L6 6Z" fill="currentColor"></path></svg>
        </div>
        <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">Corvey</h2>
    </div>
    <div class="flex flex-1 justify-end gap-2">
        <x-button

            class="mr-5"
        >
            <div class="text-white" data-icon="Bell" data-size="20px" data-weight="regular">
                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                        d="M221.8,175.94C216.25,166.38,208,139.33,208,104a80,80,0,1,0-160,0c0,35.34-8.26,62.38-13.81,71.94A16,16,0,0,0,48,200H88.81a40,40,0,0,0,78.38,0H208a16,16,0,0,0,13.8-24.06ZM128,216a24,24,0,0,1-22.62-16h45.24A24,24,0,0,1,128,216ZM48,184c7.7-13.24,16-43.92,16-80a64,64,0,1,1,128,0c0,36.05,8.28,66.73,16,80Z"
                    ></path>
                </svg>
            </div>
        </x-button>
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
               Incription
            </x-button>
        @endguest
        @auth
            <form action="/logout" method="post">
                @csrf
                <x-button
                    type="button"
                    href="/"
                    class="bg-red-500"
                >
                    Deconnexion
                </x-button>
            </form>

        @endauth
    </div>
</header>
