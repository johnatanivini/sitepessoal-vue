<template>
  <div>
    <Home />
    <About />
    <Resume />
    <Servicos />
    <Portfolio />
    <Contato />
    <Footer />
  </div>
</template>

<script>
import Home from "./components/Home";
import About from "./components/About";
import Resume from "./components/Resume";
import Servicos from "./components/Servicos";
import Portfolio from "./components/Portfolio";
import Footer from "./components/Footer";
import Contato from "./components/Contato";

export default {
  components: {
    Home,
    About,
    Resume,
    Servicos,
    Portfolio,
    Footer,
    Contato
  }
};
</script>
