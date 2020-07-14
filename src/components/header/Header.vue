<template>
  <div>
    <nav id="nav-desk">
    <ul>
      <li>
        <router-link to="/">Home</router-link>
        <span class="line-header"></span>
      </li>

      <li>
        <router-link to="/work">Work</router-link>
        <span class="line-header"></span>
      </li>
    </ul>

    <div>
      <router-link to="/">
        <img src="@/assets/logo.svg" alt="logo">
      </router-link>
    </div>
   <ul>
     <li>
       <router-link to="/contact">Contact</router-link>
       <span class="line-header"></span>
     </li>

   </ul>


  </nav>
    <nav id="nav-mobile">
      <div>
        <router-link to="/">
          <img src="@/assets/logo.svg" alt="logo">
        </router-link>
      </div>
      <ul>
        <li>
          <router-link to="/">Home</router-link>
          <span class="line-header"></span>
        </li>
        <li>
          <router-link to="/work">Work</router-link>
          <span class="line-header"></span>
        </li>
        <li>
          <router-link to="/contact">Contact</router-link>
          <span class="line-header"></span>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
  export default {

  }
</script>
<style>

  #nav-mobile{
    display: none;
  }

  #nav-desk {
    display: flex;
    justify-content: space-between;
    padding: 1% 0 1% 0;
  }
  #nav-desk ul li{
    margin: auto;
  }
  #nav-desk ul li a{
    width: 30%;
    text-align: center;
    margin: auto;
    color: #3f3f3f;
    transition: 0.5s;
  }
  #nav-desk ul li .line-header{
    height: 3px;
    background-color: #a30841;
    width: 0;
    transition: 0.5s;
    display: block;
  }
  #nav-desk ul li:hover a {
    color: #a30841;
  }
  #nav-desk ul li:hover .line-header{
    width: 100%;
  }
  #nav-desk ul {
    display: flex;
    width: 20%;
    justify-content: space-between;
  }
  #nav-desk div{
    width: 60%;
  }
  #nav-desk div img{
    width: 30%;
    display: block;
    margin: auto;
  }
  @media screen and (max-width: 640px) {
    #nav-desk{
      display: none;
    }
    #nav-mobile{
      background-color: #ffffff;
      display: flex;
      justify-content: space-between;
      position: fixed;
      bottom: 0;
      width: 100vw;
      height: 5vh;
      padding: 1vh 0 1vh 0;
      z-index: 100;
    }
    #nav-mobile div{
      width: 38%;
    }
    #nav-mobile ul{
      width: 55%;
      display: flex;
      justify-content: space-between;
      margin-right: 2vw;
    }
    #nav-mobile ul li{
      line-height: 5vh;
      color: #3F3F3F;
    }
    #nav-mobile ul li a{
      line-height: 5vh;
      color: #3F3F3F;
      font-size: 5vw;
    }
    #nav-mobile div a{
      width: 100%;
    }
    footer{
      z-index: 2;
    }

  }
  @media screen and (min-width: 768px) and (max-width : 1024px){
      #nav-desk div img {
          width: 50%;}
  }



</style>
