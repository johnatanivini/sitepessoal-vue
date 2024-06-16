<template>
    <ul :class=classe>
      <RedeSocial
        titulo="Linkedin"
        icon="fa fa-linkedin"
        link="https://linkedin.com/in/johnatanivini"
      />
      <RedeSocial
        titulo="Instagram"
        icon="fa fa-instagram"
        link="https://instagram.com/johnatanivini"
      />
    </ul>
</template>

<script>
import RedeSocial from "./RedeSocial"
export default {
    props:['classe'],
    components:{
        RedeSocial
    }
}
</script>