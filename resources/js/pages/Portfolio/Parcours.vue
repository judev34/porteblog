<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <SectionContainer 
      variant="hero" 
      size="xl" 
      title="Mon Parcours"
      subtitle="Découvrez mon évolution professionnelle et ma passion grandissante pour le développement web moderne"
      :pattern="true"
    >
      <div class="flex justify-center mt-12">
        <div class="bg-white/10 backdrop-blur-md rounded-2xl p-8 text-center hover:scale-105 transition-all duration-500">
          <div class="text-6xl mb-4">🚀</div>
          <p class="text-xl font-semibold text-white mb-2">3+ Années d'Expérience</p>
          <p class="text-indigo-200">De débutant passionné à développeur full-stack</p>
        </div>
      </div>
    </SectionContainer>

    <!-- Timeline Section -->
    <SectionContainer 
      variant="default" 
      size="xl" 
      title="🎆 Mon Évolution Professionnelle"
      subtitle="Chaque étape a forgé mon expertise et nourri ma passion pour l'innovation technologique"
    >
      <div class="max-w-4xl mx-auto">
        <div class="relative">
          <!-- Ligne verticale animée -->
          <div class="absolute left-8 top-0 bottom-0 w-1 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 rounded-full shadow-lg"></div>
          
          <!-- Étapes du parcours -->
          <div class="space-y-16">
            <!-- Étape 1 - Formation & Découverte -->
            <div class="group relative flex items-start">
              <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-r from-blue-500 to-blue-600 rounded-full flex items-center justify-center text-white font-black text-2xl shadow-lg group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 z-10">
                🎓
              </div>
              <div class="ml-8 flex-1">
                <AnimatedCard variant="primary" size="lg" :elevated="true">
                  <template #icon>
                    <div class="w-16 h-16 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
                      <span class="text-3xl">📚</span>
                    </div>
                  </template>
                  
                  <h3 class="text-3xl font-black text-gray-900 mb-3 bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent">
                    Pré-formation Numérique
                  </h3>
                  <p class="text-blue-600 font-bold mb-4 text-lg">
                    2020 | LABOMAKER Lodève - Grande École du Numérique
                  </p>
                  <p class="text-gray-600 mb-6 leading-relaxed">
                    🚀 <strong>Tremplin vers les métiers du numérique</strong>. Formation intensive basée sur une pédagogie active 
                    avec chantiers écoles et mises en application concrètes. <strong>Stage professionnel inclus</strong> pour une première immersion dans l'écosystème tech.
                  </p>
                  <div class="flex flex-wrap gap-3">
                    <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Remise à niveau</span>
                    <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Pédagogie active</span>
                    <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Métiers du numérique</span>
                  </div>
                </AnimatedCard>
              </div>
            </div>

            <!-- Étape 2 - Spécialisation Backend -->
            <div class="group relative flex items-start">
              <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center text-white font-black text-2xl shadow-lg group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 z-10">
                ⚙️
              </div>
              <div class="ml-8 flex-1">
                <AnimatedCard variant="success" size="lg" :elevated="true">
                  <template #icon>
                    <div class="w-16 h-16 bg-gradient-to-r from-green-100 to-green-200 rounded-xl flex items-center justify-center">
                      <span class="text-3xl">🛠️</span>
                    </div>
                  </template>
                  
                  <h3 class="text-3xl font-black text-gray-900 mb-3 bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent">
                    Développeur Web & Web Mobile
                  </h3>
                  <p class="text-green-600 font-bold mb-4 text-lg">
                    2020 - 2021 | ADRAR Montpellier - Titre Professionnel Bac+2 (RNCP 37674)
                  </p>
                  <p class="text-gray-600 mb-6 leading-relaxed">
                    💻 <strong>Formation diplômante intensive</strong> de 850h couvrant le développement front-end et back-end. 
                    Maîtrise complète du <strong>cycle de développement</strong> avec stage professionnel et 92% de taux de réussite à la certification.
                  </p>
                  <div class="flex flex-wrap gap-3">
                    <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">HTML/CSS/JS</span>
                    <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">PHP/MySQL</span>
                    <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Applications Web</span>
                    <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Sécurité Web</span>
                  </div>
                </AnimatedCard>
              </div>
            </div>

            <!-- Étape 3 - Expertise Frontend Moderne -->
            <div class="group relative flex items-start">
              <div class="flex-shrink-0 w-20 h-20 bg-gradient-to-r from-purple-500 to-purple-600 rounded-full flex items-center justify-center text-white font-black text-2xl shadow-lg group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 z-10">
                ✨
              </div>
              <div class="ml-8 flex-1">
                <AnimatedCard variant="secondary" size="lg" :elevated="true">
                  <template #icon>
                    <div class="w-16 h-16 bg-gradient-to-r from-purple-100 to-purple-200 rounded-xl flex items-center justify-center">
                      <span class="text-3xl">🎨</span>
                    </div>
                  </template>
                  
                  <h3 class="text-3xl font-black text-gray-900 mb-3 bg-gradient-to-r from-purple-600 to-purple-700 bg-clip-text text-transparent">
                    Concepteur Développeur d'Applications
                  </h3>
                  <p class="text-purple-600 font-bold mb-4 text-lg">
                    2021 - 2022 | MY DIGITAL SCHOOL Montpellier - Titre RNCP Bac+3 (Niveau 6)
                  </p>
                  <p class="text-gray-600 mb-6 leading-relaxed">
                    🎯 <strong>Formation professionnalisante en alternance</strong> (contrat de professionnalisation) avec 86% de taux de réussite. 
                    Approfondissement de la <strong>programmation informatique</strong> et maîtrise de la méthodologie de gestion de projet complète.
                  </p>
                  <div class="flex flex-wrap gap-3">
                    <span class="bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Développement Web</span>
                    <span class="bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Applications Mobile</span>
                    <span class="bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Gestion de Projet</span>
                    <span class="bg-gradient-to-r from-purple-100 to-purple-200 text-purple-800 px-4 py-2 rounded-xl text-sm font-semibold hover:scale-105 transition-transform duration-200">Sécurisation Code</span>
                  </div>
                </AnimatedCard>
              </div>
            </div>


          </div>
        </div>
      </div>
    </SectionContainer>

    <!-- Compétences Section -->
    <SectionContainer 
      variant="accent" 
      size="xl" 
      title="🛠️ Mes Compétences Techniques"
      subtitle="Un arsenal technologique moderne pour créer des solutions web performantes et innovantes"
    >
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Frontend -->
        <AnimatedCard variant="primary" size="lg" emoji="🎨" title="Frontend Moderne">
          <template #icon>
            <div class="w-16 h-16 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
            </div>
          </template>
          
          <div class="space-y-4">
            <div class="flex flex-wrap gap-2">
              <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Vue.js 3 🚀</span>
              <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">JavaScript/jQuery ⚡</span>
              <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">HTML5/CSS3 🎨</span>
              <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">SASS/SCSS 🌈</span>
              <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Bootstrap 📱</span>
              <span class="bg-gradient-to-r from-blue-100 to-blue-200 text-blue-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">TypeScript 🔥</span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              🎨 <strong>Interfaces modernes</strong> et responsive design avec maîtrise complète des technologies frontend actuelles.
            </p>
          </div>
        </AnimatedCard>

        <!-- Backend -->
        <AnimatedCard variant="success" size="lg" emoji="🛠️" title="Backend Robuste">
          <template #icon>
            <div class="w-16 h-16 bg-gradient-to-r from-green-100 to-green-200 rounded-xl flex items-center justify-center">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2"></path>
              </svg>
            </div>
          </template>
          <div class="space-y-4">
            <div class="flex flex-wrap gap-2">
              <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Laravel/Symfony 🚀</span>
              <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">PHP 7/8 💪</span>
              <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">MySQL/PostgreSQL 🗄️</span>
              <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">API REST 🔌</span>
              <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Doctrine ORM 📊</span>
              <span class="bg-gradient-to-r from-green-100 to-green-200 text-green-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Twig 🎨</span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              🏗️ <strong>Architecture solide</strong> et sécurisée pour des applications performantes et évolutives.
            </p>
          </div>
        </AnimatedCard>

        <!-- DevOps -->
        <AnimatedCard variant="warning" size="lg" emoji="⚙️" title="DevOps & Outils">
          <template #icon>
            <div class="w-16 h-16 bg-gradient-to-r from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center">
              <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              </svg>
            </div>
          </template>
          <div class="space-y-4">
            <div class="flex flex-wrap gap-2">
              <span class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Git/GitHub 🌿</span>
              <span class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Docker 🐳</span>
              <span class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Trello/Jira 📋</span>
              <span class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Tests Unitaires ✅</span>
              <span class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">XAMPP 🔧</span>
              <span class="bg-gradient-to-r from-yellow-100 to-yellow-200 text-yellow-800 px-3 py-1 rounded-lg text-sm font-semibold hover:scale-105 transition-transform duration-200">Figma/Canva 🎨</span>
            </div>
            <p class="text-gray-600 text-sm leading-relaxed">
              🔧 <strong>Automatisation</strong> et déploiement continu pour une productivité maximale.
            </p>
          </div>
        </AnimatedCard>
      </div>
    </SectionContainer>

    <!-- CTA Section -->
    <SectionContainer 
      variant="hero" 
      size="lg" 
      title="🚀 Intéressé par mon profil ?"
      subtitle="Découvrez mes réalisations concrètes et les projets sur lesquels j'ai travaillé"
    >
      <div class="flex flex-col sm:flex-row gap-6 justify-center">
        <Link
          :href="route('experiences')"
          class="group bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl flex items-center justify-center space-x-3"
        >
          <span>👨‍💻 Voir mes expériences</span>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </Link>
        <Link
          :href="route('realisations')"
          class="group border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl flex items-center justify-center space-x-3"
        >
          <span>🎯 Découvrir mes réalisations</span>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
          </svg>
        </Link>
      </div>
    </SectionContainer>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
import SectionContainer from '@/components/ui/SectionContainer.vue'
import AnimatedCard from '@/components/ui/AnimatedCard.vue'
import { Link } from '@inertiajs/vue3'
</script>
