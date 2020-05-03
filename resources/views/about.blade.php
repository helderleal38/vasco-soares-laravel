@extends('layouts.app')

@section('content')
<!------------------------------Notre histoire---------------------------->
<section class="about-history"> 
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <!-- Title -->
        <h2 class="card-title h2">NOTRE HISTOIRE</h2>
        <!-- Subtitle -->
        <p class="blue-text my-2 font-weight-bold">Powerful and free Material Design UI KIT</p>
        <!-- Grid row -->
        <div class="row d-flex justify-content-center">
            <!-- Grid column -->
            <div class="col-xl-12 pb-2">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga aliquid dolorem ea distinctio exercitationem delectus qui, quas eum architecto, amet quasi accusantium, fugit consequatur ducimus obcaecati numquam molestias hic itaque accusantium doloremque laudantium, totam rem aperiam.</p>
            </div>
            <!-- Grid column -->
        </div>
         <!-- Grid row -->
        <hr class="my-4">
        <div class="pt-2">
            <button type="button" class="btn btn-blue waves-effect">Buy now <span class="far fa-gem ml-1"></span></button>
            <button type="button" class="btn btn-outline-primary waves-effect">Download <i class="fas fa-download ml-1"></i></button>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!------------------------------Nos espaces------------------------------->
<section class="about-espaces"> 
    <h1>Nos Espaces</h1>
    <!--Carousel Wrapper-->
    <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">
        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i
            class="fas fa-chevron-left"></i></a>
            <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i
            class="fas fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
            <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
            <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides and lightbox-->
        <div class="carousel-inner mdb-lightbox" role="listbox">
            <div id="mdb-lightbox-ui"></div>
                <!--First slide-->
                <div class=" carousel-item active text-center">
                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(2).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(2).jpg"
                            class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(4).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(4).jpg"
                            class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(6).jpg"
                          data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(6).jpg"
                            class="img-fluid">
                        </a>
                    </figure>
                </div>
                <!--Second slide-->
                <div class="carousel-item text-center">
                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(22).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(22).jpg"
                            class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(25).jpg"
                            class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(29).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(29).jpg"
                            class="img-fluid">
                        </a>
                    </figure>
                </div>
                <!--Third slide-->
                <div class="carousel-item text-center">
                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(44).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(44).jpg"
                            class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg"
                            class="img-fluid">
                        </a>
                    </figure>

                    <figure class="col-md-3 d-md-inline-block">
                        <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(66).jpg"
                            data-size="1600x1067">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(66).jpg"
                            class="img-fluid">
                        </a>
                    </figure>
                </div>
        </div>
        <!--/.Slides-->
    </div>
    <!--/.Carousel Wrapper-->
</section>
<!------------------------------Notre equipe------------------------------>
<section class="about-equipe"> 
    <div class="container pt-5 my-5 z-depth-1">
        <section class="p-md-3 mx-md-5 text-center text-lg-left">
    <h2 class="text-center mx-auto font-weight-bold mb-4 pb-2">Notre equipe</h2>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Alan Turing</h6>
            <p class="text-muted">
              <small
                ><i
                  >Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Tom Johnson</h6>
            <p class="text-muted">
              <small
                ><i
                  >Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(3).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Alex Laurie</h6>
            <p class="text-muted">
              <small
                ><i
                  >Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Nathalie Fry</h6>
            <p class="text-muted">
              <small
                ><i
                  >Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Emma Lovelace</h6>
            <p class="text-muted">
              <small
                ><i
                  >Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(5).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Joanna Thompson</h6>
            <p class="text-muted">
              <small
                ><i
                  >Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
        <div class="p-4">
          <div
            class="avatar w-100 white d-flex justify-content-center align-items-center"
          >
            <img
              src="https://mdbootstrap.com/img/Photos/Avatars/img%20(8).jpg"
              class="img-fluid rounded-circle z-depth-1"
            />
          </div>
          <div class="text-center mt-3">
            <h6 class="font-weight-bold pt-2">Billy Turner</h6>
            <p class="text-muted">
              <small
                ><i
                  >Lorem ipsum dolor sit amet, consectetur adipiscing
                  elit.</i
                ></small
              >
            </p>
          </div>
        </div>
      </div>
    </div>
        </section>
    </div>
</section>
<!------------------------------Testimonials------------------------------>
<section class="about-testimonials">
  <div class="container my-5 px-5 pt-5 pb-3 z-depth-1">
    <!--Section: Content-->
    <section class="text-center dark-grey-text">
      <h2>Ce qu'ils disent de nous</h2><br>
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-md-12 mb-4">
          <div class="wrapper-carousel-fix">
            <!-- Carousel Wrapper -->
            <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide" data-ride="carousel"
              data-interval="false">
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                <!--First slide-->
                  <div class="carousel-item active">
                    <p class="lead font-italic">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident voluptate esse quasi, voluptas nostrum quisquam!"</p>
                    <div class="view card-img-64 mx-auto mt-5 mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" class="rounded-circle img-fluid" alt="smaple image">
                    </div>
                    <p class="text-muted">- Anna Morian</p>
                  </div>
                  <!--Second slide-->
                  <div class="carousel-item">
                    <p class="lead font-italic">"Neque cupiditate assumenda in maiores repudiandae mollitia adipisci maiores repudiandae mollitia consectetur adipisicing architecto elit sed adipiscing elit."</p>
                    <div class="view card-img-64 mx-auto mt-5 mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg" class="rounded-circle img-fluid" alt="smaple image">
                    </div>
                    <p class="text-muted">- Teresa May</p>
                  </div>
                  <!--Third slide-->
                  <div class="carousel-item">
                    <p class="lead font-italic">"Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur est laborum neque cupiditate assumenda in maiores."</p>
                    <div class="view card-img-64 mx-auto mt-5 mb-4">
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-fluid" alt="smaple image">
                    </div>
                    <p class="text-muted">- Kate Allise</p>
                  </div>
                </div>
                <!--Controls-->
                <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
                  data-slide="prev">
                  <span class="icon-prev" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
                  data-slide="next">
                  <span class="icon-next" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        <!-- Grid column -->
        </div>
      <!-- Grid row -->
      </section>
    <!--Section: Content-->
  </div> 
</section>

@endsection    