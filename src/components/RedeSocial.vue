<template>
  <li>
    <a :href="link" target="_blank" :title="titulo"><i :class="icon"></i></a>
  </li>
</template>

<script>
export default {
  props: ["link", "icon", "titulo"]
};
</script>
