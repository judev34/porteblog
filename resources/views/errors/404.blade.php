<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 - Page introuvable | CJ DEVELOP</title>
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
    </style>
</head>
<body class="h-full bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="min-h-full flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full text-center">
            <!-- Illustration 404 -->
            <div class="mb-8">
                <div class="relative">
                    <h1 class="text-9xl font-black text-transparent bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text animate-pulse">
                        404
                    </h1>
                    <div class="absolute inset-0 text-9xl font-black text-blue-100 -z-10 transform translate-x-2 translate-y-2">
                        404
                    </div>
                </div>
            </div>

            <!-- Message d'erreur -->
            <div class="mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Oups ! Page introuvable
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    La page que vous recherchez n'existe pas ou a été déplacée.
                </p>
                <p class="text-base text-gray-500">
                    Ne vous inquiétez pas, explorons ensemble mon portfolio !
                </p>
            </div>

            <!-- Actions -->
            <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
                <a href="{{ route('home') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 hover:scale-105 transform transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Retour à l'accueil
                </a>
                
                <a href="{{ route('contact') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3 border-2 border-blue-600 text-base font-medium rounded-xl text-blue-600 bg-white hover:bg-blue-50 hover:scale-105 transform transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                    </svg>
                    Me contacter
                </a>
            </div>

            <!-- Navigation rapide -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Navigation rapide</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                    <a href="{{ route('parcours') }}" class="text-sm text-gray-600 hover:text-blue-600 hover:underline transition-colors duration-200">
                        📚 Mon parcours
                    </a>
                    <a href="{{ route('experiences') }}" class="text-sm text-gray-600 hover:text-blue-600 hover:underline transition-colors duration-200">
                        💼 Expériences
                    </a>
                    <a href="{{ route('realisations') }}" class="text-sm text-gray-600 hover:text-blue-600 hover:underline transition-colors duration-200">
                        🚀 Réalisations
                    </a>
                    <a href="{{ route('services') }}" class="text-sm text-gray-600 hover:text-blue-600 hover:underline transition-colors duration-200">
                        ⚡ Services
                    </a>
                    <a href="{{ route('contact') }}" class="text-sm text-gray-600 hover:text-blue-600 hover:underline transition-colors duration-200">
                        📧 Contact
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
