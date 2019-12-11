@extends('layouts.element.main')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">

  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    canvas{
         display: block;
         vertical-align: bottom; 
         width: 1125px !important;
         height: 667px !important;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }

  </style>
</head>
<body>

  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div id="particles-js">
        </div>
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-lg-6 col-md-6 text-center">
              <img class="floating img-fluid" src="{{ asset('assets/img/logo_dude2.png') }}">
              <h1 class="text-white">
                RPL Wikrama
              </h1>
            </div>
            <div class="col-md-3"></div>
          </div>
      </div>
      <div class="swiper-slide" style="background-image: url({{ asset('assets/img/horr.png') }}); background-size: cover; background-position: center;">
          <div style="height: 100%; width: 100%;">
            
            {{-- not full screen --}}
            {{-- <img style="position: absolute; left: 20px; top: 200px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; left: 60px; top: 430px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; left: 270px; top: 550px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; left: 850px; top: 550px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; right: 250px; top: 450px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; right: 70px; top: 550px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; right: 70px; top: 330px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}"> --}}

            {{-- full screen   --}}
            <img style="position: absolute; left: 20px; top: 200px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; left: 40px; top: 500px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; left: 230px; top: 610px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; left: 900px; top: 630px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; right: 200px; top: 530px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; right: 20px; top: 620px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
            <img style="position: absolute; right: 20px; top: 410px;" class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">

          </div>
      </div>
      <div class="swiper-slide bg-primary">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-2">
              <div class="text-center">
                <img class="floating img-fluid" src="{{ asset('assets/img/icons8-dancing-96.png') }}">
              </div>
              <div class="text-center mt-5" style="transform: scaleX(-1);">
                <img class="floating img-fluid"  src="{{ asset('assets/img/icons8-dancing-96.png') }}">
              </div>
            </div>
            <div class="col-lg-8 col-md-8 text-center">
              <img class="floating mb-5" width="500" height="300" src="{{ asset('assets/img/laptop-frame.png') }}">
              <h1 class="display-1 text-white font-summmerVibes text-center">
                Game coin coin
              </h1>
            </div>
            <div class="col-md-2">
              <div class="text-center">
                <img class="floating img-fluid" src="{{ asset('assets/img/icons8-dancing-96.png') }}">
              </div>
              <div class="text-center mt-5" style="transform: scaleX(-1);">
                <img class="floating img-fluid"  src="{{ asset('assets/img/icons8-dancing-96.png') }}">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide bg-primary">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-6 col-md-6 text-center">
              <img class="floating" width="350" height="250" src="{{ asset('assets/img/table-horizontal-frame.png') }}">
            </div>
            <div class="col-lg-6 col-md-6">
              <h2 class="display-1 text-center text-white font-summmerVibes">
                Game kedip kedip
              </h2>
              <div class="text-center mt-2">
                <img class="floating img-fluid" src="{{ asset('assets/img/icons8-eye-96.png') }}">
                <img class="floating img-fluid" src="{{ asset('assets/img/icons8-eye-96.png') }}">
              </div>
              <div class="text-center">
                <img class="floating img-fluid" src="{{ asset('assets/img/icons8-game-controller-80.png') }}">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide bg-primary">
        <div class="container">
          <div class="row pb-7">
            <div class="col-md-3 text-center">
              <h1 class="display-2 text-white font-weight-light font-summmerVibes">
                Filter Instgram
              </h1>
              <div class="text-center mt-5">
                <img class="floating" width="100" height="100" src="{{ asset('assets/img/icons8-sun-480.png') }}">
                <img class="floating" width="50" height="50" src="{{ asset('assets/img/icons8-sun-480.png') }}">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
              <img class="floating" width="200" height="270" src="{{ asset('assets/img/table-vertical-frame.png') }}">
            </div>
            <div class="col-md-3">
              <div class="text-center">
                <img class="floating img-fluid" src="{{ asset('assets/img/icons8-spring-80.png') }}">
                <img class="floating" width="50" height="50" src="{{ asset('assets/img/icons8-spring-80.png') }}">
              </div>
              <h1 class="display-2 mt-5 text-right text-white font-weight-light font-summmerVibes">
                Nama Filternya
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide bg-primary">
        <div class="container">
          <div class="row text-center">
            <div class="col-lg-12 col-md-12">
              <h1 class="display-1 text-white">
                Design Boot Rpl
              </h1>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide bg-primary">
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div class="card mb-3 card-lift--hover shadow border-0" style="height:500px;">
              <div class="card-body">                
                <img src="{{ asset('assets/img/puding3.jpg') }}" class="pb-3 text-center" width="100%" alt="">
                <h5 style="font-family: 'Oleo Script', cursive">Pudding</h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reiciendis accusantium voluptas laboriosam eligendi explicabo. Libero similique numquam, mollitia tenetur facere illo repudiandae iure, laudantium unde perferendis voluptatum fuga tempore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-lift--hover shadow border-0" style="height:500px;">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-3 py-3"><img src="{{ asset('assets/img/cake.png') }}" class="text-center" width="100%" alt=""></div>
                </div>
                <h5 class="text-center" style="font-family: 'Comfortaa', cursive">
                  Aneka makanan manis
                </h5>
                <h3 class="text-center" style="font-family: 'Lobster', cursive">
                  Our menus
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam corporis perferendis officiis voluptatem velit aliquam recusandae iure excepturi. Laudantium recusandae beatae alias corporis ab rerum, accusamus itaque distinctio architecto quod.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste suscipit odit dolorem ad! Eum veritatis quia nemo sit reprehenderit illum laboriosam saepe eos sed quae culpa corrupti, ipsam optio deserunt.                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="card mb-3 card-lift--hover shadow border-0" style="height:500px;">
                <div class="card-body">                
                  <img src="{{ asset('assets/img/stik.jpg') }}" class="pb-3" width="100%" alt="">
                  <h5 style="font-family: 'Oleo Script', cursive">Stik ubi</h5>
                  <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reiciendis accusantium voluptas laboriosam eligendi explicabo. Libero similique numquam, mollitia tenetur facere illo repudiandae iure, laudantium unde perferendis voluptatum fuga tempore.
                  </p>
                </div>
              </div>
            </div>
        </div>
    </div>

    <div class="swiper-slide bg-primary">
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div class="card card-lift--hover shadow border-0">
              <div class="card-body" style="height:500px;">
                <img src="{{ asset('assets/img/cireng.jpg') }}" class="pb-3" width="100%" alt="">
                <h5 style="font-family: 'Oleo Script', cursive">Cireng boy</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reiciendis accusantium voluptas laboriosam eligendi explicabo. Libero similique numquam, mollitia tenetur facere illo repudiandae iure, laudantium unde perferendis voluptatum fuga tempore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-lift--hover shadow border-0">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-3 py-3"><img src="{{ asset('assets/img/piring.png') }}" class="text-center" width="100%" alt=""></div>
                </div>
                <h5 class="text-center" style="font-family: 'Comfortaa', cursive">
                  Aneka makanan lezat
                </h5>
                <h3 class="text-center" style="font-family: 'Lobster', cursive">
                  Our menus
                </h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam corporis perferendis officiis voluptatem velit aliquam recusandae iure excepturi. Laudantium recusandae beatae alias corporis ab rerum, accusamus itaque distinctio architecto quod.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste suscipit odit dolorem ad! Eum veritatis quia nemo sit reprehenderit illum laboriosam saepe eos sed quae culpa corrupti, ipsam optio deserunt.                  
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-lift--hover shadow border-0">
              <div class="card-body" style="height:500px;">
                <img src="{{ asset('assets/img/cilok.jpg') }}" class="pb-3" width="100%" alt="">
                <h5 style="font-family: 'Oleo Script', cursive">Cilok kacang</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reiciendis accusantium voluptas laboriosam eligendi explicabo. Libero similique numquam, mollitia tenetur facere illo repudiandae iure, laudantium unde perferendis voluptatum fuga tempore.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div class="swiper-slide bg-primary">
        <div class="row justify-content-center">
          <div class="col-md-3">
            <div class="card card-lift--hover shadow border-0">
              <div class="card-body justify-content-center" style="height:500px;">
                <img src="{{ asset('assets/img/sunset.png') }}" class="pb-3" width="30%" alt="">
                <img src="{{ asset('assets/img/sunset.png') }}" class="pb-3" width="30%" alt="">
                <img src="{{ asset('assets/img/sunset.png') }}" class="pb-3" width="30%" alt="">
                <h5 style="font-family: 'Oleo Script', cursive">Sunrise</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reiciendis accusantium voluptas laboriosam eligendi explicabo. Libero similique numquam, mollitia tenetur facere illo repudiandae iure, laudantium unde perferendis voluptatum fuga tempore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-lift--hover shadow border-0">
              <div class="card-body justify-content-center" style="height:500px;">
                <img src="{{ asset('assets/img/sunsett.png') }}" class="pb-3 ml-3" width="50%" alt="">
                {{-- <img src="{{ asset('assets/img/sunset.png') }}" class="pb-3" width="30%" alt="">
                <img src="{{ asset('assets/img/sunset.png') }}" class="pb-3" width="30%" alt=""> --}}
                <h5 style="font-family: 'Oleo Script', cursive">Sunset</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reiciendis accusantium voluptas laboriosam eligendi explicabo. Libero similique numquam, mollitia tenetur facere illo repudiandae iure, laudantium unde perferendis voluptatum fuga tempore.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card card-lift--hover shadow border-0">
              <div class="card-body justify-content-center" style="height:500px;">
                <img src="{{ asset('assets/img/minumanijo.png') }}" class="pb-3 ml-3" width="50%" alt="">
                {{-- <img src="{{ asset('assets/img/sunset.png') }}" class="pb-3" width="30%" alt="">
                <img src="{{ asset('assets/img/sunset.png') }}" class="pb-3" width="30%" alt=""> --}}
                <h5 style="font-family: 'Oleo Script', cursive">Greensea</h5>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem reiciendis accusantium voluptas laboriosam eligendi explicabo. Libero similique numquam, mollitia tenetur facere illo repudiandae iure, laudantium unde perferendis voluptatum fuga tempore.
                </p>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>


  <!-- Swiper JS -->
  <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
  <script src="{{ asset('assets/js/particle.js') }}"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      direction: 'vertical',
      mousewheel: true,
      loop: false,
      // autoplay: {
      //   delay: 4000,
      //   disableOnInteraction: true,
      // },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>

<script>
    particlesJS("particles-js", {"particles":{"number":{"value":100,
    "density":{"enable":true,"value_area":500}},
    "color":{"value":"#00e5ff"},
    "shape":{"type":"circle",
    "stroke":{"width":2,"color":"#fff"},
    "polygon":{"nb_sides":5},
    "image":{"src":"img/github.svg",
    "width":200,"height":150}},
    "opacity":{"value":2.0,
    "random":false,
    "anim":{"enable":false,"speed":1,
    "opacity_min":0.1,
    "sync":false}},
    "size":{"value":3,
    "random":true,"anim":{"enable":false,
    "speed":40,"size_min":0.1,
    "sync":false}},
    "line_linked":{"enable":true,"distance":100,
    "color":"#01579b",
    "opacity":0.3,"width":2},
    "move":{"enable":true,
    "speed":2,"direction":"none",
    "random":false,
    "straight":false,
    "out_mode":"out",
    "bounce":true,
    "attract":{"enable":false,
    "rotateX":600,
    "rotateY":1200}}},
    "interactivity":{"detect_on":"canvas",
    "events":{"onhover":{"enable":false,
    "mode":"repulse"},
    "onclick":{"enable":true,"mode":"push"},
    "resize":true},
    "modes":{"grab":{"distance":400,
    "line_linked":{"opacity":1}},
    "bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},
    "repulse":{"distance":200,"duration":0.4},
    "push":{"particles_nb":4},
    "remove":{"particles_nb":2}}},
    "retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>

</body>
</html>
