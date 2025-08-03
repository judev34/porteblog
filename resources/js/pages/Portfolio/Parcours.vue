<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-indigo-600 to-blue-700 text-white py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Mon Parcours
          </h1>
          <p class="text-xl text-indigo-100 max-w-2xl mx-auto">
            Découvrez mon évolution professionnelle et ma passion pour le développement web
          </p>
        </div>
      </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="relative">
          <!-- Ligne verticale -->
          <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-gray-300"></div>
          
          <!-- Étapes du parcours -->
          <div class="space-y-12">
            <!-- Étape 1 - À personnaliser -->
            <div class="relative flex items-start">
              <div class="flex-shrink-0 w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                1
              </div>
              <div class="ml-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                  <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Formation & Découverte
                  </h3>
                  <p class="text-blue-600 font-semibold mb-3">
                    [Période à définir]
                  </p>
                  <p class="text-gray-600 mb-4">
                    Mes premiers pas dans le développement web. Découverte des langages de base : HTML, CSS, JavaScript.
                    Formation autodidacte et passion grandissante pour la programmation.
                  </p>
                  <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">HTML/CSS</span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">JavaScript</span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">Bases du Web</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Étape 2 - À personnaliser -->
            <div class="relative flex items-start">
              <div class="flex-shrink-0 w-16 h-16 bg-green-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                2
              </div>
              <div class="ml-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                  <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Spécialisation Backend
                  </h3>
                  <p class="text-green-600 font-semibold mb-3">
                    [Période à définir]
                  </p>
                  <p class="text-gray-600 mb-4">
                    Approfondissement des technologies backend. Maîtrise de PHP et découverte du framework Laravel.
                    Apprentissage des bases de données et de l'architecture web.
                  </p>
                  <div class="flex flex-wrap gap-2">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">PHP</span>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">Laravel</span>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">MySQL</span>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">API REST</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Étape 3 - À personnaliser -->
            <div class="relative flex items-start">
              <div class="flex-shrink-0 w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                3
              </div>
              <div class="ml-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                  <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Expertise Frontend Moderne
                  </h3>
                  <p class="text-purple-600 font-semibold mb-3">
                    [Période à définir]
                  </p>
                  <p class="text-gray-600 mb-4">
                    Évolution vers les frameworks JavaScript modernes. Maîtrise de Vue.js et des outils de build modernes.
                    Développement d'applications SPA performantes.
                  </p>
                  <div class="flex flex-wrap gap-2">
                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Vue.js</span>
                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">TypeScript</span>
                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">Vite</span>
                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">TailwindCSS</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Étape 4 - À personnaliser -->
            <div class="relative flex items-start">
              <div class="flex-shrink-0 w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center text-white font-bold text-lg">
                4
              </div>
              <div class="ml-8">
                <div class="bg-gray-50 p-6 rounded-lg">
                  <h3 class="text-xl font-bold text-gray-900 mb-2">
                    Développeur Full Stack
                  </h3>
                  <p class="text-orange-600 font-semibold mb-3">
                    Aujourd'hui
                  </p>
                  <p class="text-gray-600 mb-4">
                    Expertise complète en développement full stack. Création d'applications web modernes et performantes.
                    Accompagnement de projets de A à Z avec une approche centrée utilisateur.
                  </p>
                  <div class="flex flex-wrap gap-2">
                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Full Stack</span>
                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">Laravel + Vue</span>
                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">DevOps</span>
                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">UX/UI</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Compétences Section -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Mes Compétences Techniques
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Un ensemble de technologies maîtrisées pour créer des solutions web complètes
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <!-- Frontend -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
              <svg class="w-6 h-6 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              Frontend
            </h3>
            <div class="space-y-3">
              <div class="flex justify-between items-center">
                <span class="text-gray-700">Vue.js 3</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-blue-600 h-2 rounded-full" style="width: 90%"></div>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-700">TypeScript</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-blue-600 h-2 rounded-full" style="width: 85%"></div>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-700">TailwindCSS</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-blue-600 h-2 rounded-full" style="width: 95%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Backend -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
              <svg class="w-6 h-6 mr-2 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path>
              </svg>
              Backend
            </h3>
            <div class="space-y-3">
              <div class="flex justify-between items-center">
                <span class="text-gray-700">Laravel</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-green-600 h-2 rounded-full" style="width: 92%"></div>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-700">PHP 8+</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-green-600 h-2 rounded-full" style="width: 88%"></div>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-700">API REST</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-green-600 h-2 rounded-full" style="width: 90%"></div>
                </div>
              </div>
            </div>
          </div>

          <!-- Outils & DevOps -->
          <div class="bg-white p-6 rounded-lg shadow-md">
            <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
              <svg class="w-6 h-6 mr-2 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
              Outils
            </h3>
            <div class="space-y-3">
              <div class="flex justify-between items-center">
                <span class="text-gray-700">Git</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-purple-600 h-2 rounded-full" style="width: 95%"></div>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-700">Docker</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-purple-600 h-2 rounded-full" style="width: 75%"></div>
                </div>
              </div>
              <div class="flex justify-between items-center">
                <span class="text-gray-700">MySQL</span>
                <div class="w-24 bg-gray-200 rounded-full h-2">
                  <div class="bg-purple-600 h-2 rounded-full" style="width: 85%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-indigo-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
          Intéressé par mon profil ?
        </h2>
        <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">
          Découvrez mes réalisations concrètes et les projets sur lesquels j'ai travaillé.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <Link
            :href="route('experiences')"
            class="bg-white text-indigo-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200"
          >
            Mes expériences
          </Link>
          <Link
            :href="route('realisations')"
            class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-indigo-600 transition-colors duration-200"
          >
            Mes réalisations
          </Link>
        </div>
      </div>
    </section>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
</script>
