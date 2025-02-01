@extends('layout')

@section('title', 'Home - Ricette Online')

@section('content')
    <div class="container mx-auto px-4 py-6 max-w-7xl">
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-8">Le Nostre Ricette</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach ($recipes as $recipe)
                <a href="/recipes/{{ $recipe['id'] }}" class="block group">
                    <div
                        class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-sm overflow-hidden transition-all duration-200 hover:shadow-lg hover:-translate-y-1">
                        <div class="relative aspect-[4/3]">
                            <img 
                                src="{{ asset($recipe['image']) }}" 
                                alt="{{ $recipe['name'] }}"
                                class="w-full h-full object-cover"
                                onerror="this.src='{{ asset('images/default-recipe.jpg') }}'"
                            >
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-300">
                                <div class="absolute bottom-2 left-2">
                                    <span class="text-xs text-white bg-black/50 px-2 py-1 rounded-full">
                                        {{ count($recipe['ingredients']) }} ingredienti
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="p-3">
                            <h3
                                class="text-sm font-semibold text-gray-900 dark:text-white group-hover:text-blue-600 dark:group-hover:text-blue-400 truncate">
                                {{ $recipe['name'] }}
                            </h3>
                            <p class="text-xs text-gray-600 dark:text-gray-300 mt-1 line-clamp-2">
                                {{ $recipe['description'] }}
                            </p>
                            <div class="mt-2 flex items-center text-xs text-blue-600 dark:text-blue-400">
                                <span class="font-medium group-hover:underline">Vedi ricetta</span>
                                <svg class="w-3 h-3 ml-1 transform group-hover:translate-x-1 transition-transform"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
