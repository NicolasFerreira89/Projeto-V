<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ProjetoV</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="{{route('home')}}"></a>
    <img src="{{'img/Horse-jump-icon-vector.png'}}" alt="Logo" width="150 " height="80" class="d-inline-block align-text-top">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('cadastrar-cavalo')}}">Cadastar Cavalos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/editar-cavalo">Meus Cavalos</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</header>
@yield('content')
<footer id="footer">
    <p>Siga-nos nas redes Sociais!</p>
    <br>
    <a href="..."> <img src="{{'img/icons8-facebook-48.png'}}" alt="Facebook"></a>
    <a href="..."><img src="{{'img/icons8-twitter-48.png'}}" alt="Twitter"></a>
    <a href="..."><img src="{{'img/icons8-instagram-48.png'}}" alt="Instagram"></a>
    <a href="..." ><img src="{{'img/icons8-reproduzir-youtube-48.png'}}" alt="YouTube"></a>
    <br>
    <br>
    <p>@Horses 2022. All Rights Reserved</p>

</footer>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>