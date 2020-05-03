@extends('layouts.app')

@section('content')
<section class="matieres-container">
<div class="row">
  <div class="col-4 ">
    <div class="list-group z-depth-1" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home"
        role="tab" aria-controls="home">Mathématique</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile"
        role="tab" aria-controls="profile">Anglais</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages"
        role="tab" aria-controls="messages">Histoire</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings"
        role="tab" aria-controls="settings">Physique-chimie</a>
    </div>
  </div>
  <div class="content col-8 z-depth-1">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
      	<h1>Mathématique</h1>
        Velit aute mollit ipsum ad dolor consectetur nulla officia culpa adipisicing exercitation fugiat
        tempor. Voluptate deserunt sit sunt nisi aliqua fugiat proident ea ut. Mollit voluptate reprehenderit
        occaecat nisi ad non minim tempor sunt voluptate consectetur exercitation id ut nulla. Ea et fugiat
        aliquip nostrud sunt incididunt consectetur culpa aliquip eiusmod dolor. Anim ad Lorem aliqua in
        cupidatat nisi enim eu nostrud do aliquip veniam minim.
      </div>
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      	<h1>Anglais</h1>
        Cupidatat quis ad sint excepteur laborum in esse qui. Et excepteur consectetur ex nisi eu do cillum ad
        laborum. Mollit et eu officia dolore sunt Lorem culpa qui commodo velit ex amet id ex. Officia anim
        incididunt laboris deserunt anim aute dolor incididunt veniam aute dolore do exercitation. Dolor nisi
        culpa ex ad irure in elit eu dolore. Ad laboris ipsum reprehenderit irure non commodo enim culpa
        commodo veniam incididunt veniam ad.
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      	<h1>Histoire</h1>
        Ut ut do pariatur aliquip aliqua aliquip exercitation do nostrud commodo reprehenderit aute ipsum
        voluptate. Irure Lorem et laboris nostrud amet cupidatat cupidatat anim do ut velit mollit consequat
        enim tempor. Consectetur est minim nostrud nostrud consectetur irure labore voluptate irure. Ipsum id
        Lorem sit sint voluptate est pariatur eu ad cupidatat et deserunt culpa sit eiusmod deserunt.
        Consectetur et fugiat anim do eiusmod aliquip nulla laborum elit adipisicing pariatur cillum.
      </div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      	<h1>Phisyque-chimie</h1>
        Irure enim occaecat labore sit qui aliquip reprehenderit amet velit. Deserunt ullamco ex elit nostrud
        ut dolore nisi officia magna sit occaecat laboris sunt dolor. Nisi eu minim cillum occaecat aute est
        cupidatat aliqua labore aute occaecat ea aliquip sunt amet. Aute mollit dolor ut exercitation irure
        commodo non amet consectetur quis amet culpa. Quis ullamco nisi amet qui aute irure eu. Magna labore
        dolor quis ex labore id nostrud deserunt dolor eiusmod eu pariatur culpa mollit in irure.
      </div>
    </div>
  </div>
</div>
</section>
@endsection