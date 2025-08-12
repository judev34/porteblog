<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <SectionContainer 
      variant="hero" 
      size="md" 
      title="💼 Mes Services"
      subtitle="Des solutions web complètes et innovantes pour transformer vos idées en succès numérique"
      :pattern="true"
    >
      
    </SectionContainer>

    <!-- Services principaux -->
    <SectionContainer 
      variant="accent" 
      size="xl" 
      title="🛠️ Mes Services Principaux"
      subtitle="Une expertise complète pour donner vie à vos projets web les plus ambitieux"
    >
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Service 1 - Développement Full Stack -->
        <AnimatedCard variant="glass" size="lg" emoji="💻" title="Développement Web Full Stack">
          <template #icon>
            <div class="w-16 h-16 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
              </svg>
            </div>
          </template>
          
          <p class="text-gray-600 mb-6 leading-relaxed">
            🚀 <strong>Création d'applications web complètes</strong> avec Laravel et Vue.js. 
            De la conception à la mise en production, je transforme vos idées en <strong>solutions digitales performantes</strong>.
          </p>
          
          <div class="space-y-3 mb-6">
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-blue-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-blue-600 transition-colors duration-200">Applications web sur mesure</span>
            </div>
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-blue-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-blue-600 transition-colors duration-200">APIs REST sécurisées</span>
            </div>
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-blue-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-blue-600 transition-colors duration-200">Architecture scalable</span>
            </div>
          </div>
          
          <!-- <template #action>
            <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-4">
              <p class="text-sm font-semibold text-blue-800 mb-1">À partir de 2500€</p>
              <p class="text-xs text-blue-600">Projet complet avec suivi personnalisé</p>
            </div>
          </template> -->
        </AnimatedCard>

        <!-- Service 2 - Interfaces Utilisateur Modernes -->
        <AnimatedCard variant="glass" size="lg" emoji="🎨" title="Interfaces Utilisateur Modernes">
          <template #icon>
            <div class="w-16 h-16 bg-gradient-to-r from-green-100 to-green-200 rounded-xl flex items-center justify-center">
              <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
              </svg>
            </div>
          </template>
          
          <p class="text-gray-600 mb-6 leading-relaxed">
            ✨ <strong>Conception d'interfaces utilisateur intuitives</strong> et responsives. 
            Design moderne avec une <strong>expérience utilisateur optimale</strong> sur tous les appareils.
          </p>
          
          <div class="space-y-3 mb-6">
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-green-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-green-600 transition-colors duration-200">Design responsive</span>
            </div>
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-green-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-green-600 transition-colors duration-200">Accessibilité (WCAG)</span>
            </div>
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-green-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-green-500 to-green-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-green-600 transition-colors duration-200">Performance optimisée</span>
            </div>
          </div>
          
          <!-- <template #action>
            <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-lg p-4">
              <p class="text-sm font-semibold text-green-800 mb-1">À partir de 1500€</p>
              <p class="text-xs text-green-600">Design system complet inclus</p>
            </div>
          </template> -->
        </AnimatedCard>

        <!-- Service 3 - Optimisation & Performance -->
        <AnimatedCard variant="glass" size="lg" emoji="⚡" title="Optimisation & Performance">
          <template #icon>
            <div class="w-16 h-16 bg-gradient-to-r from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center">
              <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
          </template>
          
          <p class="text-gray-600 mb-6 leading-relaxed">
            ⚡ <strong>Optimisation de la performance</strong> et amélioration de l'existant. 
            Audit complet et <strong>solutions sur mesure</strong> pour accélérer vos applications.
          </p>
          
          <div class="space-y-3 mb-6">
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-yellow-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-yellow-600 transition-colors duration-200">Audit de performance</span>
            </div>
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-yellow-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-yellow-600 transition-colors duration-200">Optimisation SEO</span>
            </div>
            <div class="group/feature flex items-center p-3 rounded-lg hover:bg-yellow-50 transition-all duration-200">
              <div class="w-6 h-6 bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-full flex items-center justify-center mr-3 group-hover/feature:scale-110 transition-transform duration-200">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <span class="font-semibold group-hover/feature:text-yellow-600 transition-colors duration-200">Sécurité renforcée</span>
            </div>
          </div>
          
          <!-- <template #action>
            <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-lg p-4">
              <p class="text-sm font-semibold text-yellow-800 mb-1">À partir de 800€</p>
              <p class="text-xs text-yellow-600">Audit détaillé et plan d'action</p>
            </div>
          </template> -->
        </AnimatedCard>
      </div>
    </SectionContainer>

    <!-- Processus de travail -->
    <SectionContainer 
      variant="accent" 
      size="xl" 
      title="🔄 Mon Processus de Travail"
      subtitle="Une méthode éprouvée pour garantir le succès de votre projet"
    >
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Étape 1 -->
        <AnimatedCard variant="primary" size="md" emoji="🎯" title="1. Analyse">
          <p class="text-gray-600 leading-relaxed">
            📋 <strong>Étude approfondie</strong> de vos besoins, objectifs et contraintes techniques pour définir la stratégie optimale.
          </p>
        </AnimatedCard>

        <!-- Étape 2 -->
        <AnimatedCard variant="success" size="md" emoji="✏️" title="2. Conception">
          <p class="text-gray-600 leading-relaxed">
            🎨 <strong>Design et architecture</strong> de la solution avec maquettes interactives et validation de l'expérience utilisateur.
          </p>
        </AnimatedCard>

        <!-- Étape 3 -->
        <AnimatedCard variant="warning" size="md" emoji="⚙️" title="3. Développement">
          <p class="text-gray-600 leading-relaxed">
            💻 <strong>Implémentation technique</strong> avec suivi régulier, tests continus et livraisons par étapes.
          </p>
        </AnimatedCard>

        <!-- Étape 4 -->
        <AnimatedCard variant="secondary" size="md" emoji="🚀" title="4. Déploiement">
          <p class="text-gray-600 leading-relaxed">
            🌐 <strong>Mise en production</strong> sécurisée avec formation, documentation et support technique inclus.
          </p>
        </AnimatedCard>
      </div>
    </SectionContainer>

    <!-- CTA Section -->
    <SectionContainer 
      variant="hero" 
      size="md" 
      title="🚀 Prêt à démarrer votre projet ?"
      subtitle="Discutons ensemble de vos besoins et transformons vos idées en réalité numérique"
    >
      <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mt-8">
        <Link 
          :href="route('contact')" 
          class="group bg-white text-blue-600 px-8 py-4 rounded-2xl font-bold text-lg hover:scale-105 hover:shadow-2xl transition-all duration-300 flex items-center space-x-3"
        >
          <span>💬 Discutons de votre projet</span>
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </Link>
        
        <div class="text-center text-blue-600">
          <p class="text-sm opacity-90 mb-2">📞 Ou appelez-moi directement</p>
          <p class="font-bold text-lg">+33 6 60 93 99 30</p>
        </div>
      </div>
      
      <!-- Statistiques -->
      <!-- <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16 max-w-4xl mx-auto">
        <div class="text-center text-white">
          <div class="text-4xl font-black mb-2 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">50+</div>
          <p class="text-blue-200">Projets réalisés</p>
        </div>
        <div class="text-center text-white">
          <div class="text-4xl font-black mb-2 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">98%</div>
          <p class="text-blue-200">Clients satisfaits</p>
        </div>
        <div class="text-center text-white">
          <div class="text-4xl font-black mb-2 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">24h</div>
          <p class="text-blue-200">Temps de réponse</p>
        </div>
      </div> -->
    </SectionContainer>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
import SectionContainer from '@/components/ui/SectionContainer.vue'
import AnimatedCard from '@/components/ui/AnimatedCard.vue'
</script>
