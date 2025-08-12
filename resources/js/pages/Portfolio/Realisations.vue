<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 to-pink-700 text-white py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 bg-gradient-to-r from-white via-purple-100 to-pink-200 bg-clip-text text-transparent leading-tight animate-pulse">
            Mes Réalisations
          </h1>
          <p class="text-xl md:text-3xl lg:text-4xl text-purple-100 max-w-4xl mx-auto font-light tracking-wide">
            Découvrez une sélection de 
            <span class="font-bold text-white underline decoration-pink-300 decoration-4">projets</span> 
            que j'ai développés avec <span class="font-bold text-white underline decoration-purple-300 decoration-4">passion</span> et expertise
          </p>
        </div>
      </div>
    </section>

    <!-- Projets Section -->
    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
          <!-- Projet 1 - Portfolio Personnel -->
          <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:scale-105 hover:-translate-y-3 transform transition-all duration-500 ease-out border-2 border-transparent hover:border-purple-200">
            <div class="h-64 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center relative">
              <div class="text-white text-center">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <p class="text-lg font-semibold">Portfolio Développeur</p>
              </div>
              <div class="absolute top-4 right-4">
                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                  ✨ Projet Actuel
                </span>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent group-hover:scale-105 transform transition-all duration-300">
                🚀 Portfolio Développeur Full Stack
              </h3>
              <p class="text-gray-600 mb-4">
                Portfolio personnel moderne et responsive développé avec Laravel 12 et Vue 3. 
                Présentation complète de mon parcours, expériences, réalisations et services avec 
                une interface utilisateur soignée et une navigation fluide.
              </p>
              <div class="mb-4">
                <h4 class="font-semibold text-gray-800 mb-2">Fonctionnalités clés :</h4>
                <ul class="text-sm text-gray-600 space-y-1">
                  <li>• <strong>5 sections principales</strong> : Accueil, Parcours, Expériences, Réalisations, Contact</li>
                  <li>• <strong>Design responsive</strong> adapté mobile, tablette et desktop</li>
                  <li>• <strong>Navigation SPA</strong> avec Inertia.js pour une expérience fluide</li>
                  <li>• <strong>Interface moderne</strong> avec TailwindCSS et composants réutilisables</li>
                  <li>• <strong>Formulaire de contact</strong> intégré avec validation</li>
                  <li>• <strong>SEO optimisé</strong> et performances optimales</li>
                </ul>
              </div>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">Laravel 12</span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Vue 3</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">TypeScript</span>
                <span class="bg-cyan-100 text-cyan-800 px-3 py-1 rounded-full text-sm">TailwindCSS</span>
                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Inertia.js</span>
                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Vite</span>
              </div>
              <div class="bg-indigo-50 border-l-4 border-indigo-400 p-3 rounded mb-4">
                <div class="flex">
                  <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-indigo-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm text-indigo-700">
                      <strong>Auto-référentiel</strong> - Ce portfolio démontre ma maîtrise des technologies modernes 
                      et ma capacité à créer des interfaces utilisateur professionnelles.
                    </p>
                  </div>
                </div>
              </div>
              <div class="flex space-x-4">
                <Link :href="route('home')" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                  Voir le projet →
                </Link>
                <a href="#" class="text-gray-500 hover:text-gray-700">
                  Code source
                </a>
              </div>
            </div>
          </div>

          <!-- Projet 2 - Montpellier-Parkings -->
          <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:scale-105 hover:-translate-y-3 transform transition-all duration-500 ease-out border-2 border-transparent hover:border-blue-200">
            <div class="h-64 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center group-hover:from-blue-600 group-hover:to-indigo-700 transition-all duration-300 relative overflow-hidden">
              <div class="text-white text-center z-10">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                </svg>
                <p class="text-lg font-semibold">Application Temps Réel</p>
              </div>
              <div class="absolute top-4 right-4">
                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                  🚀 En Production
                </span>
              </div>
              <!-- Effet de fond animé -->
              <div class="absolute inset-0 opacity-20">
                <div class="absolute top-4 left-4 w-8 h-8 bg-white rounded-full animate-pulse"></div>
                <div class="absolute top-12 right-8 w-4 h-4 bg-white rounded-full animate-ping"></div>
                <div class="absolute bottom-8 left-8 w-6 h-6 bg-white rounded-full animate-bounce"></div>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent group-hover:scale-105 transform transition-all duration-300">
                🅿️ Montpellier-Parkings
              </h3>
              <p class="text-gray-600 mb-4">
                Application web moderne affichant en temps réel la disponibilité des places de parking 
                à Montpellier. Interface intuitive et responsive utilisant les données ouvertes de 
                Montpellier Méditerranée Métropole pour aider les automobilistes à trouver rapidement 
                une place disponible.
              </p>
              <div class="mb-4">
                <h4 class="font-semibold text-gray-800 mb-2">Fonctionnalités principales :</h4>
                <ul class="text-sm text-gray-600 space-y-1">
                  <li>• <strong>Données temps réel</strong> : Affichage instantané des places disponibles</li>
                  <li>• <strong>24 parkings référencés</strong> : Couverture complète du centre-ville</li>
                  <li>• <strong>Interface responsive</strong> : Optimisée mobile, tablette et desktop</li>
                  <li>• <strong>Géolocalisation</strong> : Localisation des parkings sur carte interactive</li>
                  <li>• <strong>Données officielles</strong> : API Montpellier Méditerranée Métropole</li>
                  <li>• <strong>Support communautaire</strong> : Système de dons PayPal et Tipeee</li>
                </ul>
              </div>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Vue 3</span>
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">TypeScript</span>
                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Pinia</span>
                <span class="bg-cyan-100 text-cyan-800 px-3 py-1 rounded-full text-sm">API REST</span>
                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Responsive</span>
                <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm">PWA</span>
              </div>
              <div class="bg-blue-50 border-l-4 border-blue-400 p-3 rounded mb-4">
                <div class="flex">
                  <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                  </div>
                  <div class="ml-3">
                    <p class="text-sm text-blue-700">
                      <strong>Impact</strong> - Service public numérique aidant quotidiennement les automobilistes 
                      montpelliérains à optimiser leur recherche de stationnement et réduire la circulation.
                    </p>
                  </div>
                </div>
              </div>
              <div class="flex space-x-4">
                <a href="https://montpellier-parkings.fr" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:text-blue-800 font-semibold flex items-center gap-1">
                  Voir le projet →
                  <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                  </svg>
                </a>
                <span class="text-gray-500">
                  Code source privé
                </span>
              </div>
            </div>
          </div>

          <!-- Projet 3 - À personnaliser -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="h-64 bg-gradient-to-br from-orange-500 to-red-600 flex items-center justify-center">
              <div class="text-white text-center">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
                <p class="text-lg font-semibold">Capture d'écran à venir</p>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 bg-gradient-to-r from-orange-600 to-red-600 bg-clip-text text-transparent group-hover:scale-105 transform transition-all duration-300">
                📚 Plateforme de Formation
              </h3>
              <p class="text-gray-600 mb-4">
                Système de gestion d'apprentissage (LMS) avec cours en ligne, suivi de progression, 
                quiz interactifs et certificats. Interface moderne et intuitive pour les apprenants.
              </p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Vue.js</span>
                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Video.js</span>
                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">PostgreSQL</span>
              </div>
              <div class="flex space-x-4">
                <a href="#" class="text-orange-600 hover:text-orange-800 font-semibold">
                  Voir le projet →
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700">
                  Code source
                </a>
              </div>
            </div>
          </div>

          <!-- Projet 4 - À personnaliser -->
          <div class="group bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl hover:scale-105 hover:-translate-y-3 transform transition-all duration-500 ease-out border-2 border-transparent hover:border-indigo-200">
            <div class="h-64 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center group-hover:from-indigo-600 group-hover:to-purple-700 transition-all duration-300">
              <div class="text-white text-center">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                <p class="text-lg font-semibold">Capture d'écran à venir</p>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent group-hover:scale-105 transform transition-all duration-300">
                💬 Plateforme de Chat
              </h3>
              <p class="text-gray-600 mb-4">
                Application de messagerie en temps réel avec salles de discussion, partage de fichiers, 
                notifications push et interface responsive. Utilisation de WebSockets pour la communication instantanée.
              </p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Vue.js</span>
                <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">WebSockets</span>
                <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">Redis</span>
              </div>
              <div class="flex space-x-4">
                <a href="#" class="text-indigo-600 hover:text-indigo-800 font-semibold">
                  Voir le projet →
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700">
                  Code source
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Technologies Utilisées
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Un aperçu des technologies et outils que j'utilise pour créer des solutions web modernes
          </p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
          <div class="text-center">
            <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <FontAwesomeIcon :icon="['fab', 'laravel']" class="text-red-600 text-2xl" />
            </div>
            <p class="text-gray-700 font-medium">Laravel</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <FontAwesomeIcon :icon="['fab', 'vuejs']" class="text-green-600 text-2xl" />
            </div>
            <p class="text-gray-700 font-medium">Vue.js</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <FontAwesomeIcon icon="code" class="text-blue-600 text-2xl" />
            </div>
            <p class="text-gray-700 font-medium">TypeScript</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-cyan-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <FontAwesomeIcon :icon="['fab', 'css3-alt']" class="text-cyan-600 text-2xl" />
            </div>
            <p class="text-gray-700 font-medium">TailwindCSS</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <FontAwesomeIcon icon="database" class="text-orange-600 text-2xl" />
            </div>
            <p class="text-gray-700 font-medium">MySQL</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <FontAwesomeIcon :icon="['fab', 'git-alt']" class="text-gray-600 text-2xl" />
            </div>
            <p class="text-gray-700 font-medium">Git</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-purple-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
          Un projet en tête ?
        </h2>
        <p class="text-xl text-purple-100 mb-8 max-w-2xl mx-auto">
          Discutons de votre projet et créons ensemble quelque chose d'exceptionnel
        </p>
        <Link
          :href="route('contact')"
          class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200"
        >
          Contactez-moi
        </Link>
      </div>
    </section>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
</script>
