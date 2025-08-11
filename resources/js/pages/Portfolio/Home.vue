<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-purple-700 text-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
        <div class="text-center">
          <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 bg-gradient-to-r from-white via-blue-100 to-purple-200 bg-clip-text text-transparent leading-tight animate-pulse">
            Développeur Web Full Stack
          </h1>
          <p class="text-xl md:text-3xl lg:text-4xl mb-12 text-blue-100 font-light tracking-wide">
            Passionné par la création d'applications web 
            <span class="font-bold text-white underline decoration-purple-300 decoration-4">modernes</span> 
            et <span class="font-bold text-white underline decoration-blue-300 decoration-4">performantes</span>
          </p>
          <div class="flex flex-col sm:flex-row gap-6 justify-center">
            <Link
              :href="route('realisations')"
              class="group bg-white text-blue-600 px-10 py-4 rounded-xl font-bold text-lg hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:scale-105 hover:shadow-2xl transform transition-all duration-300 ease-out hover:-translate-y-1"
            >
              <span class="group-hover:text-purple-600 transition-colors duration-300">✨ Voir mes réalisations</span>
            </Link>
            <Link
              :href="route('contact')"
              class="group border-3 border-white text-white px-10 py-4 rounded-xl font-bold text-lg hover:bg-white hover:text-blue-600 hover:scale-105 hover:shadow-2xl transform transition-all duration-300 ease-out hover:-translate-y-1 hover:border-purple-300"
            >
              <span class="group-hover:text-purple-600 transition-colors duration-300">🚀 Me contacter</span>
            </Link>
          </div>
        </div>
      </div>
    </section>

    <!-- À propos - Aperçu -->
    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
          <div>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent hover:scale-105 transform transition-all duration-300 cursor-default">
              À propos de moi
            </h2>
            <p class="text-lg text-gray-600 mb-6">
              Développeur web passionné avec une expertise en technologies modernes. 
              Je crée des solutions web innovantes et performantes qui répondent aux besoins spécifiques de mes clients.
            </p>
            <p class="text-lg text-gray-600 mb-8">
              Spécialisé dans le développement full-stack avec Laravel, Vue.js, et les technologies web modernes.
            </p>
            <Link
              :href="route('parcours')"
              class="group inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl font-bold text-lg hover:from-blue-700 hover:to-purple-700 hover:scale-105 hover:shadow-xl transform transition-all duration-300 ease-out hover:-translate-y-1"
            >
              <span class="mr-2 group-hover:rotate-12 transition-transform duration-300">🎯</span>
              Découvrir mon parcours
              <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </Link>
          </div>
          <div class="relative group">
            <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-xl p-8 text-white hover:from-blue-600 hover:to-purple-700 hover:scale-105 hover:shadow-2xl transform transition-all duration-500 ease-out hover:-translate-y-2">
              <h3 class="text-3xl font-bold mb-6 text-center">🚀 Mes compétences clés</h3>
              <ul class="space-y-4">
                <li class="flex items-center group/item hover:translate-x-2 transition-transform duration-300">
                  <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center mr-4 group-hover/item:rotate-12 group-hover/item:scale-110 transition-all duration-300">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-lg font-semibold group-hover/item:text-yellow-200 transition-colors duration-300">Développement Full Stack</span>
                </li>
                <li class="flex items-center group/item hover:translate-x-2 transition-transform duration-300">
                  <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center mr-4 group-hover/item:rotate-12 group-hover/item:scale-110 transition-all duration-300">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-lg font-semibold group-hover/item:text-yellow-200 transition-colors duration-300">Laravel & Vue.js</span>
                </li>
                <li class="flex items-center group/item hover:translate-x-2 transition-transform duration-300">
                  <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center mr-4 group-hover/item:rotate-12 group-hover/item:scale-110 transition-all duration-300">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-lg font-semibold group-hover/item:text-yellow-200 transition-colors duration-300">Design Responsive</span>
                </li>
                <li class="flex items-center group/item hover:translate-x-2 transition-transform duration-300">
                  <div class="w-8 h-8 bg-green-400 rounded-full flex items-center justify-center mr-4 group-hover/item:rotate-12 group-hover/item:scale-110 transition-all duration-300">
                    <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="text-lg font-semibold group-hover/item:text-yellow-200 transition-colors duration-300">Optimisation Performance</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services - Aperçu -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-4xl md:text-5xl font-black text-gray-900 mb-8 bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent hover:scale-105 transform transition-all duration-300 cursor-default">
            Mes Services
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Je propose une gamme complète de services de développement web pour répondre à tous vos besoins digitaux.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 hover:-translate-y-2 transform transition-all duration-300 ease-out border-2 border-transparent hover:border-blue-200">
            <div class="w-16 h-16 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl flex items-center justify-center mb-6 group-hover:rotate-12 group-hover:scale-110 transition-all duration-300">
              <svg class="w-8 h-8 text-blue-600 group-hover:text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors duration-300">💻 Développement Web</h3>
            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">Applications web modernes et performantes avec les dernières technologies.</p>
          </div>
          <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 hover:-translate-y-2 transform transition-all duration-300 ease-out border-2 border-transparent hover:border-green-200">
            <div class="w-16 h-16 bg-gradient-to-r from-green-100 to-green-200 rounded-xl flex items-center justify-center mb-6 group-hover:rotate-12 group-hover:scale-110 transition-all duration-300">
              <svg class="w-8 h-8 text-green-600 group-hover:text-green-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-green-600 transition-colors duration-300">📱 Design Responsive</h3>
            <p class="text-gray-600 group-hover:text-gray-700 transition-colors duration-300">Interfaces utilisateur adaptées à tous les appareils et écrans.</p>
          </div>
          <div class="group bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl hover:scale-105 hover:-translate-y-2 transform transition-all duration-300 ease-out border-2 border-transparent hover:border-purple-200">
            <div class="w-16 h-16 bg-gradient-to-r from-purple-100 to-purple-200 rounded-xl flex items-center justify-center mb-6 group-hover:rotate-12 group-hover:scale-110 transition-all duration-300">
              <svg class="w-8 h-8 text-purple-600 group-hover:text-purple-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">⚡ Optimisation</h3>
            <p class="text-gray-600">Performance et référencement optimisés pour une meilleure visibilité.</p>
          </div>
        </div>
        <div class="text-center mt-12">
          <Link
            :href="route('services')"
            class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors duration-200"
          >
            Voir tous mes services
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
          </Link>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
          Prêt à démarrer votre projet ?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
          Discutons de vos besoins et créons ensemble une solution web qui vous ressemble.
        </p>
        <Link
          :href="route('contact')"
          class="inline-flex items-center bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200"
        >
          Contactez-moi
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
          </svg>
        </Link>
      </div>
    </section>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
</script>
