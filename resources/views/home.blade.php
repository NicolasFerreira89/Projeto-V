@extends('padrao')
@section('content')

<section class="home">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{'img/imgRdR2(1).jpg'}}" class="d-block w-100" alt="Wallpaper 1">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{'img/imgRdR2(2).jpg'}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{'img/imgRdR2(3).jpg'}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="cards">

    <div class="container ">
      <div class="row">
        <div class="col">


          <div class="card" style="width: 18rem;">
            <img src="{{'img/MissouriFoxTrotter.jpg'}}" class="card-img-top img-fluid img-thumbnail" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem Ipsum ?? simplesmente um texto fict??cio da ind??stria tipogr??fica e de impress??o. Lorem Ipsum tem sido o texto fict??cio padr??o da ind??stria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de esp??cimes de tipos.</p>
            </div>
          </div>

        </div>
        <div class="col">

          <div class="card" style="width: 18rem;">
            <img src="{{'img/thoroughbred-horse.jpg'}}" class="card-img-top img-fluid img-thumbnail" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem Ipsum ?? simplesmente um texto fict??cio da ind??stria tipogr??fica e de impress??o. Lorem Ipsum tem sido o texto fict??cio padr??o da ind??stria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de esp??cimes de tipos.</p>
            </div>
          </div>

        </div>
        <div class="col">


          <div class="card" style="width: 18rem;">
            <img src="{{'img/WhiteArabian.jpg'}}" class="card-img-top img-fluid img-thumbnail" alt="...">
            <div class="card-body">
              <p class="card-text">Lorem Ipsum ?? simplesmente um texto fict??cio da ind??stria tipogr??fica e de impress??o. Lorem Ipsum tem sido o texto fict??cio padr??o da ind??stria desde os anos 1500, quando um impressor desconhecido pegou uma cozinha de tipos e embaralhou-a para fazer um livro de esp??cimes de tipos. </p>
            </div>

          </div>


        </div>
      </div>
    </div>
  </section>
</section>













    @endsection