<template>


  <div id="video">
    <div id="title-video">
      <h2>Work</h2>

      <div class="select">
        <div> <p>Trier</p><div class="inverse-arrow">&#8249;</div></div>

        <ul class="select-options">
          <li> <button @click="filterByDate">Dates</button></li>
        </ul>
      </div>
    </div>

    <ul id="cont-video">


      <li v-for="video in videos" :key="video._id">
        <router-link :to="'/work/'+ video._id">
          <img class="miniature" :src="video.miniature ">
          <div class="cont-title-video">
            <hr class="line-video">
            <h3 class="title-video">{{ video.title }}</h3>
            <span>{{ video.entreprise }}</span>
            <span>{{ video.date }}</span>
          </div>
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>

  import json from '@/assets/json/data.json'
  export default {
    name: 'Work',
    data(){
      return{
        videos : json.video
      }
    },

    methods:{
      filterByDate : function(){
        var copie = [];
        this.videos.forEach(function(e){
          e.annee = new Date(e.annee) /1000
          copie.push(e)
          copie.sort(function(a, b) {
            return a.annee - b.annee;
          });
        })
        this.videos = copie
        console.log(copie)

      }

    }
  }
</script>
<style>
  #title-video{
    width: 90%;
    display: flex;
    justify-content: space-between;
    margin: 5vh auto 5vh auto;
    position: relative;

  }
  #cont-video{
    width: 90%;
    margin: 0 auto 5vh auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  #cont-video li{
    width: 28vw;
    overflow: hidden;
    height: 35vh;
    margin-bottom: 2vh;
    transition: 0.5s;
    background-color: #3f3f3f;
  }
  #cont-video li a {
    width: 100%;
    height: 100%;
    display:block
  }
  .miniature{
    min-width: 100%;
    max-width: 100%;
    min-height: 100%;
    opacity: 1;
    transition: 0.8s;
  }
  #cont-video li .cont-title-video{
    position: relative;
    top: -65%;
    color: #FFFF;
    right: -100%;
    font-size: 2vw;
    opacity: 0;
    transition: 0.5s;
  }
  #cont-video li:hover .cont-title-video{
    right: -20%;
    opacity: 1;
  }
  #cont-video li:hover .miniature{
    opacity: 0.3;
  }
  #cont-video li:hover span{
    right: -50%;
    opacity: 1;
  }
  #cont-video li span{
    display: block;
    font-size: 1vw;
  }
  #cont-video li:hover{
    border-radius: 2rem;
  }
  .title-video{
    margin-bottom: 2vh;
    font-size: 1.5vw;
    width: 75%;
  }
  .line-video{

    height: 3px;
    width: 190%;
    color: #ffffff;
    background-color: #ffffff;
    border: none;
    margin-left: -20%;
    margin-bottom: 2vh;
  }
  .option-video{
    background-color: #a30841;
    border-radius: 2rem;
    padding:  0 2vh 0 2vh;
    width: 10vw;
    color: #ffffff;
    font-family: 'Rubik', sans-serif;
    border: none;
    height: 5vh;
  }
  .option-video:after {
    border-left: 2px solid;
    border-color: white;
    padding: 20%;
  }
  .select:hover .select-options {
    height: 5vh;
  }
  .select:hover .inverse-arrow{
    transform: rotate(90deg);
  }
  .select-options{
    height: 0;
    overflow: hidden;
    transition: 0.5s;
  }
  .select-options li {
    height: 5vh;
    margin: auto;
    display: flex;
  }
  .select-options li button{
    margin: auto;
    cursor: pointer;
    background-color: transparent;
    color: #FFFFFF;
    border: none;
    font-size: 0.9vw;
    text-align: center;
  }
  .select{
    background-color: #a30841;
    padding: 0.5vw 2.5vw 0.5vw 2.5vw;
    border-radius: 2em;
    color: #FFFFFF;
    height: fit-content;
    transition: 0.5s;
    position: absolute;
    right: 0;
  }
  .select div {
    display: flex;
  }
  .select p{
    line-height: 1.1vw;
  }
  .select p span{
    transform: rotate(45deg);
  }
  .inverse-arrow{
    width: fit-content;
    height: fit-content;
    transform: rotate(270deg);
    margin-left: 20%;
    font-size: 1.1vw;
    font-weight: bold;
    transition: 0.5s;
  }

  @media screen and (max-width: 640px){
    #cont-video li{
      width: 49%;
      height: 13vh;
      margin-bottom: 1vh;
    }
    .option-video{
      display: none;
    }
    #tilte-video h2{
      font-size: 8vw;
    }
    #video{
      height: 100vh;
    }
  }
  /* version tablette */
  @media screen and (min-width: 768px) and (max-width : 1024px){
    #cont-video{
      width: 90%;
      margin: 0 auto 5vh auto;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    #cont-video li{
      width: 44vw;
      overflow: hidden;
      height: 20vh;
      margin-bottom: 2vh;
      transition: 0.5s;
      background-color: #3f3f3f;
    }
    #cont-video li a {
      width: 100%;
      height: 100%;
      display:block
    }
    .option-video{
      width: auto;
      padding: 1%;
    }
    #title-video{
      margin: 2vh auto 2vh auto;
    }
    .select {
      background-color: #a30841;
      padding: 1.5vw 5vw 1.5vw 5vw;
    }
    .select p , .inverse-arrow{
      font-size: 2.2vw;
      line-height: 2.2vw;
    }
    #title-video h2{
      font-size: 4vw;
      margin-top: auto;
      margin-bottom: auto;
    }
    .select-options li button{
      font-size: 2vw;
    }
  }
  /* version mobile */
  @media screen and (max-width: 767px){
    #cont-video li {
      width: 100%;
      height: 25vh;
      margin-bottom: 2vh;
    }
    #title-video{
      margin: 5vh auto 1vh auto;
    }
    .select{
      padding: 3vw 7vw 3vw 7vw;
    }
    .select-options li button{
      font-size: 4vw;
    }
    .select p , .inverse-arrow{
      font-size: 4.5vw;
      line-height: 4.5vw;
    }
  }



</style>
