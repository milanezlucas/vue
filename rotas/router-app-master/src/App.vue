<template>
  <div id="app">
    <router-link :to="{ name: 'Hello' }">Home</router-link>
    <router-link to="/vue/intro/rotas/router-app-master/dist/about">About</router-link>
    <router-link to="/vue/intro/rotas/router-app-master/dist/coins/ethereum">Ethereum</router-link>
    <router-link to="/vue/intro/rotas/router-app-master/dist/coins/bitcoin">Bitcoin</router-link>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'app'
}
</script>
