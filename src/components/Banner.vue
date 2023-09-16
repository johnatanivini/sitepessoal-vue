<template>
  <div class="banner">
    <div class="banner-text">
     <h1 class="responsive-headline" style="font-size: 71.3px;">Johnatan Ívini </h1>
      <h2>Desenvolvedor Fullstack PHP</h2>
      <p>Tecnólogo em Gestão de Tecnologia da Informação - FATENE</p>
      <p>
        Pós graduado em Análise, Projeto e Gerência de Sistemas da Informação -
        ESTACIO
      </p>
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
