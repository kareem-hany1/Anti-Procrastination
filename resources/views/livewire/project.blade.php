<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    "primary": "#4A90E2",
                    "background-light": "#F4F7FA",
                    "background-dark": "#101922",
                    "card-light": "#FFFFFF",
                    "card-dark": "#1a2632",
                    "text-light": "#333333",
                    "text-dark": "#FFFFFF",
                    "text-muted-light": "#888888",
                    "text-muted-dark": "#92adc9",
                    "border-light": "#EAEAEA",
                    "border-dark": "#233648",
                    "accent": "#50E3C2",
                },
                fontFamily: {
                    "display": ["Inter", "sans-serif"]
                },
                borderRadius: {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
                },
            },
        },
    }
</script>
<div class="bg-background-dark font-display">
    <div class="flex h-screen w-full px-10 lg:px-40 flex justify-center py-5 w-full ">
        <main class="flex-1 flex flex-col h-full overflow-y-auto">
            <header class="flex flex-wrap items-center justify-between gap-4 p-6 border-b border-border-dark">
                <div class="flex flex-col gap-1">
                    <h1 class="text-text-dark text-2xl font-bold leading-tight tracking-[-0.02em]">Project Personnel</h1>
                    <p class="text-text-muted-dark text-sm font-normal leading-normal">Liste de tes projets.</p>
                </div>
                <div class="flex items-center gap-2">
                    <button class="flex h-9 cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg bg-border-dark px-3 text-sm font-medium text-text-dark hover:bg-opacity-80">
                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span>Filter</span>
                    </button>
                    <button class="flex h-9 cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg bg-border-dark px-3 text-sm font-medium text-text-dark hover:bg-opacity-80">
                        <svg width="15px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21 6H19M21 12H16M21 18H16M7 20V13.5612C7 13.3532 7 13.2492 6.97958 13.1497C6.96147 13.0615 6.93151 12.9761 6.89052 12.8958C6.84431 12.8054 6.77934 12.7242 6.64939 12.5617L3.35061 8.43826C3.22066 8.27583 3.15569 8.19461 3.10948 8.10417C3.06849 8.02393 3.03853 7.93852 3.02042 7.85026C3 7.75078 3 7.64677 3 7.43875V5.6C3 5.03995 3 4.75992 3.10899 4.54601C3.20487 4.35785 3.35785 4.20487 3.54601 4.10899C3.75992 4 4.03995 4 4.6 4H13.4C13.9601 4 14.2401 4 14.454 4.10899C14.6422 4.20487 14.7951 4.35785 14.891 4.54601C15 4.75992 15 5.03995 15 5.6V7.43875C15 7.64677 15 7.75078 14.9796 7.85026C14.9615 7.93852 14.9315 8.02393 14.8905 8.10417C14.8443 8.19461 14.7793 8.27583 14.6494 8.43826L11.3506 12.5617C11.2207 12.7242 11.1557 12.8054 11.1095 12.8958C11.0685 12.9761 11.0385 13.0615 11.0204 13.1497C11 13.2492 11 13.3532 11 13.5612V17L7 20Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                        <span>Sort</span>
                    </button>
                </div>
            </header>
            <div class="flex-1 p-6">
                <div class="overflow-hidden rounded-lg border border-border-dark bg-card-dark">
                    <table class="w-full text-left text-sm">
                        <thead class="bg-background-dark text-xs uppercase text-text-muted-dark">
                        <tr>
                            <th class="w-12 p-4"></th>
                            <th class="px-6 py-3">Projet</th>
                            <th class="px-6 py-3">Taches</th>
                            <th class="px-6 py-3">Progression</th>
                            <th class="px-6 py-3">Date Limite</th>
                            <th class="px-6 py-3">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="border-b border-border-dark hover:bg-white/5">
                            <td class="p-4">
                                <input class="form-checkbox h-4 w-4 rounded border-gray-600 bg-transparent text-primary focus:ring-primary focus:ring-2" type="checkbox"/>
                            </td>
                            <td class="px-6 py-4 font-medium text-text-dark">Develop landing page hero section</td>
                            <td class="px-6 py-4 text-white ">12</td>
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-full  rounded-full h-2 bg-gray-700">
                                        <div class="bg-primary h-2 rounded-full" style="width: 19%"></div>
                                    </div>
                                    <span class="text-xs font-medium  text-text-muted-dark">75%</span>
                                </div>
                            </td>

                            <td class="px-6 py-4 font-medium text-text-dark">Octobre 30405</td>
                            </td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center rounded-full bg-orange-100 dark:bg-orange-900/50 px-2.5 py-0.5 text-xs font-medium text-orange-800 dark:text-orange-300">En Cours</span>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</div>

