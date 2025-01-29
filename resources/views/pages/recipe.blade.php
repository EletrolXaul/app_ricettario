@extends('layout')

@section('title', $recipe['name'] . ' - Ricette Online')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-6xl">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Immagine della ricetta -->
        <div class="relative aspect-[4/3] rounded-xl overflow-hidden shadow-lg">
            <img 
                src="{{ $recipe['image'] }}" 
                alt="{{ $recipe['name'] }}" 
                class="w-full h-full object-cover"
                onerror="this.src='{{ asset('images/default-recipe.jpg') }}'"
            >
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                <div class="absolute bottom-4 left-4 flex items-center space-x-2">
                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513" />
                    </svg>
                    <span class="text-sm text-white bg-black/50 px-3 py-1 rounded-full">
                        {{ count($recipe['ingredients']) }} ingredienti
                    </span>
                </div>
            </div>
        </div>

        <!-- Dettagli della ricetta -->
        <div class="space-y-6">
            <div>
                <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-2 flex items-center">
                    <svg class="w-8 h-8 mr-2 text-blue-600 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513" />
                    </svg>
                    {{ $recipe['name'] }}
                </h1>
                <p class="text-lg text-gray-600 dark:text-gray-300">
                    {{ $recipe['description'] }}
                </p>
            </div>

            <!-- Ingredienti -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 border border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-green-600 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    Ingredienti
                </h2>
                <ul class="space-y-2">
                    @foreach($recipe['ingredients'] as $ingredient)
                    <li class="flex items-center text-gray-700 dark:text-gray-300">
                        <svg class="w-5 h-5 mr-2 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        {{ $ingredient }}
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Procedimento -->
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 border border-gray-200 dark:border-gray-700">
                <h2 class="text-xl font-semibold text-gray-900 dark:text-white mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Procedimento
                </h2>
                <ol class="space-y-4">
                    @foreach($recipe['steps'] as $index => $step)
                    <li class="flex">
                        <span class="flex-shrink-0 w-8 h-8 flex items-center justify-center rounded-full bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 font-semibold mr-3">
                            {{ $index + 1 }}
                        </span>
                        <p class="text-gray-700 dark:text-gray-300 pt-1">
                            {{ $step }}
                        </p>
                    </li>
                    @endforeach
                </ol>
            </div>

            <!-- Pulsante torna alla home -->
            <a href="/" class="inline-flex items-center text-blue-600 dark:text-blue-400 hover:underline">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Torna alla lista delle ricette
            </a>
        </div>
    </div>
</div>
@endsection