@extends('layouts.main')

@section('body-config')
ondragstart="return false;" ondrop="return false;" style="width:100%; background: none;"
@endsection

@section('content')

<div class="background-no-game" style="position: relative">
  <!-- 1. The <iframe> (and video player) will replace this <div> tag. -->
      <div class="row" style="justify-content: center">
  <div class="col-lg-6 col-12" style="padding: 85px; margin-left: 85px">
    <div id="player">
    </div>
  </div>

</div>

<br>
  <div class="row row-cols-8" style="margin: 0">
    <div class="col-lg-3 col-10" style="background-color: rgb(15, 170, 15); border-radius: 20px; min-width: 150px; margin: 40px; text-align: center">
      <div class="d-flex flex-row my-3 mx-3" style="color: white; align-items: center; font-size: large; justify-content: center">
        <img src="{{ asset('storage/imgGames/Dices.png') }}" alt="Snow" style="width: 30px; height: auto">
        <span class="align-middle" style="margin-left: 10px;">Juegos</span>
      </div>
    </div>

    <div class="col-10"></div>
  </div>

  <div class="m-3" style="display: flex; max-width: 100%; height: 100%;">
    <div style="display: flex; height: 100%; max-width: 100%; width: 100%; flex-wrap: wrap;">
      <div class="container" style="  border: double">
        <img src="{{ asset('storage/imgGames/BlackJackBG.jpg') }}" alt="Snow">
        <a href="{{ url('/BlackJack') }}" class="btn btn-primary btn-lg active" role="button"
          aria-pressed="true">Play!</a>
      </div>
      <div class="container" style="  border: double">
        <img src="{{ asset('storage/imgGames/CrapsBG.jpg') }}" alt="Snow">
        <a href="{{ url('/Craps') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Play!</a>
      </div>
      <div class="container" style="  border: double">
        <img src="{{ asset('storage/imgGames/PokerBG.jpg') }}" alt="Snow">
        <a href="{{ url('/Poker') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Play!</a>
      </div>
      <div class="container" style="  border: double">
        <img src="{{ asset('storage/imgGames/RouletteBG.jpg') }}" alt="Snow">
        <a href="{{ url('/Roulette') }}" class="btn btn-primary btn-lg active" role="button"
          aria-pressed="true">Play!</a>
      </div>
      <div class="container" style="  border: double">
        <img src="{{ asset('storage/imgGames/FruitSlotsBG.jpg') }}" alt="Snow">
        <a href="{{ url('/SlotMachine') }}" class="btn btn-primary btn-lg active" role="button"
          aria-pressed="true">Play!</a>
      </div>
    </div>
  </div>
</div>




{{-- script para visualizar video --}}
<script>
  // 2. This code loads the IFrame Player API code asynchronously.
          var tag = document.createElement('script');

          tag.src = "https://www.youtube.com/iframe_api";

          var firstScriptTag = document.getElementsByTagName('script')[0];
          firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

          // 3. This function creates an <iframe> (and YouTube player)
          //    after the API code downloads.
          var player;
          function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
              height: '360',
              width: '95%',
              videoId: '-40w8nfsaLg',
              playerVars: { 'autoplay': 1, 'controls': 0, 'rel': 0 },
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
              }
            });
          }

          // 4. The API will call this function when the video player is ready.
          function onPlayerReady(event) {
            document.getElementById('player').style.width = '100%';
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
</script>
</div>



@endsection
