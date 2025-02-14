import HomeView from '@/views/HomeView.vue';
import { createRouter, createWebHistory } from 'vue-router';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('@/views/AboutView.vue'),
    },
    {
      path: '/product',
      name: 'product',
      component: () => import('@/views/ProductView.vue'),
    },
    {
      path: '/cart',
      name: 'cart',
      component: () => import('@/views/ShoppingCartView.vue'),
    },
    {
      path: '/response',
      name: 'response',
      component: () => import('@/views/ResponseView.vue'),
    },
  ],
});

export default router;
