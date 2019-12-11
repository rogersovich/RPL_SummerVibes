@extends('layouts.element.main')

@section('title', 'Landing Page')

@section('content')

  <main id="fullpage">
    <div id="particles-js" style="height: 100vh !important;">
    <section class="section section3 bg-gradient-primary" >
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 text-center">
            <img class="floating" width="700" height="400" src="{{ asset('assets/img/laptop-frame.png') }}">
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-gradient-danger" >
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-6 col-md-6">
            <img class="img-fluid floating shadow" src="{{ asset('assets/img/table-horizontal-frame.png') }}">
          </div>
          <div class="col-lg-6 col-md-6">
            <h2 class="display-1 text-white font-summmerVibes">
              Game kedip kedip
            </h2>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-gradient-info" >
      <div class="container">
        <div class="row pb-7">
          <div class="col-md-3 text-center pt-5">
            <h1 class="display-2 text-white font-weight-light font-summmerVibes">
              Filter Instgram
            </h1>
          </div>
          <div class="col-lg-6 col-md-6 text-center">
            <img class="img-fluid floating" src="{{ asset('assets/img/table-vertical-frame.png') }}">
          </div>
          <div class="col-md-3 pt-5">
            <h1 class="display-2 text-white font-weight-light font-summmerVibes">
              this filter can good
            </h1>
          </div>
        </div>
      </div>
    </section>
    <section class="section bg-gradient-warning">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h3 class="text-center pb-5">Makanan</h3>
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <h6 class="text-primary text-uppercase text-center">Ini nama makanan</h6>
                    <img src="{{ asset('assets/img/jacket1.jpg') }}" alt="" width="100%" srcset="">
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <h6 class="text-success text-uppercase">Build Something</h6>
                    <img src="{{ asset('assets/img/jacket1.jpg') }}" alt="" width="100%" srcset="">
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-success">business</span>
                      <span class="badge badge-pill badge-success">vision</span>
                      <span class="badge badge-pill badge-success">success</span>
                    </div>
                    <a href="#" class="btn btn-success mt-4">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                  <h4>hahha</h4>
                  <img src="{{ asset('assets/img/jacket1.jpg') }}" alt="" width="100%">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section img-fluid" style="background-image: url({{ asset('assets/img/spotify.png') }});">
            <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <h3 class="text-center pb-5">Minuman</h3>
            <div class="row row-grid">
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <h6 class="text-primary text-uppercase text-center">Ini nama makanan</h6>
                    <img src="{{ asset('assets/img/jacket1.jpg') }}" alt="" width="100%" srcset="">
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-primary">design</span>
                      <span class="badge badge-pill badge-primary">system</span>
                      <span class="badge badge-pill badge-primary">creative</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-4">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card card-lift--hover shadow border-0">
                  <div class="card-body py-5">
                    <h6 class="text-success text-uppercase">Build Something</h6>
                    <img src="{{ asset('assets/img/jacket1.jpg') }}" alt="" width="100%" srcset="">
                    <p class="description mt-3">Argon is a great free UI package based on Bootstrap 4 that includes the most important components and features.</p>
                    <div>
                      <span class="badge badge-pill badge-success">business</span>
                      <span class="badge badge-pill badge-success">vision</span>
                      <span class="badge badge-pill badge-success">success</span>
                    </div>
                    <a href="#" class="btn btn-success mt-4">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                  <h4>hahha</h4>
                  <img src="{{ asset('assets/img/jacket1.jpg') }}" alt="" width="100%">
              </div>
            </div>
          </div>
        </div>
      </div>
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

    

    // $('body').keydown(function(event){
    //     var x = event.which || event.keyCode;
    //     var e = $.Event('keydown', { keyCode: 40 });// right arrow key
    //     console.log(e);

    //   })
    
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

