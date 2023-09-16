<template>
  <footer>
    <div class="row">
      <div class="twelve columns">
        <ListaRedesSociais classe="social-links" />
        <ul class="copyright">
          <li>© Copyright 2017 Johnatan Ívini</li>
        </ul>
      </div>
      <div id="go-top">
        <a class="smoothscroll" title="Back to Top" v-scroll-to="'#home'" href="#home">
          <i class="fa fa-angle-up"></i>
        </a>
      </div>
    </div>
  </footer>
</template>

<script>

import ListaRedesSociais from "./ListaRedesSociais";



export default {
  components: {
    ListaRedesSociais
  }
};
</script>