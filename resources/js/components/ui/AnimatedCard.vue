<template>
  <div 
    :class="[
      'group relative overflow-hidden rounded-xl transition-all duration-500 ease-out transform',
      'hover:scale-105 hover:-translate-y-2 hover:shadow-2xl',
      cardClass,
      borderClass
    ]"
  >
    <!-- Background Gradient Overlay -->
    <div 
      v-if="gradient"
      :class="[
        'absolute inset-0 opacity-0 group-hover:opacity-100 transition-opacity duration-300',
        gradientClass
      ]"
    ></div>
    
    <!-- Content Container -->
    <div :class="['relative z-10', paddingClass]">
      <!-- Icon/Image Section -->
      <div 
        v-if="$slots.icon"
        class="mb-6 group-hover:scale-110 group-hover:rotate-3 transition-all duration-300"
      >
        <slot name="icon" />
      </div>
      
      <!-- Title -->
      <h3 
        v-if="title"
        :class="[
          'font-black mb-4 group-hover:scale-105 transition-all duration-300',
          titleClass
        ]"
      >
        <span v-if="emoji" class="mr-2">{{ emoji }}</span>
        {{ title }}
      </h3>
      
      <!-- Content -->
      <div :class="contentClass">
        <slot />
      </div>
      
      <!-- Action Section -->
      <div 
        v-if="$slots.action"
        class="mt-6 group-hover:translate-x-1 transition-transform duration-300"
      >
        <slot name="action" />
      </div>
    </div>
    
    <!-- Hover Border Effect -->
    <div 
      class="absolute inset-0 rounded-xl border-2 border-transparent opacity-0 group-hover:opacity-20 transition-all duration-300"
      :class="borderEffectClass"
    ></div>
  </div>
</template>

<script setup lang="ts">
import { computed } from 'vue'

interface Props {
  variant?: 'default' | 'primary' | 'secondary' | 'accent' | 'success' | 'warning' | 'glass'
  title?: string
  emoji?: string
  size?: 'sm' | 'md' | 'lg'
  gradient?: boolean
  elevated?: boolean
}

const props = withDefaults(defineProps<Props>(), {
  variant: 'default',
  size: 'md',
  gradient: true,
  elevated: false
})

// Computed classes
const cardClass = computed(() => {
  if (props.variant === 'glass') {
    const elevated = props.elevated ? 'shadow-lg' : 'shadow-md'
    return `bg-white/20 backdrop-blur-md border border-white/30 ${elevated}`
  }
  const base = 'bg-white border-2 border-transparent'
  const elevated = props.elevated ? 'shadow-lg' : 'shadow-md'
  return `${base} ${elevated}`
})

const borderClass = computed(() => {
  const variants = {
    default: 'hover:border-gray-200',
    primary: 'hover:border-blue-200',
    secondary: 'hover:border-purple-200',
    accent: 'hover:border-pink-200',
    success: 'hover:border-green-200',
    warning: 'hover:border-orange-200',
    glass: 'hover:border-white/50'
  }
  return variants[props.variant]
})

const paddingClass = computed(() => {
  const sizes = {
    sm: 'p-6',
    md: 'p-8',
    lg: 'p-10'
  }
  return sizes[props.size]
})

const titleClass = computed(() => {
  const variants = {
    default: 'text-2xl md:text-3xl text-gray-900 group-hover:text-gray-700',
    primary: 'text-2xl md:text-3xl bg-gradient-to-r from-blue-600 to-blue-700 bg-clip-text text-transparent group-hover:from-blue-700 group-hover:to-blue-800',
    secondary: 'text-2xl md:text-3xl bg-gradient-to-r from-purple-600 to-purple-700 bg-clip-text text-transparent group-hover:from-purple-700 group-hover:to-purple-800',
    accent: 'text-2xl md:text-3xl bg-gradient-to-r from-pink-600 to-pink-700 bg-clip-text text-transparent group-hover:from-pink-700 group-hover:to-pink-800',
    success: 'text-2xl md:text-3xl bg-gradient-to-r from-green-600 to-green-700 bg-clip-text text-transparent group-hover:from-green-700 group-hover:to-green-800',
    warning: 'text-2xl md:text-3xl bg-gradient-to-r from-orange-600 to-orange-700 bg-clip-text text-transparent group-hover:from-orange-700 group-hover:to-orange-800',
    glass: 'text-2xl md:text-3xl text-gray-900 group-hover:text-gray-700'
  }
  return variants[props.variant]
})

const contentClass = computed(() => {
  if (props.variant === 'glass') {
    return 'text-gray-700 group-hover:text-gray-900 transition-colors duration-300'
  }
  return 'text-gray-600 group-hover:text-gray-700 transition-colors duration-300'
})

const gradientClass = computed(() => {
  const variants = {
    default: 'bg-gradient-to-br from-gray-50/50 to-gray-100/50',
    primary: 'bg-gradient-to-br from-blue-50/50 to-blue-100/50',
    secondary: 'bg-gradient-to-br from-purple-50/50 to-purple-100/50',
    accent: 'bg-gradient-to-br from-pink-50/50 to-pink-100/50',
    success: 'bg-gradient-to-br from-green-50/50 to-green-100/50',
    warning: 'bg-gradient-to-br from-orange-50/50 to-orange-100/50',
    glass: 'bg-gradient-to-br from-white/10 to-white/5'
  }
  return variants[props.variant]
})

const borderEffectClass = computed(() => {
  const variants = {
    default: 'text-gray-400',
    primary: 'text-blue-400',
    secondary: 'text-purple-400',
    accent: 'text-pink-400',
    success: 'text-green-400',
    warning: 'text-orange-400',
    glass: 'text-gray-500'
  }
  return variants[props.variant]
})
</script>
