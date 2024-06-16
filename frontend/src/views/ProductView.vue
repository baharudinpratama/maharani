<script setup>
import { ref } from 'vue';
import { Carousel, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';
import Footer from '@/components/Footer.vue';
import Header from '@/components/Header.vue';
import RelatedProduct from '@/components/RelatedProduct.vue';

let productImage = ref('/img/mickey1.jpg');

let thumbs = [
  { url: '/img/mickey1.jpg' },
  { url: '/img/mickey2.jpg' },
  { url: '/img/mickey3.jpg' },
  { url: '/img/mickey4.jpg' },
];

function changeImage(urlImage) {
  this.productImage = urlImage;
}
</script>

<template>
  <Header></Header>

  <!-- Breadcrumb Section Begin -->
  <div class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text product-more">
            <RouterLink to="/"><i class="fa fa-home"></i> Home</RouterLink>
            <span>Detail</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Section Begin -->

  <!-- Product Shop Section Begin -->
  <section class="product-shop spad page-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6">
              <div class="product-pic-zoom">
                <img class="product-big-img" :src="productImage" alt="" />
              </div>
              <div class="product-thumbs">
                <Carousel :items-to-show="3" class="product-thumbs-track ps-slider">
                  <Slide v-for="thumb in thumbs" :key="thumb">
                    <div class="pt" @click="changeImage(thumb.url)" :class="thumb.url === productImage ? 'active' : ''">
                      <img :src="thumb.url" alt="" />
                    </div>
                  </Slide>
                </Carousel>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="product-details">
                <div class="pd-title">
                  <span>oranges</span>
                  <h3>Pure Pineapple</h3>
                </div>
                <div class="pd-desc">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, error officia.
                    Rem aperiam laborum voluptatum vel, pariatur modi hic provident eum iure natus quos
                    non a sequi, id accusantium! Autem.
                  </p>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam possimus quisquam
                    animi, commodi, nihil voluptate nostrum neque architecto illo officiis doloremque et
                    corrupti cupiditate voluptatibus error illum. Commodi expedita animi nulla
                    aspernatur.
                    Id asperiores blanditiis, omnis repudiandae iste inventore cum, quam sint molestiae
                    accusamus voluptates ex tempora illum sit perspiciatis. Nostrum dolor tenetur amet,
                    illo natus magni veniam quia sit nihil dolores.
                    Commodi ratione distinctio harum voluptatum velit facilis voluptas animi non
                    laudantium, id dolorem atque perferendis enim ducimus? A exercitationem recusandae
                    aliquam quod. Itaque inventore obcaecati, unde quam
                    impedit praesentium veritatis quis beatae ea atque perferendis voluptates velit
                    architecto?
                  </p>
                  <h4>$495.00</h4>
                </div>
                <div class="quantity">
                  <RouterLink to="/cart" class="primary-btn pd-cart">Add To Cart</RouterLink>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Product Shop Section End -->

  <RelatedProduct></RelatedProduct>

  <Footer></Footer>
</template>

<style>
.ps-slider {
  margin: 0px -5px;
}

.pt {
  margin: 0px 5px;
}
</style>
