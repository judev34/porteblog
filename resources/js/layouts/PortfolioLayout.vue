<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Scroll Progress Indicator -->
    <div class="fixed top-0 left-0 w-full h-1 bg-gray-200 z-50">
      <div 
        class="h-full bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 transition-all duration-300 ease-out"
        :style="{ width: scrollProgress + '%' }"
      ></div>
    </div>
    
    <!-- Navigation -->
    <nav 
      :class="{
        'bg-white/95 backdrop-blur-md shadow-lg border-b border-gray-100': isScrolled,
        'bg-transparent border-b border-transparent': !isScrolled
      }"
      class="sticky top-0 z-40 transition-all duration-500 ease-out"
    >
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <!-- Logo/Nom -->
          <div class="flex-shrink-0">
            <Link :href="route('home')" class="group flex items-center space-x-2">
              <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center group-hover:scale-110 group-hover:rotate-12 transition-all duration-300">
                <span class="text-white font-black text-lg">CJ</span>
              </div>
              <span class="text-xl font-black bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent group-hover:from-blue-600 group-hover:to-purple-600 transition-all duration-300">
                CJ develop
              </span>
            </Link>
          </div>

          <!-- Menu Desktop -->
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <Link
                v-for="item in navigation"
                :key="item.name"
                :href="route(item.route)"
                :class="[
                  isCurrentRoute(item.route)
                    ? 'bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg scale-105'
                    : 'text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600 hover:scale-105',
                  'px-4 py-2 rounded-xl text-sm font-semibold transition-all duration-300 ease-out hover:shadow-md transform relative overflow-hidden'
                ]"
              >
                <span class="relative z-10">{{ item.name }}</span>
                <div class="absolute inset-0 bg-gradient-to-r from-blue-600/10 to-purple-600/10 opacity-0 hover:opacity-100 transition-opacity duration-300"></div>
              </Link>
            </div>
          </div>

          <!-- Menu Mobile Button -->
          <div class="md:hidden">
            <button
              @click="mobileMenuOpen = !mobileMenuOpen"
              type="button"
              class="group relative w-12 h-12 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center text-white hover:scale-110 hover:shadow-lg transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
            >
              <span class="sr-only">Ouvrir le menu principal</span>
              <!-- Hamburger animé -->
              <div class="relative w-6 h-6">
                <span 
                  :class="{
                    'rotate-45 translate-y-2': mobileMenuOpen,
                    'rotate-0 translate-y-0': !mobileMenuOpen
                  }"
                  class="absolute top-1 left-0 w-6 h-0.5 bg-white transform transition-all duration-300 ease-out origin-center"
                ></span>
                <span 
                  :class="{
                    'opacity-0 scale-0': mobileMenuOpen,
                    'opacity-100 scale-100': !mobileMenuOpen
                  }"
                  class="absolute top-3 left-0 w-6 h-0.5 bg-white transform transition-all duration-300 ease-out"
                ></span>
                <span 
                  :class="{
                    '-rotate-45 -translate-y-2': mobileMenuOpen,
                    'rotate-0 translate-y-0': !mobileMenuOpen
                  }"
                  class="absolute top-5 left-0 w-6 h-0.5 bg-white transform transition-all duration-300 ease-out origin-center"
                ></span>
              </div>
            </button>
          </div>
        </div>
      </div>

      <!-- Menu Mobile -->
      <div 
        :class="{ 
          'opacity-100 translate-y-0': mobileMenuOpen, 
          'opacity-0 -translate-y-4 pointer-events-none': !mobileMenuOpen 
        }" 
        class="md:hidden absolute top-full left-0 w-full bg-white/95 backdrop-blur-md shadow-xl border-t border-gray-100 transition-all duration-300 ease-out"
      >
        <div class="px-4 py-6 space-y-2">
          <Link
            v-for="(item, index) in navigation"
            :key="item.name"
            :href="route(item.route)"
            :class="[
              isCurrentRoute(item.route)
                ? 'bg-gradient-to-r from-blue-600 to-purple-600 text-white shadow-lg'
                : 'text-gray-600 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-blue-600',
              'block px-6 py-4 rounded-xl text-base font-semibold transition-all duration-300 ease-out hover:scale-105 hover:shadow-md transform'
            ]"
            :style="{ transitionDelay: mobileMenuOpen ? (index * 50) + 'ms' : '0ms' }"
            @click="mobileMenuOpen = false"
          >
            <span class="flex items-center space-x-3">
              <span class="w-2 h-2 bg-current rounded-full opacity-60"></span>
              <span>{{ item.name }}</span>
            </span>
          </Link>
        </div>
      </div>
    </nav>

    <!-- Contenu principal -->
    <main>
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
      <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div>
            <h3 class="text-lg font-semibold mb-4">Contact</h3>
            <p class="text-gray-300">
              Développeur Web Full Stack
            </p>
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-4">Navigation</h3>
            <ul class="space-y-2">
              <li v-for="item in navigation" :key="item.name">
                <Link
                  :href="route(item.route)"
                  class="text-gray-300 hover:text-white transition-colors duration-200"
                >
                  {{ item.name }}
                </Link>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="text-lg font-semibold mb-4">Réseaux sociaux</h3>
            <div class="flex space-x-4">
              <!-- Liens sociaux à personnaliser -->
              <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">
                LinkedIn
              </a>
              <a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">
                GitHub
              </a>
            </div>
          </div>
        </div>
        <div class="mt-12 pt-8 border-t border-gray-700 text-center">
          <div class="mb-6">
            <p class="text-lg font-semibold text-white mb-2">
              💫 Créons ensemble votre prochain projet digital
            </p>
            <p class="text-gray-300 max-w-2xl mx-auto">
              Passionné par l'innovation et l'excellence technique, je transforme vos idées en solutions web performantes et élégantes.
            </p>
          </div>
          <!-- <div class="flex justify-center space-x-6 mb-6">
            <div class="text-center">
              <div class="text-2xl font-bold text-blue-400">3+</div>
              <div class="text-sm text-gray-400">Années d'expérience</div>
            </div>
            <div class="text-center">
              <div class="text-2xl font-bold text-purple-400">50+</div>
              <div class="text-sm text-gray-400">Projets réalisés</div>
            </div>
            <div class="text-center">
              <div class="text-2xl font-bold text-pink-400">100%</div>
              <div class="text-sm text-gray-400">Satisfaction client</div>
            </div>
          </div> -->
          <p class="text-gray-300 text-sm">
            © {{ new Date().getFullYear() }} Mon Portfolio. Développé avec ❤️ et Laravel + Vue.js
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'
import { route } from 'ziggy-js'

const page = usePage()

// Navigation state
const scrollProgress = ref(0)
const isScrolled = ref(false)

// Scroll progress calculation
const updateScrollProgress = () => {
  const scrollTop = window.scrollY
  const docHeight = document.documentElement.scrollHeight - window.innerHeight
  const scrollPercent = (scrollTop / docHeight) * 100
  scrollProgress.value = Math.min(Math.max(scrollPercent, 0), 100)
  isScrolled.value = scrollTop > 50
}

// Smooth scroll to section
const scrollToSection = (sectionId: string) => {
  const element = document.getElementById(sectionId)
  if (element) {
    element.scrollIntoView({ 
      behavior: 'smooth',
      block: 'start'
    })
  }
}

// Lifecycle hooks
onMounted(() => {
  window.addEventListener('scroll', updateScrollProgress, { passive: true })
  updateScrollProgress()
})

onUnmounted(() => {
  window.removeEventListener('scroll', updateScrollProgress)
})
const mobileMenuOpen = ref(false)

const navigation = [
  { name: 'Accueil', route: 'home' },
  { name: 'Mon Parcours', route: 'parcours' },
  { name: 'Expériences', route: 'experiences' },
  { name: 'Réalisations', route: 'realisations' },
  { name: 'Services', route: 'services' },
  { name: 'Contact', route: 'contact' }
]

const isCurrentRoute = (routeName: string) => {
  // Utilisation de la méthode Ziggy recommandée par Laravel Jetstream
  return route().current(routeName)
}
</script>
