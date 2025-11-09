<x-layout>
    <x-slot:title>HOME</x-slot:title>
    <div class="layout-container flex h-full grow flex-col">
        <x-header/>

        <div class="px-40 flex flex-1 justify-center py-5">
            <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                <div class="@container">
                    <div class="@[480px]:p-4">
                        <div
                            class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-lg items-center justify-center p-4"
                            style='background-image: linear-gradient(rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.4) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAI-aeH5vtRaZ-69GFae0R5nvsKXwdie4eG8J1jNtN77AlwtdsbNSJKOktJPhpV2Xv8JPpXnLwqlOhOgMhrRfEm1c6VzgCp7qmF3rvxB9ccM9ZT6K_gHo-pl-8botS9WA4W2u8lm0fUp63dqTLCUv665vkjyshwWipRCtiRnzEw79RX6rdl2SPc6TBnNNIFNTilGGcNz-PPwM8P19wgYLL8gxjidIgm9kC-k_N2PruOHUDFJFJ_DAEr10mdEXxJzJoT3waBYnVSeyZT");'
                        >
                            <div class="flex flex-col gap-2 text-center">
                                <h1
                                    class="text-white text-4xl font-black leading-tight tracking-[-0.033em] @[480px]:text-5xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em]"
                                >
                                    Organisez enfin votre travail et votre vie.
                                </h1>
                                <h2 class="text-white text-sm font-normal leading-normal @[480px]:text-base @[480px]:font-normal @[480px]:leading-normal">
                                    Restez concentré, organisé et serein avec TaskMaster. Le gestionnaire de tâches et la to-do list n°1 au monde.
                                </h2>
                            </div>
                            <button
                                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#2b8dee] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em]"
                            >
                                <span class="truncate">Commencer</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-10 px-4 py-10 @container">
                    <div class="flex flex-col gap-4">
                        <h1
                            class="text-white tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                        >
                            Des fonctionnalités qui vous donnent du pouvoir
                        </h1>
                        <p class="text-white text-base font-normal leading-normal max-w-[720px]">
                            TaskMaster regorge de fonctionnalités pour vous aider à gérer vos tâches, collaborer avec d'autres et suivre vos progrès.
                        </p>
                    </div>
                    <div class="grid grid-cols-[repeat(auto-fit,minmax(158px,1fr))] gap-3">
                        <div class="flex flex-col gap-3 pb-3">
                            <div
                                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC61-kKIBoRA4td01OUpj9bxNfRKRc-Ym26Tf9LkM4c8HN32mWpEZhgTwDjHLETvVpq4EyyJ8u4EPz3iWNEF0W8A-YqiBnwdf1UlTsEWBv1xoO2DTfJEfUokA8UjxnUOpGEu_G9Zr1Aa60rOv4zkb4eSuwjr5rS1x2PqHxnTU0wSuSrtLMRWFLJrzEmV8RGRdV7NnmCfEpR9xYB_M_sYC1GskaA4awhAsKUBI46U56Yr-l7FhRLe-8Uvc02IQKywWV9F33GGAUsBCy8");'
                            ></div>
                            <div>
                                <p class="text-white text-base font-medium leading-normal">Gestion des tâches</p>
                                <p class="text-[#92adc9] text-sm font-normal leading-normal">
                                    Créez des tâches, définissez des échéances et priorisez votre travail. Restez organisé et à jour dans vos listes.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 pb-3">
                            <div
                                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDc2SVx3Hqz5t0uL6zZwr8-7FwMtLIWtRkDyx0Ep98Y9h3QlZpJtWmOO81ER18cHIEuJcDdsk57Nn2_0hT1VqnR4yV3bLOvFptGrDjh9bSSAp42HcedYlDd1dEktToIJjikSmlOwZXRKTwS6vLjOW7i1FE5t_2gKmT3ozXPkqs_4t0YBp9OumeL3VMkw1zxPRUqhsOw2jfCPy-8Zj4vbPYlnbPAGXpCwmNDtbsKdls2vYZhWMW17eFLJ9-1KMfCAqHi4XIeL0CFn5zX");'
                            ></div>
                            <div>
                                <p class="text-white text-base font-medium leading-normal">Collaboration</p>
                                <p class="text-[#92adc9] text-sm font-normal leading-normal">
                                    Partagez vos tâches et projets avec votre équipe. Collaborez facilement et atteignez vos objectifs plus vite.
                                </p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-3 pb-3">
                            <div
                                class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-lg"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDokdrwKVVkV3tBiA98l1CIat8cwQ-nxFd1b4fnzJqUqFDyyUHjT0J9kKIYhFNC9aIxbpcl5-NQ1wPQ2qLCHh114UQ4tUkNUZygJyqu9XRlYv33LxGpfGd4KNshI4ybiEBO6DlJMLQVt5BJ9xU_bWrIdftPWQxrD2w7hDMScfvqFn-GvWHMknjTeQ1J0yKwZ2O09OEkh7VMgP4JIK229UkLh9Gf2UzpGJTo9Um-IWg6hIDgeSoyBznqQqgqzykmcP5As2HWuwonLSLF");'
                            ></div>
                            <div>
                                <p class="text-white text-base font-medium leading-normal">Suivi des progrès</p>
                                <p class="text-[#92adc9] text-sm font-normal leading-normal">
                                    Suivez vos progrès et identifiez les points à améliorer. Restez motivé et atteignez vos objectifs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="@container">
                    <div class="flex flex-col justify-end gap-6 px-4 py-10 @[480px]:gap-8 @[480px]:px-10 @[480px]:py-20">
                        <div class="flex flex-col gap-2 text-center">
                            <h1
                                class="text-white tracking-light text-[32px] font-bold leading-tight @[480px]:text-4xl @[480px]:font-black @[480px]:leading-tight @[480px]:tracking-[-0.033em] max-w-[720px]"
                            >
                                Prêt à commencer ?
                            </h1>
                            <p class="text-white text-base font-normal leading-normal max-w-[720px]">
                                Inscrivez-vous dès aujourd’hui sur TaskMaster et découvrez la puissance d’un travail bien organisé.
                            </p>
                        </div>
                        <div class="flex flex-1 justify-center">
                            <div class="flex justify-center">
                                <button
                                    class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 @[480px]:h-12 @[480px]:px-5 bg-[#2b8dee] text-white text-sm font-bold leading-normal tracking-[0.015em] @[480px]:text-base @[480px]:font-bold @[480px]:leading-normal @[480px]:tracking-[0.015em] grow"
                                >
                                    <span class="truncate">Commencer</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>
