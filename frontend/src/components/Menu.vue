<template>

  <nav id="nav-wrap" class="" style="display: block;">
        <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
        <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" v-scroll-to="'#home'" href="#home">Home</a></li>
            <li class=""><a class="smoothscroll" v-scroll-to="'#sobre-mim'" href="#sobre-mim">Sobre</a></li>
            <!-- <li class=""><a class="smoothscroll" href="#curriculo">Currículo</a></li> -->
            <li class=""><a class="smoothscroll" v-scroll-to="'#portfolio'" href="#portfolio">Trabalhos</a></li>
            <!--<li><a class="smoothscroll" href="#testimonials">Testimonials</a></li>-->
            <li class=""><a class="smoothscroll" href="#contato" v-scroll-to="'#contato'">Contato</a></li>
        </ul> <!-- end #nav -->
    </nav>

</template>


