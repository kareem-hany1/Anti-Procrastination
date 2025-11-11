<x-layout>
    <x-slot:title>HOME</x-slot:title>
    <div class="layout-container flex h-full grow flex-col">
        <x-header/>
        <div class="min-h-screen flex items-center justify-center px-4 py-20 relative overflow-hidden ">

            <!-- Floating shapes background -->
            <div class="absolute inset-0 overflow-hidden pointer-events-none">
                <div class="absolute top-20 left-10 w-20 h-20 bg-white opacity-10 rounded-full animate-bounce"></div>
                <div class="absolute bottom-32 right-20 w-32 h-32 bg-white opacity-10 rounded-full animate-pulse"></div>
                <div class="absolute top-1/2 right-10 w-16 h-16 bg-white opacity-10 rounded-full animate-ping"></div>
                <div class="absolute bottom-20 left-20 w-24 h-24 bg-white opacity-10 rounded-full animate-bounce-slow"></div>
            </div>

            <div class="max-w-5xl mx-auto text-center relative z-10">

                <!-- Badge -->
                <div class="inline-block mb-8 animate-fade-in">
                <span class="inline-flex items-center bg-white bg-opacity-20 backdrop-blur-md px-6 py-2 rounded-full text-white text-sm font-medium border border-white border-opacity-30">
                    ⚡ Simple, Rapide, Efficace
                </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-5xl md:text-7xl font-extrabold text-white mb-6 leading-tight animate-fade-in-up">
                    Arrêtez de procrastiner.
                    <br>
                    <span class="bg-gradient-to-r from-pink-300 to-purple-200 bg-clip-text text-transparent">
                    Commencez à réaliser.
                </span>
                </h1>

                <!-- Subtitle -->
                <p class="text-xl md:text-2xl text-purple-100 mb-12 max-w-3xl mx-auto leading-relaxed animate-fade-in-up">
                    Créez une tâche, recevez un rappel par email quand la deadline approche. C'est tout ce dont vous avez besoin pour rester productif.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16 animate-fade-in-up">
                    <a href="/login" class="bg-blue-200 text-gray-900 px-8 py-4 rounded-xl font-bold text-lg shadow-2xl hover:shadow-purple-500 hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 w-full sm:w-auto">
                        Commencer  →
                    </a>
                </div>

                <!-- Features Grid -->
                <div class="grid md:grid-cols-3 gap-8 mt-20 animate-fade-in-up">

                    <!-- Feature 1 -->
                    <div class="bg-white bg-opacity-10 backdrop-blur-md p-8 rounded-2xl border border-white border-opacity-20 hover:bg-opacity-15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="text-4xl mb-4">✅</div>
                        <h3 class="text-xl font-bold text-white mb-3">Créez vos tâches</h3>
                        <p class="text-purple-100">Ajoutez simplement une tâche avec une date limite. Pas de complexité inutile.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white bg-opacity-10 backdrop-blur-md p-8 rounded-2xl border border-white border-opacity-20 hover:bg-opacity-15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="text-4xl mb-4">📧</div>
                        <h3 class="text-xl font-bold text-white mb-3">Recevez des rappels</h3>
                        <p class="text-purple-100">Un email automatique vous alerte quand votre deadline approche.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white bg-opacity-10 backdrop-blur-md p-8 rounded-2xl border border-white border-opacity-20 hover:bg-opacity-15 transition-all duration-300 transform hover:-translate-y-2">
                        <div class="text-4xl mb-4">🎯</div>
                        <h3 class="text-xl font-bold text-white mb-3">Restez focalisé</h3>
                        <p class="text-purple-100">Concentrez-vous sur l'essentiel : faire le travail, pas gérer un outil complexe.</p>
                    </div>

                </div>

            </div>
        </div>
        <footer class="text-center text-slate-200">Made with ❤️ by <a class="text-blue-400" href="https://github.com/BranGitfox">Brandon Fidelin Ravomanana</a></footer>
    </div>
</x-layout>
