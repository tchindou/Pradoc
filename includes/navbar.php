<?php require('includes/config.php'); ?>

<nav class="navbar navbar-expand-lg navbar" id="ordi" style="border: 1px;  border-radius: 0% , 0% , 10px , 10px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><h2><span class="logo">P</span>radoc</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ditem">
        <li class="nav-item home">
          <a class="nav-link dropdown-toggle" aria-current="page" href="#">
            <ion-icon name="home-outline"></ion-icon>Accueil
        </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" ><span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>Stats</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <ion-icon name="book-outline"></ion-icon>Cours
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Resume</a></li>
            <li><a class="dropdown-item" href="#">Quiz</a></li>
            <li><a class="dropdown-item" href="#">Question</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Epreuve
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Nationaux</a></li>
            <li><a class="dropdown-item" href="#">International</a></li>
            <li><a class="dropdown-item" href="#">concours</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="login.php"><ion-icon name="log-out-outline"></ion-icon>Connexion</a>
        </li>
      </ul>
      <form class="d-flex form" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav class="navbar fixed-top navbar" id="phone" style="border: 1px; border-radius: 0% , 0% , 10px , 10px;">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php"><h2><span class="logo">P</span>radoc</h2></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a class="navbar-brand" href="#"><span class="logo">P</span>radoc</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body navbar">
        <ul class="navbar-nav justify-content flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" aria-current="page" href="#"><ion-icon name="home-outline"></ion-icon>Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="#"><ion-icon name="person-circle-outline"></ion-icon>Stats</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <ion-icon name="book-outline"></ion-icon>Cours
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Resume</a></li>
            <li><a class="dropdown-item" href="#">Quiz</a></li>
            <li><a class="dropdown-item" href="#">Question</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Epreuve
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Nationaux</a></li>
            <li><a class="dropdown-item" href="#">International</a></li>
            <li><a class="dropdown-item" href="#">concours</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link dropdown-toggle" href="login.php"><ion-icon name="log-out-outline"></ion-icon>Connexion</a>
        </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>