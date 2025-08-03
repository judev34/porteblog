<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-4xl md:text-5xl font-bold mb-6">
            Mes Services
          </h1>
          <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Des solutions web complètes adaptées à vos besoins et objectifs
          </p>
        </div>
      </div>
    </section>

    <!-- Services principaux -->
    <section class="py-16 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
          <!-- Service 1 -->
          <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">
              Développement Web Full Stack
            </h3>
            <p class="text-gray-600 mb-6">
              Création d'applications web complètes avec Laravel et Vue.js. 
              De la conception à la mise en production, je m'occupe de tous les aspects techniques.
            </p>
            <ul class="space-y-2 text-gray-600 mb-6">
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Applications web sur mesure
              </li>
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                APIs REST sécurisées
              </li>
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Base de données optimisée
              </li>
            </ul>
            <div class="text-blue-600 font-semibold">À partir de 2500€</div>
          </div>

          <!-- Service 2 -->
          <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">
              Interfaces Utilisateur Modernes
            </h3>
            <p class="text-gray-600 mb-6">
              Conception et développement d'interfaces utilisateur intuitives et responsives. 
              Design moderne avec une expérience utilisateur optimale sur tous les appareils.
            </p>
            <ul class="space-y-2 text-gray-600 mb-6">
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Design responsive
              </li>
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Accessibilité (WCAG)
              </li>
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Performance optimisée
              </li>
            </ul>
            <div class="text-green-600 font-semibold">À partir de 1500€</div>
          </div>

          <!-- Service 3 -->
          <div class="bg-gray-50 p-8 rounded-lg hover:shadow-lg transition-shadow duration-300">
            <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">
              Optimisation & Performance
            </h3>
            <p class="text-gray-600 mb-6">
              Amélioration des performances de vos applications existantes. 
              Audit technique, optimisation du code et mise en place de bonnes pratiques.
            </p>
            <ul class="space-y-2 text-gray-600 mb-6">
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Audit de performance
              </li>
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Optimisation SEO
              </li>
              <li class="flex items-center">
                <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Sécurité renforcée
              </li>
            </ul>
            <div class="text-purple-600 font-semibold">À partir de 800€</div>
          </div>
        </div>
      </div>
    </section>

    <!-- Processus de travail -->
    <section class="py-16 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Mon Processus de Travail
          </h2>
          <p class="text-lg text-gray-600 max-w-2xl mx-auto">
            Une approche structurée pour garantir la réussite de votre projet
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Étape 1 -->
          <div class="text-center">
            <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-xl">
              1
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Analyse</h3>
            <p class="text-gray-600">
              Étude approfondie de vos besoins et définition des objectifs du projet
            </p>
          </div>

          <!-- Étape 2 -->
          <div class="text-center">
            <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-xl">
              2
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Conception</h3>
            <p class="text-gray-600">
              Création de maquettes et définition de l'architecture technique
            </p>
          </div>

          <!-- Étape 3 -->
          <div class="text-center">
            <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-xl">
              3
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Développement</h3>
            <p class="text-gray-600">
              Implémentation avec suivi régulier et tests continus
            </p>
          </div>

          <!-- Étape 4 -->
          <div class="text-center">
            <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4 text-white font-bold text-xl">
              4
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Livraison</h3>
            <p class="text-gray-600">
              Mise en production et accompagnement post-lancement
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-white">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">
            Questions Fréquentes
          </h2>
          <p class="text-lg text-gray-600">
            Réponses aux questions les plus courantes
          </p>
        </div>

        <div class="space-y-6">
          <!-- FAQ 1 -->
          <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">
              Quels sont vos délais de livraison ?
            </h3>
            <p class="text-gray-600">
              Les délais varient selon la complexité du projet. Un site vitrine peut être livré en 2-3 semaines, 
              tandis qu'une application complexe peut nécessiter 2-3 mois. Je fournis toujours un planning détaillé.
            </p>
          </div>

          <!-- FAQ 2 -->
          <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">
              Proposez-vous un suivi après livraison ?
            </h3>
            <p class="text-gray-600">
              Oui, j'inclus toujours une période de garantie et de support. Je propose également des contrats 
              de maintenance pour assurer la sécurité et les mises à jour de votre application.
            </p>
          </div>

          <!-- FAQ 3 -->
          <div class="bg-gray-50 rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">
              Travaillez-vous avec des équipes existantes ?
            </h3>
            <p class="text-gray-600">
              Absolument ! Je peux m'intégrer à votre équipe technique existante ou collaborer avec vos 
              designers et chefs de projet. J'ai l'habitude du travail en équipe et des méthodologies agiles.
            </p>
          </div>
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
          Contactez-moi pour discuter de vos besoins et obtenir un devis personnalisé
        </p>
        <Link
          :href="route('contact')"
          class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200"
        >
          Demander un devis
        </Link>
      </div>
    </section>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
</script>
