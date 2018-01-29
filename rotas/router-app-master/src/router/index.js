import Vue from 'vue'
import Router from 'vue-router'
import Hello from '@/components/Hello'
import About from '@/components/About'
import Coins from '@/components/Coins.vue'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/vue/intro/rotas/router-app-master/dist/',
      name: 'Hello',
      component: Hello
    },
    {
      path: '/vue/intro/rotas/router-app-master/dist/about',
      name: 'About',
      component: About
    },
    {
      path: '/vue/intro/rotas/router-app-master/dist/coins/:id',
      name: 'Coins',
      component: Coins
    }
  ]
})
