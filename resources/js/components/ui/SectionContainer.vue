<template>
  <section 
    :class="[
      'relative overflow-hidden',
      paddingClass,
      backgroundClass
    ]"
  >
    <!-- Background Pattern (optionnel) -->
    <div 
      v-if="pattern"
      class="absolute inset-0 opacity-5"
      :class="patternClass"
    ></div>
    
    <!-- Content Container -->
    <div 
      :class="[
        'relative z-10',
        containerClass
      ]"
    >
      <!-- Header Section -->
      <div 
        v-if="title || subtitle"
        :class="[
          'text-center mb-16',
          headerSpacing
        ]"
      >
        <h2 
          v-if="title"
          :class="[
            'font-black mb-6',
            titleSize,
            titleColor
          ]"
        >
          {{ title }}
        </h2>
        <p 
          v-if="subtitle"
          :class="[
            'max-w-3xl mx-auto font-light tracking-wide',
            subtitleSize,
            subtitleColor
          ]"
        >
          {{ subtitle }}
        </p>
      </div>
      
      <!-- Main Content Slot -->
      <slot />
    </div>
  </section>
</template>

<script setup lang="ts">
import { computed } from 'vue'

interface Props {
  title?: string
  subtitle?: string
  variant?: 'default' | 'hero' | 'accent' | 'dark'
  size?: 'sm' | 'md' | 'lg' | 'xl'
  pattern?: boolean
}

const props = withDefaults(defineProps<Props>(), {
  variant: 'default',
  size: 'lg',
  pattern: false
})

// Computed classes based on props
const paddingClass = computed(() => {
  const sizes = {
    sm: 'py-12',
    md: 'py-16', 
    lg: 'py-20',
    xl: 'py-24'
  }
  return sizes[props.size]
})

const backgroundClass = computed(() => {
  const variants = {
    default: 'bg-white',
    hero: 'bg-gradient-to-br from-blue-50 via-white to-purple-50',
    accent: 'bg-gradient-to-br from-blue-100 via-purple-50 to-pink-100',
    dark: 'bg-gradient-to-br from-gray-900 to-gray-800 text-white'
  }
  return variants[props.variant]
})

const containerClass = computed(() => {
  return 'max-w-7xl mx-auto px-4 sm:px-6 lg:px-8'
})

const headerSpacing = computed(() => {
  return props.size === 'xl' ? 'mb-20' : 'mb-16'
})

const titleSize = computed(() => {
  const variants = {
    default: 'text-4xl md:text-5xl',
    hero: 'text-5xl md:text-7xl lg:text-8xl',
    accent: 'text-4xl md:text-6xl',
    dark: 'text-4xl md:text-5xl'
  }
  return variants[props.variant]
})

const titleColor = computed(() => {
  const variants = {
    default: 'bg-gradient-to-r from-gray-900 to-gray-700 bg-clip-text text-transparent',
    hero: 'bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent',
    accent: 'bg-gradient-to-r from-purple-600 to-blue-600 bg-clip-text text-transparent',
    dark: 'text-white'
  }
  return variants[props.variant]
})

const subtitleSize = computed(() => {
  const variants = {
    default: 'text-lg md:text-xl',
    hero: 'text-xl md:text-3xl lg:text-4xl',
    accent: 'text-lg md:text-2xl',
    dark: 'text-lg md:text-xl'
  }
  return variants[props.variant]
})

const subtitleColor = computed(() => {
  const variants = {
    default: 'text-gray-600',
    hero: 'text-gray-700',
    accent: 'text-gray-600',
    dark: 'text-gray-300'
  }
  return variants[props.variant]
})

const patternClass = computed(() => {
  return 'bg-gradient-to-br from-blue-500/10 to-purple-500/10'
})
</script>
