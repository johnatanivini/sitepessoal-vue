// nuxt.config.ts
export default defineNuxtConfig({
  compatibilityDate: '2026-07-22',
  debug:true,
  future: {
    compatibilityVersion: 4
  },

  app: {
    head: {
      htmlAttrs: {
        lang: 'pt-BR'
      },
      title: 'Ivini.dev | Desenvolvedor Full Stack Sênior & Soluções Corporativas',
      meta: [
        { charset: 'utf-8' },
        { name: 'viewport', content: 'width=device-width, initial-scale=1' },
        { name: 'description', content: 'Especialista em ecossistemas PHP, migrações de legados, aplicações web de alta performance e infraestrutura robusta.' },
        { name: 'keywords', content: 'Desenvolvedor Full Stack, PHP 8, Laravel, Vue.js, Nuxt.js, Sustentação de Legados, Google Cloud, Docker, MySQL, Clean Code' },
        { name: 'author', content: 'Johnatan Ivini - Ivini.dev' },
        { name: 'robots', content: 'index, follow' },
        
        // Open Graph / Facebook
        { property: 'og:type', content: 'website' },
        { property: 'og:title', content: 'Ivini.dev | Desenvolvedor Full Stack Sênior & Soluções Corporativas' },
        { property: 'og:description', content: 'Especialista em ecossistemas PHP, migrações de legados, aplicações web de alta performance e infraestrutura robusta.' },
        { property: 'og:site_name', content: 'Ivini.dev' },
        { property: 'og:locale', content: 'pt_BR' },
        { property: 'og:url', content: 'https://ivini.dev/' },
        
        // Twitter
        { name: 'twitter:card', content: 'summary_large_image' },
        { name: 'twitter:title', content: 'Ivini.dev | Desenvolvedor Full Stack Sênior & Soluções Corporativas' },
        { name: 'twitter:description', content: 'Especialista em ecossistemas PHP, migrações de legados, aplicações web de alta performance e infraestrutura robusta.' }
      ],
      link: [
        { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
        { rel: 'canonical', href: 'https://ivini.dev/' }
      ]
    }
  },

  css: [
    '~/assets/css/main.css'
  ],

  nitro: {
    compressPublicAssets: true
  }
})
