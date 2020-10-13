<template>
  <section id="portfolio" style="position:relative">
    <div class="circle-section cor-branca">
    </div>
  

<div class="row">
            <div class="twelve columns collapsed">
                <h3>Confira alguns de meus trabalhos <span class="mfp-hide" v-show="false">em WordPress</span> </h3>
                <!-- portfolio-wrapper -->
              <PortfolioItens/>
        </div>
</div>
  </section>
</template>

<script>
import PortfolioItens from "./PortfolioItens";
export default {
  components: {
    PortfolioItens
  }
};
</script>
