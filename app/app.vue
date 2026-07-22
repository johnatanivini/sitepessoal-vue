<template>
  <div>
    <ClientOnly>
      <NetworkCanvas />
    </ClientOnly>
    <Menu />
    <Sections />
    <Footer />
  </div>
</template>

<script setup>
const schemaData = {
  '@context': 'https://schema.org',
  '@type': 'Person',
  'name': 'Johnatan Ivini',
  'url': 'https://ivini.dev',
  'jobTitle': 'Desenvolvedor Full Stack Sênior',
  'description': 'Especialista em ecossistemas PHP, migrações de legados, aplicações web de alta performance e infraestrutura robusta.',
  'worksFor': {
    '@type': 'Organization',
    'name': 'Ivini.dev'
  },
  'sameAs': [
    'https://wa.me/5585991179809'
  ],
  'knowsAbout': [
    'PHP 8',
    'Laravel',
    'Vue.js',
    'Nuxt.js',
    'Docker',
    'Google Cloud',
    'MySQL',
    'Clean Code',
    'Sustentação de Legados'
  ]
}

useHead({
  htmlAttrs: {
    lang: 'pt-BR'
  },
  title: 'Ivini.dev | Desenvolvedor Full Stack Sênior & Soluções Corporativas',
  script: [
    {
      type: 'application/ld+json',
      innerHTML: JSON.stringify(schemaData)
    }
  ]
})

useSeoMeta({
  title: 'Ivini.dev | Desenvolvedor Full Stack Sênior & Soluções Corporativas',
  ogTitle: 'Ivini.dev | Desenvolvedor Full Stack Sênior & Soluções Corporativas',
  description: 'Especialista em ecossistemas PHP, migrações de legados, aplicações web de alta performance e infraestrutura robusta.',
  ogDescription: 'Especialista em ecossistemas PHP, migrações de legados, aplicações web de alta performance e infraestrutura robusta.',
  ogType: 'website',
  ogUrl: 'https://ivini.dev/',
  ogLocale: 'pt_BR',
  twitterCard: 'summary_large_image',
  twitterTitle: 'Ivini.dev | Desenvolvedor Full Stack Sênior & Soluções Corporativas',
  twitterDescription: 'Especialista em ecossistemas PHP, migrações de legados, aplicações web de alta performance e infraestrutura robusta.'
})
</script>
