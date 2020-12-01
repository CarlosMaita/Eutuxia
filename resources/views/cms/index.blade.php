<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.0.1">
  <title>Administración Oxapp</title>
  <link href="{{asset('css/style.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">

  <!-- Axios -->
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <!-- Favicons -->
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-dark sticky-top bg-success flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" target="_blank" href="https://ceaca.com/">Oxapp</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
        <form action="/logout" method="POST" id="form_salir_sesion">
          @csrf
          <a class="nav-link" onclick="cerrarSesion()" href="#">Sign out</a>
        </form>
      </li>
    </ul>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="/cms">
                <span data-feather="home"></span>
                Inicio
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('section.home')}}">
                <span data-feather="home"></span>
                Secciones
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('producto.home')}}">
                <span data-feather="home"></span>
                Productos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('service.home')}}">
                <span data-feather="home"></span>
                Servicios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('project.home')}}">
                <span data-feather="home"></span>
                Proyectos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blog.category')}}">
                <span data-feather="home"></span>
                Blog Categorias
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('blog.article')}}">
                <span data-feather="home"></span>
                Blog Articulos
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('message.home')}}">
                <span data-feather="home"></span>
                Mensajes
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('lead.home')}}">
                <span data-feather="home"></span>
                Leads
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        @yield('content')
      </main>
    </div>
  </div>

  <script src="{{asset('vendor/jquery/jquery.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script type="text/javascript">
    function cerrarSesion() {
      document.querySelector('#form_salir_sesion').submit();
    }
  </script>
</body>

</html>