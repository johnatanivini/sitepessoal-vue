<template>
  <div>
    <Home />
    <About />
    <Footer />
  </div>
</template>

<script>
import Home from "./components/Home";
import About from "./components/About";
import Footer from "./components/Footer";

export default {
  components: {
    Home,
    About,
    Footer
  }
};
</script>
