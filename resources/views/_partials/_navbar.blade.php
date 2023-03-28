<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">CHARACTERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">COMICS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">MOVIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">GAMES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">COLLECTIBLES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">VIDEOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">FANS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">NEWS</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SHOP
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  {{-- search --}}
  <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">
        Search
        {{-- <i class="bi bi-search bg-danger"></i> --}}
      </button>
    </form>

</nav>