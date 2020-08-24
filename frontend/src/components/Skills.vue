<template>
  <section id="skills">
    <div class="header">
      <h2>Habilidades</h2>
    </div>
    <div class="main">
      <ul class="habilidades">
        <Habilidade nome="PHP 7+" classe="php" cor="blue" />
        <Habilidade nome="Laravel 5+" classe="laravel" cor="orange" />
        <Habilidade nome="Codeigniter 3+" classe="laravel" cor="orange" />
        <Habilidade nome="PostgreSQL" classe="postgresql" cor="blueligth" />
        <Habilidade nome="Vue" classe="vue" cor="greenligth" />
        <Habilidade nome="jQuery" classe="jquery" cor="ocean" />
        <Habilidade nome="Javascript" classe="javascript" cor="yellow" />
      </ul>
    </div>
  </section>
</template>

<script>
import Habilidade from "./Habilidade";

export default {
  components: {
    Habilidade
  }
};
</script>
