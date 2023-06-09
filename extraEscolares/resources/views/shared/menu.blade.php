<style>
  .navbar.fixed-top {
  background-color: transparent !important;
  transition: background-color 0.3s ease-in-out;
}

.navbar.fixed-top.scrolled {
  background-color: #f8f9fa !important;
}
.navbar.fixed-top{
  font-family: monospace;
  font-size: 1.6rem;
  color: #000000;
}

</style>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
  <div class="container-fluid">
    <img src="{{ asset('img/logo.png') }}" alt="" style="width: 100px; height: auto;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/inicio">Tabla Alumnos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/crud/tabla">Creditos</a>
        </li>
      </ul>
      <form class="d-flex">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Usuarios
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="{{ route('registrarUsuario') }}">Agregar Usuario</a></li>
                
              </ul>
            </li>
          </ul>
          <a href="{{route('logout')}}" class=" btn btn-danger"> Salir del sistema </a>
        </div>
        
      </form>
    </div>
  </div>
</nav>

<script>
  // Agrega la clase 'scrolled' a la barra de navegación cuando se hace scroll
window.addEventListener('scroll', function() {
  var navbar = document.querySelector('.navbar.fixed-top');
  if (window.scrollY > 0) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

</script>