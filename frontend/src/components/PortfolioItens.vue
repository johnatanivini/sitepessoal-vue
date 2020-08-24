<template>
  <section id="portfolio-wrapper">
    <div
      class="portfolio-item"
      v-for="(item, index) in itens"
      :key="item.title"
    >
      <div class="item-wrap">
        <a :href="'#modal-' + index" :title="item.title">
          <img :src="item.imagem" :alt="item.title" />
          <div class="overlay">
            <div class="portfolio-item-meta">
              <p class="title">{{ item.title }}</p>
              <p>{{ item.tags }}</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      itens: []
    };
  },
  mounted() {
    
  }
};
</script>
