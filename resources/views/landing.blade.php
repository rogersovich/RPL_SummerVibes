@extends('layouts.element.main')

@section('title', 'Landing Page')

@section('content')

  <main id="fullpage">
    <div id="particles-js" style="height: 100vh !important;">
    </div>
    <section class="section" style="height: 100vh !important;">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-lg-6 col-md-6 text-center">
          <img class="floating img-fluid" src="{{ asset('assets/img/logo_dude2.png') }}">
        </div>
        <div class="col-md-3"></div>
      </div>
    </section>
    <section class="section bg-gradient-primary">
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
    </section>
    <section class="section bg-gradient-danger" >
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
    </section>
    <section class="section bg-success" >
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
            <h1 class="display-2 mt-5 text-right text-dark font-weight-light font-summmerVibes">
              Nama Filternya
            </h1>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-gradient-warning">
      
    </section>
    <section class="section bg-gradient-primary">
            
    </section>
    <section class="section bg-white">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12 col-md-12">
            <h1 class="display-1 text-dark">
              Design Boot Rpl
            </h1>
          </div>
        </div>
      </div>
    </section>
    
  </main>
  
@endsection



@section('scripts')

<script type="text/javascript">

  $(document).ready(function () {

    var myFullpage = new fullpage('#fullpage', {
        navigation: true,
        navigationPosition: 'right',
        continuousVertical:true,

    });
  });
</script>
<script>
    particlesJS("particles-js", {"particles":{"number":{"value":50,
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
@endsection

