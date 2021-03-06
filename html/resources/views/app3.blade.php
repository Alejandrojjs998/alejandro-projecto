<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante el mirador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/main.css">
</head>
<body id="menu">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Restaurante El mirador</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('menu3') }}">Carta</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('zona') }}">Reservas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('administrar') }}">Administrar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('mesas') }}">Mesas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('reservasactuales') }}">Reservas para hoy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('comandas') }}">Comandas</a>
        </li>
	<li class="float-right">
         <a class="nav-link active btn btn-danger float-right" aria-current="page" href="{{ route('menu') }}">exit</a>
        </li>

      </ul>
    </div>
  </div>
</nav>

@yield('content')

</body>

</html>
