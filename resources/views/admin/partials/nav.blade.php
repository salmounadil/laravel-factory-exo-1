<nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="/admin">Home</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link  text-white" aria-current="page" href={{ route('batimentsAdmin') }}>Batiments</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" aria-current="page" href={{ route('formationsAdmin') }}>Formations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" aria-current="page" href={{ route('typesformationsAdmin') }}>Type Formations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-white" aria-current="page" href={{ route('elevesAdmin') }}>Elèves</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>