<script setup>
import { Carousel, Navigation, Pagination, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

let slides = [
  { image: '/img/hero-1.jpg', text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.' },
  { image: '/img/hero-2.jpg', text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent accumsan dictum lacinia. Nunc vel urna pretium.' },
  { image: '/img/hero-3.jpg', text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi libero ante, cursus sollicitudin libero id, imperdiet.' },
]
</script>

<template>
  <!-- Hero Section Begin -->
  <section class="hero-section">
    <div class="hero-items">
      <Carousel>
        <Slide v-for="slide in slides" :key="slide">
          <div class="single-hero-items set-bg" v-bind:style="{ 'background-image': `url(${slide.image})` }">
            <div class="container">
              <div class="row">
                <div class="col-lg-5">
                  <span>Bag,kids</span>
                  <h1>Black friday</h1>
                  <p>
                    {{ slide.text }}
                  </p>
                  <a href="#" class="primary-btn">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </Slide>

        <template #addons>
          <Navigation />
          <Pagination />
        </template>
      </Carousel>
    </div>
  </section>
  <!-- Hero Section End -->
</template>

<style>
:root {
  --vc-pgn-height: 12px;
  --vc-pgn-border-radius: 50%;
}

.carousel__pagination {
  margin: 10px 0 10px;
}
</style>
