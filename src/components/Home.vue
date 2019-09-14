<template>
  <div>
    <video loop autoplay muted>
      <source src="@/assets/video/video.mp4" type="video/mp4">
    </video>
    <section>
      <div class="background-gif" role="img">
        <div class="bord">

          <div class="flex">
            <div id="myid" class="first-info" role="contentinfo">
              <div>
                <h2>Qui suis-je ?</h2>
                <p>
                  Disposant d’un diplôme chef de projet multimédia, spécialité motion design, j’ai décidé de me lancer en auto entepreneur en tant que motion designer, mais pas seulement !<br>
                  Toute la statégie, le message passé au travers des vidéos est nécessaire à mes yeux pour une vidéo impactante, je peux donc vous aider sur ce sujet !
                </p>
                <div id="cv" class="contain-cta">
                  <a class="cta" href="http://louison-hipeau.fr/img/cv/CV_Louison-Hipeau.pdf" target="_blank">Télécharger mon CV</a>
                </div>

              </div>
            </div>
            <div class="gif-coucou" role="img">
              <img src="@/assets/img/test/coucou.gif" alt="">
            </div>
          </div>

          <div class="contain-randb">
            <div>
              <div class="rose"></div>
              <div class="black"></div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section class="section-2">
      <div class="background-gif-2" role="img">
        <div class="bord">
        <div class="contain-randb-2">
          <div>
            <div class="rose"></div>
            <div class="black"></div>
          </div>
        </div>
          <div class="gif-idee" role="img">
            <img src="@/assets/img/test/idee.gif" alt="">
          </div>
      </div>
      </div>
      <div class="text-section-2">
        <h2>Projets</h2>
        <p>
          Envie d’une vidéo pour votre communication ?<br>
          Un clip professionnel, personnel ? Une vidéo full motion design, pure captation, effets spéciaux, habillage ? Tout est possible !<br>
          Passionnée de vidéo, toute la chaîne de création m’interresse et me captive, de la réflection et la stratégie, à la conception, en passant par le tournage et en finissant par le montage !
        </p>
        <router-link class="cta" to="/work">Voir mes projets</router-link>
      </div>
    </section>
  </div>

</template>

<script>
  export default {
    data(){
      return{
        info :'',
        publicPath: process.env.BASE_URL

      }
    },

  }

</script>

<style>
  video{
    width: 100%;
  }
  section{
    margin-top: 10vh;
  }
  .background-gif{
    width: 100%;
    z-index: 1;
    overflow: hidden;
    height: 70vh;
  }
  .background-gif .bord{
    width: 90%;
    display: block;
    margin: auto;
    border: 3px solid #a30841;
    display: flex;
    overflow: hidden;
    height: 99%;
  }
  .background-gif .bord .contain-randb{
    margin-left: -20%;
    height: 100%;
    position: relative;
  }
  .background-gif .bord .contain-randb div{
    overflow: hidden;
  }
  .bord .black{
    background-color: #3f3f3f;
    width: 100vw;
    height: 70vh;
    transform:skew(45deg);
    position: absolute;
  }
  .bord .rose{
    background-color: #a30841;
    width: 100vw;
    height: 70vh;
    transform:skew(-45deg);
    position: absolute;
  }
  .background-gif-2 .bord{
    width: 100%;
    display: block;
    margin: auto;
    display: flex;
    overflow: hidden;
    height: 99%;
  }
  .background-gif-2 .contain-randb-2{
    position: relative;
  }
  .background-gif-2 .contain-randb-2 div{
    overflow: hidden;
  }
  .background-gif-2 .bord .contain-randb-2  .black{
    background-color: #3f3f3f;
    width: 100vw;
    height: 50vh;
    transform:skew(55deg);
    position: absolute;
    left: 20vw;
  }
  .background-gif-2 .bord .contain-randb-2  .rose{
    background-color: #a30841;
    width: 50vw;
    height: 70vh;
    transform:skew(-45deg);
    position: absolute;
    left: -40vw;
  }
  .first-info{
    position: relative;
    z-index: 10;
    display: flex;
    height: 100%;
    width: 60%;
  }
  .first-info div{
    margin-top: auto;
    margin-bottom: auto;
    margin-left: 10%;
    height: auto;
    left: 0;
  }
  .coucou{
    position: absolute;
    right: 10%;
    width: 36%;
  }
  .section-2{
    width: 90%;
    margin: 5vh auto;
    display: flex;
    justify-content: space-between;
  }
  .text-section-2{
    margin: auto;
    width: 40%;
  }
  .flex{
    display: flex;
    width: 100%;
    justify-content: space-between;
  }
  .gif-coucou{
    z-index: 100;
    display: flex;
  }
  .gif-coucou img{
    width: 100%;
    margin: auto;
  }
  h2{
    margin-bottom: 3vh;
    color: #3f3f3f;
  }
  .background-gif-2{
    width: 35%;
    min-height: 60vh;
  }
  .background-gif-2 img{
    width: 100%;
    position: relative;
  }
   .first-info p, .text-section-2 p{
    line-height: 4vh;
    color: #3f3f3f;
     margin-bottom: 5vh;
  }
   .fake-img{
     height: 30vh;
     width: 10vw;
     background-color: aqua;
   }
   .cta{
     border: 0;
     background-color: #a30841;
     padding: 1vw 2vw 1vw 2vw;
     color: #FFFFFF;
     border-radius: 5vw;
     margin-top: 5vh;
   }
  .gif-idee{
    width: 100%;
    position: relative;
  }
  .gif-idee img{
    width: 140%;
    position: absolute;
    left: -30%;
    bottom: 0%;
  }
  .contain-cta{
    width: 90%;
  }
  #cv{
    margin-left: 0;
    margin-bottom: 5vh;
  }
  @media screen and (min-width: 768px) and (max-width : 1024px){
    .first-info div {
      margin-left: 0%;
    }
    .contain-randb{
      display: block;
    }
    .background-gif .bord{
      border: 0;
    }
    .background-gif{
      height: auto;
      position: inherit;
    }
    .first-info{
      width: 75%;
    }
    .gif-coucou{
      width: 35%;
    }
    .gif-coucou img{
      width: 100%;
    }

    .first-info p, .text-section-2 p {
      line-height: 3vh;
      margin-bottom: 3vh;
    }
    .bord .rose{
      background-color: #a30841;
      width: 100vw;
      height: 40vh;
      transform:skew(-45deg);
      position: absolute;
    }
    .bord .black{
      height: 0;
    }
    section{
      margin-top: 5vh;
      margin-bottom: 5vh;
      height: auto;
    }
    .text-section-2 {
      width: 55%;
      margin: auto 0 auto 0;
    }
    .background-gif-2{
      max-height: 30vh;
      min-height: 20vh;
    }
    .background-gif-2 .bord .contain-randb-2 .black {
      display: none;
    }
    .background-gif-2 .bord .contain-randb-2 .rose {
      top: -70%;
    }
    .section-2{
      margin-top: 10vh;
    }
  }
  @media screen and (max-width: 767px) {
    .background-gif-2{
      display: none;
    }
    .background-gif{
      position: inherit;
      height: auto;
    }
    section{
      width: 90%;
      margin: auto;
      height: auto;
    }
    .contain-randb{
      display: none;
    }
    .text-section-2{
      width: 90%;
    }
    .first-info{
      height: auto;
      padding: 5vh 0 5vh 0;
      width: 100%;
    }
    .first-info div{
      margin: auto;
    }
    .flex{
      display: block;
    }
    .gif-coucou img {
      width: 80%;
      margin: auto;
    }
    .background-gif .bord{
      border: 0;
    }
    .gif-coucou{
      display: none;
    }
    .bord{
      width: 100%;
    }
    .cta{
      margin: auto;
      display: block;
      width: 50%;
      text-align: center;
      padding: 2vw 3vw 2vw 3vw;
    }


  }
</style>
