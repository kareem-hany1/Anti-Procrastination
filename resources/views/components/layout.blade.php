<!doctype html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <link
        rel="stylesheet"
        as="style"
        onload="this.rel='stylesheet'"
        href="https://fonts.googleapis.com/css2?display=swap&amp;family=Inter%3Awght%40400%3B500%3B700%3B900&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900"
    />

    <title>{{$title}}</title>
    @livewireStyles
    <link rel="icon" type="image/x-icon" href="data:image/x-icon;base64," />

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>
<style>
    /* Styles custom pour scrollbar */
    .custom-scrollbar::-webkit-scrollbar {
        width: 8px; /* largeur de la scrollbar */
    }

    .custom-scrollbar::-webkit-scrollbar-track {
        background: #192633; /* couleur du track */
        border-radius: 6px;
    }

    .custom-scrollbar::-webkit-scrollbar-thumb {
        background-color: #2b8dee; /* couleur du pouce */
        border-radius: 6px;
        border: 2px solid #111a22; /* espace autour du pouce */
    }

    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
        background-color: #1f6fd4; /* couleur au hover */
    }
</style>
<body>
<div class="relative flex h-auto min-h-screen w-full flex-col bg-[#111a22] dark group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
    {{$slot}}
</div>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
</body>
</html>
