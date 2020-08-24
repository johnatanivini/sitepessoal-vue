<template>
  <div class="banner">
    <div class="banner-text">
      <h1>Johnatan Ívini</h1>
      <h2>Desenvolvedor Fullstack PHP</h2>
      <p>Tecnólogo em Gestão de Tecnologia da Informação - FATENE</p>
      <p>
        Pós graduado em Análise, Projeto e Gerência de Sistemas da Informação -
        ESTACIO
      </p>
      <hr />
    </div>
    <ul class="social">
      <RedeSocial
        titulo="Facebook"
        icon="fa fa-facebook"
        link="https://facebook.com/johnatanivini"
      />
      <RedeSocial
        titulo="Twitter"
        icon="fa fa-twitter"
        link="https://twitter.com/johnatanivini"
      />
      <RedeSocial
        titulo="Linkedin"
        icon="fa fa-linkedin"
        link="https://linkedin.com/in/johnatanivini"
      />
      <RedeSocial
        titulo="Instagram"
        icon="fa fa-instagram"
        link="https://instagram.com/johnatanivini"
      />
    </ul>
  </div>
</template>

<script>
import RedeSocial from "./RedeSocial";

export default {
  components: {
    RedeSocial
  }
};
</script>
