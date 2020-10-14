require('dotenv').config()
export default {
  // Disable server-side rendering (https://go.nuxtjs.dev/ssr-mode)
  ssr: false,

  // Target (https://go.nuxtjs.dev/config-target)
  target: 'static',

  // Global page headers (https://go.nuxtjs.dev/config-head)
  head: {
    title: 'Johnatan Ívini - Desenvolvedor Web',
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' }
    ],
    link: [
      { rel: 'icon', type: 'image/png', href: '/empresa.png' }
    ]
  },

  // Global CSS (https://go.nuxtjs.dev/config-css)
  css: [
    '@/assets/css/default.css',
    '@/assets/css/layout.css',
    '@/assets/css/magnific-popup.css',
    "@/assets/css/fontello/css/fontello.css",
    "@/assets/css/font-awesome/css/font-awesome.min.css",
    '@/assets/css/media-queries.css',
    '@/assets/css/alteracoes.css',
  ],

  // Plugins to run before rendering page (https://go.nuxtjs.dev/config-plugins)
  plugins: [
  ],

  // Auto import components (https://go.nuxtjs.dev/config-components)
  components: true,

  // Modules for dev and build (recommended) (https://go.nuxtjs.dev/config-modules)
  buildModules: [
    '@nuxtjs/dotenv'
  ],

  // Modules (https://go.nuxtjs.dev/config-modules)
  modules: [
    // https://go.nuxtjs.dev/bootstrap
    'bootstrap-vue/nuxt',
    ['vue-scrollto/nuxt', { duration: 300 }],
  
    
  ],

  // Build Configuration (https://go.nuxtjs.dev/config-build)
  build: {
  },

  env: {
    API_URL: process.env.API_URL || ''
  },
  
}
