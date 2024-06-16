<script setup>
import { onMounted } from 'vue';

onMounted(() => {
  $(".loader").fadeOut();
  $("#preloader").delay(200).fadeOut("slow");
});
</script>

<template>
  <!-- Page Preloader -->
  <div id="preloader">
    <div class="loader"></div>
  </div>
  <!-- Page Preloader End -->
</template>
