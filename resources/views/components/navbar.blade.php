<nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('homepage') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about-us') }}">aboutus</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contatact.us') }}">contattaci</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('inser_isci') }}">inserisici</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('pho.tos') }}">fotos</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
