<template>
  <header id="home">
    <Menu />
    <Banner />
    <div class="row">
      <p class="scrolldown">
        <a class="smoothscroll" v-scroll-to="'#about'" href="#about"
          ><i class="fa fa-angle-down"></i
        ></a>
      </p>
    </div>
  </header>
</template>

<script>
import Menu from "./Menu";
import Banner from "./Banner";

export default {
  components: {
    Menu,
    Banner
  }
};
</script>
