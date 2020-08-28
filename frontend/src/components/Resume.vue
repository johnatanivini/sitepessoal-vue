<template>
  <section id="resume" style="position:relative">
    <div class="circle-section  cor-marron">
    </div>
   
  <div class="row skill">
   <div class="three columns header-col">
                <h2><span>Habilidades</span> <span class="mfp-hide " v-show="false"> em WordPress, Laravel e Codeigniter</span> </h2>
            </div>
    <div class="nine columns main-col">
      <div class="habilidades">
        <ul class="skills habilidades">
          <Habilidade nome="PHP 7+" classe="php" cor="blue" />
          <Habilidade nome="Laravel 5+" classe="laravel" cor="orange" />
          <Habilidade nome="Codeigniter 3+" classe="laravel" cor="orange" />
          <Habilidade nome="PostgreSQL" classe="postgresql" cor="blueligth" />
          <Habilidade nome="Vue" classe="vue" cor="greenligth" />
          <Habilidade nome="jQuery" classe="jquery" cor="ocean" />
          <Habilidade nome="Javascript" classe="javascript" cor="yellow" />
        </ul>
      </div>
      <!-- end skill-bars -->
    </div>
    <!-- main-col end -->
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
