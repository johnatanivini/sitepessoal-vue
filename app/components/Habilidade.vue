<template>
  <li :class="cor" class="color">
    <span :class="classe"></span>
    <em>{{ nome }}</em>
  </li>
</template>

<script>
export default {
  props: ["classe", "nome", "cor"]
};
</script>
