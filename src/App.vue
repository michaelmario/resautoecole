<template>
  <Header />
  <HelloWorld />
  <LaTeamCarWash />
  <Footer />
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
import Header from './components/HeaderCarWash.vue'
import LaTeamCarWash from'./components/LaTeamCarWash.vue'
import Footer from './components/FooterCarWash.vue'
export default {
  name: 'App',
  components: {
    Header,
    HelloWorld,
    LaTeamCarWash,
    Footer
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
   color: #2c3e50;
}

</style>
