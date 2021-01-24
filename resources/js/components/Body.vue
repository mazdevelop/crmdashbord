<template>
  <div id="body" class="grid grid-cols-5 gap-2 h-full">
    <LeftBody />
    <RightBody />
  </div>
</template>
<script>
import LeftBody from "./LeftBody";
import RightBody from "./RightBody";
export default {
  components: {
    LeftBody,
    RightBody,
  },
};
</script>
<style>
</style>