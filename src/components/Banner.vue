<template>
  <div class="banner">
    <div class="banner-text">
     <h1 class="responsive-headline" style="font-size: 71.3px;">Johnatan Ívini </h1>
      <h2>Desenvolvedor & Especialista em Sistemas PHP</h2>
      <hr />
    </div>
    <ListaRedesSociais class="social" />
  </div>
</template>

<script>
import ListaRedesSociais from "./ListaRedesSociais"

export default {
  components: {
    ListaRedesSociais
  }
};
</script>
