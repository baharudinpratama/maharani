<script setup>
import { Carousel, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

let logos = [
  { image: '/img/logo-carousel/logo-1.png' },
  { image: '/img/logo-carousel/logo-2.png' },
  { image: '/img/logo-carousel/logo-3.png' },
  { image: '/img/logo-carousel/logo-4.png' },
  { image: '/img/logo-carousel/logo-5.png' },
]
</script>

<template>
  <!-- Partner Logo Section Begin -->
  <div class="partner-logo">
    <div class="container">
      <div class="logo-carousel">
        <Carousel :items-to-show="5" :mouse-drag="false" :touch-drag="false">
          <Slide v-for="logo in logos" :key="logo">
            <div class="logo-item">
              <div class="tablecell-inner">
                <img :src="logo.image" alt="" />
              </div>
            </div>
          </Slide>
        </Carousel>
      </div>
    </div>
  </div>
  <!-- Partner Logo Section End -->
</template>
