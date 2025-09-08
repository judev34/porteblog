<template>
  <PortfolioLayout>
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-green-600 to-teal-700 text-white py-16">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 bg-gradient-to-r from-white via-green-100 to-teal-200 bg-clip-text text-transparent leading-tight animate-pulse">
            Mes Expériences
          </h1>
          <p class="text-xl md:text-3xl lg:text-4xl text-green-100 max-w-4xl mx-auto font-light tracking-wide">
            Un aperçu de mon 
            <span class="font-bold text-white underline decoration-teal-300 decoration-4">parcours professionnel</span> 
            et des <span class="font-bold text-white underline decoration-green-300 decoration-4">projets</span> sur lesquels j'ai travaillé
          </p>
        </div>
      </div>
    </section>

    <!-- Expériences Section -->
    <section class="py-16 bg-white">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="space-y-12">
          <!-- Expérience 1 - Cybersécurité -->
          <div class="group bg-gradient-to-r from-gray-50 to-white rounded-xl p-8 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 transform transition-all duration-500 ease-out border-2 border-transparent hover:border-red-200 hover:from-red-50 hover:to-pink-50">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
              <div class="lg:col-span-1">
                <div class="text-sm text-gray-500 mb-2">Période</div>
                <div class="font-semibold text-gray-900 mb-4">Février 2023 - Octobre 2024</div>
                <div class="text-sm text-gray-500 mb-2">Durée</div>
                <div class="font-semibold text-blue-600 mb-4">1 an 9 mois</div>
                <div class="text-sm text-gray-500 mb-2">Secteur</div>
                <div class="font-semibold text-red-600">🔒 Cybersécurité</div>
              </div>
              <div class="lg:col-span-3">
                <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 bg-gradient-to-r from-red-600 to-pink-600 bg-clip-text text-transparent group-hover:scale-105 transform transition-all duration-300">
                  🔒 Développeur Full Stack - ZIWIT
                </h3>
                <p class="text-gray-600 mb-4">
                  Développement et maintenance de solutions de cybersécurité pour entreprises TPE/PME et grands groupes. 
                  Travail sur 4 produits cybersec disponibles en SaaS avec une équipe de 7 développeurs répartie 
                  entre les produits et le dashboard client.
                </p>
                <div class="mb-4">
                  <h4 class="font-semibold text-gray-900 mb-2">Réalisations clés :</h4>
                  <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <li><strong>Refactorisation de code</strong> et correction de bugs critiques</li>
                    <li><strong>Ajout de logs</strong> et amélioration de la gestion des erreurs</li>
                    <li><strong>Amélioration de la responsivité</strong> du dashboard client et des sites internet</li>
                    <li><strong>Création d'un micro-service</strong> de notification par mail, SMS et webhooks (UML Mermaid)</li>
                    <li><strong>Service d'exports</strong> de données d'analyses (cyberveille, détection de vulnérabilités)</li>
                    <li><strong>Amélioration UX</strong> avec ajout d'options de réglages de profil et gestion des droits</li>
                    <li><strong>Optimisation des routes API</strong> internes et externes</li>
                    <li><strong>Création de nouvelles routes</strong> et rédaction de documentation technique</li>
                    <li><strong>Optimisation des requêtes</strong> vers la base de données</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h4 class="font-semibold text-gray-900 mb-2">Stack technique :</h4>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                      <h5 class="font-medium text-gray-800 mb-2">Langages & Frameworks</h5>
                      <div class="flex flex-wrap gap-1">
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Symfony</span>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">jQuery</span>
                        <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">MySQL</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Vue.js</span>
                        <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-xs">TailwindCSS</span>
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">HTML/CSS</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">JavaScript</span>
                      </div>
                    </div>
                    <div>
                      <h5 class="font-medium text-gray-800 mb-2">Outils & Méthodologies</h5>
                      <div class="flex flex-wrap gap-1">
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">Git</span>
                        <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">Linux</span>
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Debian</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Nginx</span>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Postman</span>
                        <span class="bg-pink-100 text-pink-800 px-2 py-1 rounded text-xs">Ansible</span>
                        <span class="bg-indigo-100 text-indigo-800 px-2 py-1 rounded text-xs">Mermaid</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Expérience 2 - E-learning -->
          <div class="group bg-gradient-to-r from-gray-50 to-white rounded-xl p-8 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 transform transition-all duration-500 ease-out border-2 border-transparent hover:border-blue-200 hover:from-blue-50 hover:to-indigo-50">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
              <div class="lg:col-span-1">
                <div class="text-sm text-gray-500 mb-2">Période</div>
                <div class="font-semibold text-gray-900 mb-4">Octobre 2024 - Mars 2025</div>
                <div class="text-sm text-gray-500 mb-2">Durée</div>
                <div class="font-semibold text-blue-600 mb-4">6 mois</div>
                <div class="text-sm text-gray-500 mb-2">Secteur</div>
                <div class="font-semibold text-green-600">📚 E-learning</div>
              </div>
              <div class="lg:col-span-3">
                <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent group-hover:scale-105 transform transition-all duration-300">
                  📚 Développeur Full Stack - Learnybox
                </h3>
                <p class="text-gray-600 mb-4">
                  Développement d'une plateforme E-learning complète pour entrepreneurs et solopreneurs souhaitant diffuser leurs 
                  formations, webinaires, emailing, affiliation, etc. Intégration dans une équipe de développement existante 
                  avec montée en compétences rapide sur les technologies de l'entreprise.
                </p>
                <div class="mb-4">
                  <h4 class="font-semibold text-gray-900 mb-2">Réalisations clés :</h4>
                  <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <li><strong>Correction de bugs</strong> remontés par le support client (80% de mon travail)</li>
                    <li><strong>Ajout de logs</strong> pour améliorer le debugging et le monitoring</li>
                    <li><strong>Amélioration politique de mots de passe</strong> et sécurisation des comptes</li>
                    <li><strong>Intégration de nouvelles pages</strong> dans l'interface utilisateur</li>
                    <li><strong>Création de datatables</strong> pour l'affichage et la gestion des données</li>
                    <li><strong>Amélioration du responsive</strong> sur mobile et tablette</li>
                    <li><strong>Refactorisation requêtes EDEN SQL</strong> (code legacy) en Doctrine (dizaines de requêtes)</li>
                    <li><strong>Configuration Vite.js</strong> pour optimiser le build et les performances</li>
                    <li><strong>Amélioration vitesse de chargement</strong> des pages et optimisation frontend</li>
                    <li><strong>Rédaction documentation</strong> technique pour l'équipe</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h4 class="font-semibold text-gray-900 mb-2">Stack technique :</h4>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                      <h5 class="font-medium text-gray-800 mb-2">Langages & Frameworks</h5>
                      <div class="flex flex-wrap gap-1">
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">PHP 8</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Symfony 5</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Vue.js</span>
                        <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">MySQL</span>
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">HTML/CSS</span>
                        <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-xs">Bootstrap</span>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Eden PHP</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Markdown</span>
                      </div>
                    </div>
                    <div>
                      <h5 class="font-medium text-gray-800 mb-2">Outils & DevOps</h5>
                      <div class="flex flex-wrap gap-1">
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">GitLab</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Trello</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">Docker</span>
                        <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">AWS</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">macOS</span>
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">PHPStorm</span>
                        <span class="bg-yellow-100 text-yellow-800 px-2 py-1 rounded text-xs">Kibana</span>
                        <span class="bg-pink-100 text-pink-800 px-2 py-1 rounded text-xs">Sentry</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
                  <div class="flex">
                    <div class="flex-shrink-0">
                      <svg class="h-5 w-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <div class="ml-3">
                      <p class="text-sm text-blue-700">
                        <strong>Mission en cours</strong> - Projet actuel avec focus sur la maintenance, l'optimisation et l'évolution de la plateforme.
                      </p>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>

          <!-- Expérience 3 - Formation à distance (première expérience) -->
          <div class="group bg-gradient-to-r from-gray-50 to-white rounded-xl p-8 hover:shadow-2xl hover:scale-105 hover:-translate-y-2 transform transition-all duration-500 ease-out border-2 border-transparent hover:border-purple-200 hover:from-purple-50 hover:to-violet-50">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
              <div class="lg:col-span-1">
                <div class="text-sm text-gray-500 mb-2">Période</div>
                <div class="font-semibold text-gray-900 mb-4">Septembre 2021 - Octobre 2022</div>
                <div class="text-sm text-gray-500 mb-2">Durée</div>
                <div class="font-semibold text-blue-600 mb-4">1 an 2 mois</div>
                <div class="text-sm text-gray-500 mb-2">Secteur</div>
                <div class="font-semibold text-orange-600">🎓 Formation & RH</div>
              </div>
              <div class="lg:col-span-3">
                <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-4 bg-gradient-to-r from-purple-600 to-violet-600 bg-clip-text text-transparent group-hover:scale-105 transform transition-all duration-300">
                  🎓 Développeur Full Stack Junior - Progi-Charles
                </h3>
                <p class="text-gray-600 mb-4">
                  <strong>Première expérience professionnelle</strong> au sein d'une entreprise spécialisée dans les formations à distance 
                  pour les demandeurs d'emploi dans le secteur des services d'hygiène et propreté. 
                  Développement d'un outil ERP interne complet pour gérer l'ensemble des processus de formation, 
                  de la partie administrative au suivi des apprenants.
                </p>
                <div class="mb-4">
                  <div class="bg-orange-50 border-l-4 border-orange-400 p-4 rounded mb-4">
                    <div class="flex">
                      <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-orange-400" viewBox="0 0 20 20" fill="currentColor">
                          <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                      </div>
                      <div class="ml-3">
                        <p class="text-sm text-orange-700">
                          <strong>Intégration réussie</strong> - Recrutement de 2 développeurs dont moi, pour développer un ERP propriétaire from scratch.
                        </p>
                      </div>
                    </div>
                  </div>
                  <h4 class="font-semibold text-gray-900 mb-2">Réalisations clés :</h4>
                  <ul class="list-disc list-inside text-gray-600 space-y-1">
                    <li><strong>Création complète du Dashboard Administration</strong> avec système de gestion des droits utilisateurs</li>
                    <li><strong>Rédaction de documentation technique</strong> détaillée pour l'équipe et les utilisateurs finaux</li>
                    <li><strong>Intégration responsive</strong> desktop, tablette et mobile avec maquettes sur mesure</li>
                    <li><strong>Externalisation de la gestion via routes API</strong> pour l'ajout de contenu de formation</li>
                    <li><strong>Système de récupération de données</strong> multi-sources et synchronisation automatique</li>
                    <li><strong>Architecture modulaire</strong> permettant l'évolutivité et la maintenance facilitée</li>
                    <li><strong>Tests et débogage</strong> intensifs pour assurer la stabilité de la plateforme</li>
                    <li><strong>Formation des utilisateurs finaux</strong> et support technique post-déploiement</li>
                  </ul>
                </div>
                <div class="mb-4">
                  <h4 class="font-semibold text-gray-900 mb-2">Stack technique :</h4>
                  <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                      <h5 class="font-medium text-gray-800 mb-2">Langages & Frameworks</h5>
                      <div class="flex flex-wrap gap-1">
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-xs">Symfony</span>
                        <span class="bg-orange-100 text-orange-800 px-2 py-1 rounded text-xs">MySQL</span>
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">HTML/CSS</span>
                        <span class="bg-cyan-100 text-cyan-800 px-2 py-1 rounded text-xs">TailwindCSS</span>
                      </div>
                    </div>
                    <div>
                      <h5 class="font-medium text-gray-800 mb-2">Systèmes & Outils</h5>
                      <div class="flex flex-wrap gap-1">
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">Linux</span>
                        <span class="bg-gray-100 text-gray-800 px-2 py-1 rounded text-xs">GitLab</span>
                        <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-xs">VSCode</span>
                        <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-xs">Trello</span>
                        <span class="bg-purple-100 text-purple-800 px-2 py-1 rounded text-xs">Docker</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-green-50 border-l-4 border-green-400 p-4 rounded">
                  <div class="flex">
                    <div class="flex-shrink-0">
                      <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                    </div>
                    <div class="ml-3">
                      <p class="text-sm text-green-700">
                        <strong>Projet fondateur</strong> - Cette première expérience m'a permis d'acquérir une solide base en développement full-stack 
                        et en gestion de projet, posant les fondations de mon expertise actuelle.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-green-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
          Découvrez mes réalisations
        </h2>
        <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">
          Explorez les projets concrets que j'ai développés
        </p>
        <Link
          :href="route('realisations')"
          class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200"
        >
          Voir mes réalisations
        </Link>
      </div>
    </section>
  </PortfolioLayout>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3'
import PortfolioLayout from '@/layouts/PortfolioLayout.vue'
</script>
