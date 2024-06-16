<script setup>
import { Carousel, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

let settings = {
  itemsToShow: 1,
  snapAlign: 'center',
}

let breakpoints = {
  // 700px and up
  700: {
    itemsToShow: 3.5,
    snapAlign: 'center',
  },
  // 1024 and up
  1024: {
    itemsToShow: 3,
    snapAlign: 'start',
  },
}
</script>

<template>
  <!-- Women Banner Section Begin -->
  <section class="women-banner spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="product-slider">
            <Carousel v-bind="settings" :breakpoints="breakpoints" :autoplay="5000" :wrap-around="true">
              <Slide v-for="slide in 5" :key="slide">
                <div class="carousel__item">
                  <div class="product-item">
                    <div class="pi-pic">
                      <img src="/img/mickey1.jpg" alt="" />
                      <ul>
                        <li class="w-icon active">
                          <RouterLink to="/cart"><i class="icon_bag_alt"></i></RouterLink>
                        </li>
                        <li class="quick-view">
                          <RouterLink to="/product">+ Quick View</RouterLink>
                        </li>
                      </ul>
                    </div>
                    <div class="pi-text">
                      <div class="catagory-name">Coat</div>
                      <a href="#">
                        <h5>Mickey Baggy</h5>
                      </a>
                      <div class="product-price">
                        $14.00
                      </div>
                    </div>
                  </div>
                </div>
              </Slide>
            </Carousel>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Women Banner Section End -->
</template>
