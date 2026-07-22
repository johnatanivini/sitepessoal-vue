<template>
  <header>
    <a href="#" class="logo">Ivini<span>.dev</span></a>
    <nav>
      <a href="#servicos">Soluções</a>
      <a href="#projetos">Projetos</a>
      <a href="#stack">Tech Stack</a>
      <a href="#sobre">Diferenciais</a>
      <a href="#contato">Contato</a>
    </nav>
    <a :href="whatsappUrl" target="_blank" rel="noopener noreferrer" class="btn-cta">Fale Comigo</a>
  </header>
</template>

<script setup>
const whatsappUrl = 'https://wa.me/5585991179809?text=Ol%C3%A1%20Ivini!%20Vi%20seu%20site%20e%20gostaria%20de%20conversar%20sobre%20um%20projeto.'
</script>
