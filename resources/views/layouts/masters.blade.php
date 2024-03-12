<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        data-mdb-collapse-init
        class="navbar-toggler"
        type="button"
        data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
  
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="15"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('etudiants')}}">List Etudiants</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('filieres')}}">List Filiere</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('ajouter')}}">Ajouter Etudiant</a>
              </li>
            @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">Home</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->
        <a class="text-reset me-3" href="#">
          <i class="fas fa-shopping-cart"></i>
        </a>
        <!-- Avatar -->
        <div class="">
            @guest
            <a class="btn btn-warning" href="{{route('login')}}">Se Connecter</a>
            <a class="btn btn-warning" href="{{route('ajouter')}}">Register</a>
            @endguest
            @auth
            <a class="btn btn-warning">Hello, {{auth()->user()->nom}}</a>
            <a class="btn btn-primary" href="{{route('logout')}}">Deconnexion</a>

            @endauth
               
        </div>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->
  <main>
    @yield('main')
  </main>
  <section class="">
    <!-- Footer -->
    <footer class="text-center text-white" style="background-color: #0a4275;">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: CTA -->
        <section class="">
          <p class="d-flex justify-content-center align-items-center">
            <span class="me-3">Register for free</span>
            <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
              Sign up!
            </button>
          </p>
        </section>
        <!-- Section: CTA -->
      </div>
      <!-- Grid container -->
  
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </section>
</body>
</html>