@extends('layouts.app')

@section('content')
<div class="contact-container z-depth-1 my-5 px-0">

  <!--Section: Content-->
  <section class="my-md-5" 
    style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(97).jpg'); background-size: cover; background-position: center center;">

    <div class="rgba-black-strong rounded p-5">

      <!-- Section heading -->
      <h3 class="text-center font-weight-bold text-white mt-3 mb-5">Contactez nous</h3>

      <form class="mx-md-5" action="">

        <div class="row">
          <div class="col-md-6 mb-4">

            <div class="card">
              <div class="card-body px-4">

                <!-- Name -->
                <div class="md-form md-outline mt-0">
                  <input type="text" id="name" class="form-control">
                  <label for="name">Votre nom</label>
                </div>
                <!-- Email -->
                <div class="md-form md-outline">
                  <input type="text" id="email" class="form-control">
                  <label for="email">Votre adresse mail</label>
                </div>
                <!-- Message -->
                <div class="md-form md-outline">
                  <textarea id="message" class="md-textarea form-control" rows="3"></textarea>
                  <label for="message">Votre message</label>
                </div>

                <button type="submit" class="btn btn-primary btn-md btn-block ml-0 mb-0">Envoyer</button>

              </div>
            </div>

          </div>
          <div class="col-md-5 offset-md-1 mt-md-4 mb-4 white-text">

            <h5 class="font-weight-bold">Adresse</h5>
            <p class="mb-0">16 Rua principal</p>
            <p class="mb-0">Lourical, 3125</p>
            <p class="mb-4 pb-2">Portugal</p>

            <h5 class="font-weight-bold">Telephone</h5>
            <p class="mb-4 pb-2">+ 01 234 567 89</p>

            <h5 class="font-weight-bold">Email</h5>
            <p>centrevascosoares@gmail.com</p>

          </div>
        </div>

      </form>

    </div>

  </section>
  <!--Section: Content-->
</div>
<!---------------------------------MAP----------------------->
<div class="container-fluid mt-3 mb-5">

  <!-- Section: Block Content -->
  <section class="mb-4">

    <style>
      .map-container {
        overflow: hidden;
        position: relative;
        height: 0;
      }

      .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
      }
    </style>

    <div class="card">

      <div class="row">
        <div class="col-md-6">

          <!-- Google Maps -->
          <div id="map-within-card-2" class="map-container rounded-left" style="height: 400px">
            <iframe src="https://maps.google.com/maps?q=Seattle&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
              style="border:0" allowfullscreen></iframe>
          </div>
          <!-- Google Maps -->

        </div>

        <div class="col-10 col-md-4 mx-auto align-self-center py-4">

          <h6 class="font-weight-bold grey-text text-uppercase small">Head Office</h6>
          <h5 class="font-weight-normal mb-4">Seattle, WA</h5>
          <p class="text-muted font-weight-light">2651 Main Street, Suit 124<br>Seattle, WA, 98101</p>
          <p class="text-muted font-weight-light mb-0">Phone: +1 987 123 6548<br>Email: hello@thetheme.io</p>

        </div>
      </div>

    </div>

  </section>
  <!-- Section: Block Content -->

</div>
@endsection