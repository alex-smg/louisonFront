<template>
  <div id="app">
    <navbar/>
    <div>
      <transition name="fade" mode="out-in">
        <router-view/>
      </transition>
    </div>
    <foot/>

  </div>
</template>

<script>
  import Navbar from './components/header/Header.vue'
  import Foot from './components/footer/Footer.vue'
export default {
  name: 'App',
  components:{
    Navbar,
    Foot
  }
}
</script>

<style>
  *{
    padding: 0;
    margin: 0;
    list-style: none;
    text-decoration: none;
    outline: none;
  }
  h1, h2, h3, h4, h5, p, li, span, footer, button, a, textarea::placeholder{
    font-family: 'Rubik', sans-serif;

  }
  .fade-enter-active,
  .fade-leave-active {
    transition-duration: 0.3s;
    transition-property: opacity;
    transition-timing-function: ease;
  }

  .fade-enter,
  .fade-leave-active {
    opacity: 0
  }

  @media screen and (max-width: 640px){
    h2{
      font-size: 5vw;
    }
  }


</style>
