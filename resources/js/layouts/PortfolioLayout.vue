<template>
  <div class="min-h-screen bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
          <!-- Logo/Nom -->
          <div class="flex-shrink-0">
            <Link :href="route('home')" class="text-xl font-bold text-gray-900">
              Mon Portfolio
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
                    ? 'bg-gray-900 text-white'
                    : 'text-gray-500 hover:bg-gray-700 hover:text-white',
                  'px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200'
                ]"
              >
                {{ item.name }}
              </Link>
            </div>
          </div>

          <!-- Menu Mobile Button -->
          <div class="md:hidden">
            <button
              @click="mobileMenuOpen = !mobileMenuOpen"
              type="button"
              class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
            >
              <span class="sr-only">Ouvrir le menu principal</span>
              <svg
                :class="{ hidden: mobileMenuOpen, block: !mobileMenuOpen }"
                class="h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <svg
                :class="{ block: mobileMenuOpen, hidden: !mobileMenuOpen }"
                class="h-6 w-6"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Menu Mobile -->
      <div :class="{ block: mobileMenuOpen, hidden: !mobileMenuOpen }" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-white border-t">
          <Link
            v-for="item in navigation"
            :key="item.name"
            :href="route(item.route)"
            :class="[
              isCurrentRoute(item.route)
                ? 'bg-gray-900 text-white'
                : 'text-gray-500 hover:bg-gray-700 hover:text-white',
              'block px-3 py-2 rounded-md text-base font-medium transition-colors duration-200'
            ]"
            @click="mobileMenuOpen = false"
          >
            {{ item.name }}
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
        <div class="mt-8 pt-8 border-t border-gray-700 text-center">
          <p class="text-gray-300">
            © {{ new Date().getFullYear() }} Mon Portfolio. Tous droits réservés.
          </p>
        </div>
      </div>
    </footer>
  </div>
</template>

<script setup lang="ts">
import { ref } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage()
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
  return page.component.startsWith('Portfolio/') && 
         (routeName === 'home' ? page.component === 'Portfolio/Home' : 
          page.url.includes(routeName.replace('home', '')))
}
</script>
