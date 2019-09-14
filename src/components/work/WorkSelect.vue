<template>
  <div id="workselect">
    <div class="head-video">
      <h2>{{ videoSelected.title}}</h2>
      <div>
        <h4>{{ videoSelected.entreprise}}</h4>
        <span>{{ videoSelected.annee}}</span>
      </div>
    </div>

    <iframe :src="videoSelected.link" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="content-info">
      <div class="all-info">
        <div class="width-info">
          <div class="info">
            <h4>Type de vidéo</h4>
            <span>{{ videoSelected.description}}</span>
          </div>
          <div>

            <div class="info">
              <h4>Intervention(s) dans la création de la vidéo</h4>
              <h5 v-if="videoSelected.tournage">Tournage :</h5>
              <span v-if="videoSelected.tournage" v-for="tournage in videoSelected.tournage">{{tournage}}</span>
            </div>
            <div class="info">
              <h5 v-if="videoSelected.postprod">Post Production :</h5>
              <span  v-if="videoSelected.postprod" v-for="postprod in videoSelected.postprod">{{postprod}}</span>
            </div>
          </div>
        </div>
        <aside>
          <h4>Demande</h4>
          <p> {{ videoSelected.demande}}</p>
        </aside>
      </div>
    </div>
  </div>
</template>

<script>
  import json from '@/assets/json/data.json'
  export default {
    name: 'WorkSelect',
    data(){
      return{
        videos: json.video,
        videoSelected: [],
        id : this.$route.params.id
      }
    },
    created() {
      console.log(this.id)
      this.selectvideo()
      var tag = document.createElement('script');
      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('player', {
          height: '360',
          width: '640',
          videoId: 'M7lc1UVf-VE',
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });
      }
      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.playVideo();
      }
      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
    },
    methods:{
      selectvideo(){
        this.videos.map((item)=> {
          if(item._id == this.$route.params.id){
            this.videoSelected = item
          }
          console.log(this.videoSelected)
        })
      }
    }
  }
</script>

<style>
  iframe{
    display: block;
    margin: 2vh auto 5vh auto;
    min-height: 80vh;
    width: 70%;
  }
  .head-video{
    display: flex;
    margin: auto;
    color: #a30841;
    justify-content: space-between;
    width: 70%;
  }
  #workselect span{
    display: block;
  }
  #workselect h2{
    font-size: 1.8vw;
  }
  #workselect .content-info{
    width: 70%;
    margin: auto;
  }
  .info{
    margin: 2vh 0 2vh 0;
  }
  .info h5, .info h4{
    margin: 1vh 0 1vh 0;
  }
  .all-info{
    display: flex;
    justify-content: space-between;
  }
  aside{
    width: 30%;
  }
  aside h4{
    margin-bottom: 2vh;
  }
  .width-info{
    width: 60%;
  }
  @media screen and (min-width: 768px) and (max-width : 1024px){
    iframe{
      width: 80vw;
      height: 47vw;
      max-height: 47vw;
      min-height: 47vw;
    }
    #workselect .content-info {
      width: 80%;
    }
    .head-video{
      width: 80%;
      margin-top: 2vh;
    }
    #workselect h2{
      font-size: 3vw;
      margin-bottom: 0;
    }
    .info h4 {
      margin: 0 0 1vh 0;
    }
    .info{
      margin-top: 0;
    }

  }
  @media screen and (max-width: 767px){
    iframe{
      width: 100vw;
      height: 67vw;
      max-height: 67vw;
      min-height: 67vw;
    }
    .head-video{
      width: 90%;
      margin-top: 2vh;
    }
    #workselect h2{
      font-size: 5vw;
      width: 55%   }
    .info h4 {
      margin: 0 0 1vh 0;
    }
    .info{
      margin-top: 0;
    }
    #workselect .content-info {
      width: 90%;
      margin: auto;
    }
    .all-info{
      display: block;
    }
    .width-info, aside{
      width: 100%;
    }
  }
</style>
