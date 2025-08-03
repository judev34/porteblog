<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-purple-600 to-pink-700 text-white py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Mes Réalisations
          </h1>
          <p class="text-xl text-purple-100 max-w-2xl mx-auto">
            Découvrez une sélection de projets que j'ai développés avec passion et expertise
          </p>
        </div>
      </div>
    </section>

    <!-- Projets Section -->
    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16">
          <!-- Projet 1 - Portfolio Personnel -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
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
              <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Portfolio Développeur Full Stack
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

          <!-- Projet 2 - À personnaliser -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="h-64 bg-gradient-to-br from-green-500 to-teal-600 flex items-center justify-center">
              <div class="text-white text-center">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <p class="text-lg font-semibold">Capture d'écran à venir</p>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Dashboard Analytics
              </h3>
              <p class="text-gray-600 mb-4">
                Interface de visualisation de données avec graphiques interactifs, tableaux de bord personnalisables 
                et système de reporting avancé. Optimisé pour les performances et l'expérience utilisateur.
              </p>
              <div class="flex flex-wrap gap-2 mb-4">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Vue.js</span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Chart.js</span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">API REST</span>
              </div>
              <div class="flex space-x-4">
                <a href="#" class="text-green-600 hover:text-green-800 font-semibold">
                  Voir le projet →
                </a>
                <a href="#" class="text-gray-500 hover:text-gray-700">
                  Code source
                </a>
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
              <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Plateforme de Formation
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
          <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <div class="h-64 bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">
              <div class="text-white text-center">
                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                </svg>
                <p class="text-lg font-semibold">Capture d'écran à venir</p>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-2xl font-bold text-gray-900 mb-3">
                Application de Chat
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
              <span class="text-red-600 font-bold text-lg">L</span>
            </div>
            <p class="text-gray-700 font-medium">Laravel</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-green-600 font-bold text-lg">V</span>
            </div>
            <p class="text-gray-700 font-medium">Vue.js</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-blue-600 font-bold text-lg">TS</span>
            </div>
            <p class="text-gray-700 font-medium">TypeScript</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-cyan-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-cyan-600 font-bold text-lg">T</span>
            </div>
            <p class="text-gray-700 font-medium">TailwindCSS</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-orange-600 font-bold text-lg">M</span>
            </div>
            <p class="text-gray-700 font-medium">MySQL</p>
          </div>
          <div class="text-center">
            <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mx-auto mb-3">
              <span class="text-gray-600 font-bold text-lg">G</span>
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
