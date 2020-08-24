<template>
  <div>
    <Home />
    <About />
    <Skills />
    <Servicos />
    <Portfolio />
  </div>
</template>

<script>
import Home from "./components/Home";
import About from "./components/About";
import Skills from "./components/Skills";
import Servicos from "./components/Servicos";
import Portfolio from "./components/Portfolio";

export default {
  components: {
    Home,
    About,
    Skills,
    Servicos,
    Portfolio
  }
};
</script>
