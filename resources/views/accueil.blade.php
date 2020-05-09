@extends('layouts.app')

@section('content')
<section class="home-image">
 		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-caption">
                <!--Verification de l'authentification avant la pré-inscription-->
                @if(Auth::guest())
                <div class="animated fadeInDown" backgound="grey">
                    <h3 class="h3-responsive">Notre interet c'est votre reussite</h3>
                    <a class="btn btn-primary" href="{{route('register')}}">Inscrivez-vous</a>
                </div>              
                @else
                <div class="animated fadeInDown">
                    <h3 class="h3-responsive">Notre interet c'est votre reussite</h3>
                    <a class="btn btn-primary" href="{{route('pre_inscription')}}">Inscrivez-vous</a>
                </div>
                @endif
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/slider4.jpg')}}"
                    alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/slider2.jpg')}}"
                    alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/slider3.jpg')}}"
            alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-----------------Pouquoi nous choisir------------------>
<div class="home-container z-depth-1 my-5 py-5 px-4 px-lg-0">
  <!-- Section -->
  <section>
    
    <style>
      
    </style>
    
    <h1 class="font-weight-bold text-center dark-grey-text pb-2">Pourquoi nous choisir</h1>
    <hr class="w-header my-4">
    <p class="lead text-center text-muted pt-2 mb-5">Choisir le centre Vasco Soares c'est choisir votre avenir.</p>
    
    <div class="row">
      <div class="col-lg-8 mx-auto">

        <ol class="timeline">
          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Launched our website</h5>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
              Explicabo amet ipsum fugiat aliquam alias.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Got the first 100 users</h5>
            <p class="grey-text font-small"><time datetime="2017-08-17">17 Aug 2017</time></p>
            <p><img class="img-fluid z-depth-1-half rounded" src="https://mdbootstrap.com/img/Photos/Horizontal/Work/12-col/img%20(6).jpg" alt="..."></p>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
              Explicabo amet ipsum fugiat aliquam alias.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Raised $1.4 million in seed funding</h5>
            <p class="grey-text font-small"><time datetime="2018-03-26">26 Mar 2019</time></p>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
              Explicabo amet ipsum fugiat aliquam alias.</p>
          </li>

          <li class="timeline-element">
            <h5 class="font-weight-bold dark-grey-text mb-3">Team size increased to 20</h5>
            <p class="grey-text font-small"><time datetime="2018-04-14">14 Apr 2019</time></p>
            <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ullam adipisci reiciendis porro natus laudantium similique. 
              Explicabo amet ipsum fugiat aliquam alias.</p>
          </li>
        </ol>

      </div>
    </div>
    
  </section>
  <!-- Section -->
  
</div>
@endsection