<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <SectionContainer 
      variant="hero" 
      size="lg" 
      title="💬 Contactez-moi"
      subtitle="Discutons de votre projet et créons ensemble quelque chose d'exceptionnel"
      :pattern="true"
    >
    </SectionContainer>

    <!-- Contact Section -->
    <SectionContainer 
      variant="accent" 
      size="xl" 
      title="🚀 Restons en contact"
      subtitle="Plusieurs moyens pour échanger et démarrer votre projet ensemble"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <!-- Informations de contact -->
        <div class="space-y-6">
          <!-- Email -->
          <AnimatedCard variant="glass" size="lg" emoji="📬" title="Email Professionnel">
            <template #icon>
              <div class="w-16 h-16 bg-gradient-to-r from-blue-100 to-blue-200 rounded-xl flex items-center justify-center">
                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
              </div>
            </template>
            
            <div class="space-y-4">
              <!-- <p class="text-gray-600 leading-relaxed">
                📧 <strong>Contact direct et professionnel</strong> pour discuter de vos projets, 
                obtenir un devis ou poser vos questions techniques.
              </p> -->
              
              <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-4">
                <p class="font-bold text-blue-800 text-lg mb-1">julien.coudert34@gmail.com</p>
                <!-- <p class="text-sm text-blue-600">⚡ Réponse garantie sous 24h</p> -->
              </div>
            </div>
          </AnimatedCard>

          
          <!-- Réseaux Sociaux -->
          <AnimatedCard variant="glass" size="lg" emoji="🌐" title="Réseaux Sociaux">
            <template #icon>
              <div class="w-16 h-16 bg-gradient-to-r from-yellow-100 to-yellow-200 rounded-xl flex items-center justify-center">
                <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9m0 9c-5 0-9-4-9-9s4-9 9-9"></path>
                </svg>
              </div>
            </template>
            
            <div class="space-y-4">              
              <div class="flex space-x-4">
                <a href="https://www.linkedin.com/in/julien-coudert-034" 
                   class="group flex items-center space-x-2 bg-gradient-to-r from-blue-50 to-blue-100 hover:from-blue-100 hover:to-blue-200 rounded-lg p-3 transition-all duration-200">
                  <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-200">
                    <span class="text-sm font-bold">in</span>
                  </div>
                  <span class="font-semibold text-blue-800 group-hover:text-blue-900">LinkedIn</span>
                </a>
                
                <a href="https://github.com/votre-username" 
                   class="group flex items-center space-x-2 bg-gradient-to-r from-gray-50 to-gray-100 hover:from-gray-100 hover:to-gray-200 rounded-lg p-3 transition-all duration-200">
                  <div class="w-8 h-8 bg-gray-800 rounded-lg flex items-center justify-center text-white group-hover:scale-110 transition-transform duration-200">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd"></path>
                    </svg>
                  </div>
                  <span class="font-semibold text-gray-800 group-hover:text-gray-900">GitHub</span>
                </a>
              </div>
            </div>
          </AnimatedCard>
        </div>

        <!-- Formulaire de contact -->
        <div>
          <AnimatedCard variant="glass" size="lg" emoji="📝" title="Formulaire de Contact">
            <p class="text-gray-600 mb-6 leading-relaxed">
              📝 <strong>Parlez-moi de votre projet</strong> en détail. Plus vous me donnez d'informations, 
              plus je pourrai vous proposer une <strong>solution adaptée et personnalisée</strong>.
            </p>
            
            <form class="space-y-6">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="name" class="block text-sm font-semibold text-gray-900 mb-2">Nom complet *</label>
                  <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                    placeholder="Votre nom et prénom"
                  >
                </div>
                <div>
                  <label for="email" class="block text-sm font-semibold text-gray-900 mb-2">Email *</label>
                  <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    required
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                    placeholder="votre.email@exemple.com"
                  >
                </div>
              </div>
              
              <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                  <label for="phone" class="block text-sm font-semibold text-gray-900 mb-2">Téléphone</label>
                  <input 
                    type="tel" 
                    id="phone" 
                    name="phone"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                    placeholder="+33 6 60939930"
                  >
                </div>
                <div>
                  <label for="budget" class="block text-sm font-semibold text-gray-900 mb-2">Budget prévisionnel</label>
                  <select 
                    id="budget" 
                    name="budget"
                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                  >
                    <option value="">Sélectionnez une fourchette</option>
                    <option value="500-1500">500€ - 1 500€</option>
                    <option value="1500-3000">1 500€ - 3 000€</option>
                    <option value="3000-5000">3 000€ - 5 000€</option>
                    <option value="5000+">5 000€ et plus</option>
                  </select>
                </div>
              </div>
              
              <div>
                <label for="project" class="block text-sm font-semibold text-gray-900 mb-2">Type de projet *</label>
                <select 
                  id="project" 
                  name="project" 
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300"
                >
                  <option value="">Choisissez le type de projet</option>
                  <option value="site-vitrine">Site vitrine</option>
                  <option value="e-commerce">E-commerce</option>
                  <option value="application-web">Application web</option>
                  <option value="optimisation">Optimisation existant</option>
                  <option value="autre">Autre</option>
                </select>
              </div>
              
              <div>
                <label for="message" class="block text-sm font-semibold text-gray-900 mb-2">Décrivez votre projet *</label>
                <textarea 
                  id="message" 
                  name="message" 
                  rows="6" 
                  required
                  class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 hover:border-blue-300 resize-none"
                  placeholder="Décrivez votre projet, vos objectifs, vos contraintes, et tout ce qui pourrait m'aider à mieux comprendre vos besoins..."
                ></textarea>
              </div>
              
              <div class="flex items-center">
                <input 
                  type="checkbox" 
                  id="consent" 
                  name="consent" 
                  required
                  class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                >
                <label for="consent" class="ml-2 text-sm text-gray-600">
                  J'accepte que mes données soient utilisées pour me recontacter concernant ma demande *
                </label>
              </div>
              
              <button 
                type="submit"
                class="group w-full bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-bold py-4 px-8 rounded-xl transition-all duration-300 hover:scale-105 hover:shadow-xl flex items-center justify-center space-x-3"
              >
                <span>🚀 Envoyer ma demande</span>
                <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                </svg>
              </button>
            </form>
          </AnimatedCard>
        </div>
      </div>
    </SectionContainer>

    <!-- Disponibilité -->
    <SectionContainer 
      variant="accent" 
      size="lg" 
      title="📅 Ma Disponibilité"
      subtitle="Informations pratiques pour planifier notre collaboration"
    >
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <AnimatedCard variant="success" size="md" emoji="⏰" title="Horaires">
          <div class="space-y-3 text-center">
            <p class="font-semibold text-gray-800">Lundi - Vendredi</p>
            <p class="text-2xl font-bold text-green-600">9h - 18h</p>
            <p class="text-sm text-gray-600">Réponse rapide garantie</p>
          </div>
        </AnimatedCard>
        
        <AnimatedCard variant="warning" size="md" emoji="📍" title="Localisation">
          <div class="space-y-3 text-center">
            <p class="font-semibold text-gray-800">Hérault, France</p>
            <p class="text-2xl font-bold text-yellow-600">🏠 + 🌍</p>
            <p class="text-sm text-gray-600">Sur site ou à distance</p>
          </div>
        </AnimatedCard>
        
        <AnimatedCard variant="primary" size="md" emoji="📈" title="Projets">
          <div class="space-y-3 text-center">
            <p class="font-semibold text-gray-800">Actuellement</p>
            <p class="text-2xl font-bold text-blue-600">✅ Disponible</p>
            <p class="text-sm text-gray-600">Nouveaux projets acceptés</p>
          </div>
        </AnimatedCard>
      </div>
    </SectionContainer>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
import SectionContainer from '@/components/ui/SectionContainer.vue'
import AnimatedCard from '@/components/ui/AnimatedCard.vue'
</script>
