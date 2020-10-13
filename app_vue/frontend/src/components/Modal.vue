<template>
 
      <div :id="'modal-'+index" class="popup-modal" style="display:none">
        <div style="margin:0 auto; max-width:550px; background:#fff">  
        <img class="scale-with-grid" :src="dados.imagem" :alt="dados.title" />
        <div class="description-box">
          <p class="title">{{dados.title}}</p>
          <p>{{dados.descricao}}</p>
          <span class="categories">
            <i class="fa fa-tag"></i>
            {{dados.tags}}
          </span>
        </div>
        <div class="link-box">
          <a v-show="dados.url !== ''? true : false" :href="dados.url" target="_blank">Detalhes</a>

          <a class="popup-modal-dismiss">Fechar</a>
        </div>
        </div>
      </div>
  
  <!-- modal-01 End -->
</template>

<script>
export default {
  props: ["dados", "index"]
};
</script>