<!DOCTYPE html>
<html lang="fr" class="h-full">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>500 - Erreur interne | CJ DEVELOP</title>
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
    </style>
</head>
<body class="h-full bg-gradient-to-br from-red-50 via-white to-orange-50">
    <div class="min-h-full flex items-center justify-center px-4 sm:px-6 lg:px-8">
        <div class="max-w-lg w-full text-center">
            <!-- Illustration 500 -->
            <div class="mb-8">
                <div class="relative">
                    <h1 class="text-9xl font-black text-transparent bg-gradient-to-r from-red-600 to-orange-600 bg-clip-text animate-pulse">
                        500
                    </h1>
                    <div class="absolute inset-0 text-9xl font-black text-red-100 -z-10 transform translate-x-2 translate-y-2">
                        500
                    </div>
                </div>
            </div>

            <!-- Message d'erreur -->
            <div class="mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Erreur interne du serveur
                </h2>
                <p class="text-lg text-gray-600 mb-6">
                    Une erreur technique s'est produite. Nos équipes ont été notifiées.
                </p>
                <p class="text-base text-gray-500">
                    Veuillez réessayer dans quelques instants.
                </p>
            </div>

            <!-- Actions -->
            <div class="space-y-4 sm:space-y-0 sm:space-x-4 sm:flex sm:justify-center">
                <a href="{{ route('home') }}" 
                   class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-gradient-to-r from-red-600 to-orange-600 hover:from-red-700 hover:to-orange-700 hover:scale-105 transform transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Retour à l'accueil
                </a>
                
                <button onclick="window.location.reload()" 
                        class="w-full sm:w-auto inline-flex items-center justify-center px-8 py-3 border-2 border-red-600 text-base font-medium rounded-xl text-red-600 bg-white hover:bg-red-50 hover:scale-105 transform transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    Actualiser la page
                </button>
            </div>

            <!-- Contact support -->
            <div class="mt-12 pt-8 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Besoin d'aide ?</h3>
                <a href="{{ route('contact') }}" class="text-sm text-gray-600 hover:text-red-600 hover:underline transition-colors duration-200">
                    📧 Contactez-moi si le problème persiste
                </a>
            </div>
        </div>
    </div>
</body>
</html>
