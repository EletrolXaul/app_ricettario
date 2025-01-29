<!DOCTYPE html>
<html lang="it" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ricette Online')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/heroicons@2.0.18/dist/24/outline.min.css">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        dark: {
                            100: '#1a1b1e',
                            200: '#2c2e33',
                            300: '#3d4047'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .dark .dark\:custom-bg { background-color: #1a1b1e; }
        .dark .dark\:custom-text { color: #ffffff; }
    </style>
</head>
<body class="min-h-full bg-gray-50 dark:custom-bg text-gray-900 dark:text-gray-100 transition-colors duration-200">
    <div class="fixed top-4 right-4 z-50">
        <button id="darkModeToggle" 
                class="p-3 rounded-full bg-gray-200 dark:bg-dark-200 hover:bg-gray-300 dark:hover:bg-dark-300 transition-all duration-200 shadow-lg">
            <!-- Icona Luna (visibile in modalità light) -->
            <svg class="w-6 h-6 dark:hidden" fill="currentColor" viewBox="0 0 20 20">
                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
            </svg>
            <!-- Icona Sole (visibile in modalità dark) -->
            <svg class="w-6 h-6 hidden dark:block text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"/>
            </svg>
        </button>
    </div>

    @include('includes.header')
    
    <main class="container mx-auto py-8 px-4">
        @yield('content')
    </main>

    @include('includes.footer')

    <script>
        // Controlla se esiste una preferenza salvata
        if (localStorage.getItem('darkMode') === 'true' || 
            (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        }

        // Toggle dark mode
        const darkModeToggle = document.getElementById('darkModeToggle');
        darkModeToggle.addEventListener('click', () => {
            document.documentElement.classList.toggle('dark');
            localStorage.setItem('darkMode', document.documentElement.classList.contains('dark'));
        });
    </script>
</body>
</html>