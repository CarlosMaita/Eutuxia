<!-- header -->
<header class="header-sticky header-{{$color_header ?? 'light'}}" style="border: none">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-{{$color_header ?? 'light'}}">
        <a class="navbar-brand" href="/">
          <img class="navbar-logo navbar-logo-light" src="{{asset('imagen/oxas/logo_light.svg')}}" alt="Logo">
          <img class="navbar-logo navbar-logo-dark" src="{{asset('imagen/oxas/logo_dark.svg')}}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="burger"><span></span></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav align-items-center mr-auto">
          </ul>
          <ul class="navbar-nav align-items-center mr-0">
            <li class="nav-item">
              <a class="nav-link" href="/" role="button">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/nosotros" role="button">
                Nosotros
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="/servicios" role="button">
                Servicios
              </a>
            </li>
{{-- 
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Productos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($productos as $producto)
                <a class="dropdown-item" href="{{route('product.option', $producto->id)}}">
                  <span>{{$producto->product}}</span>
                </a>
                <div class="dropdown-divider"></div>
              @endforeach
              </div>
            </li> --}}
           
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Servicios
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($servicios as $servicio)
                <a class="dropdown-item" href="{{route('service.option', $servicio->id)}}">
                  <span>{{$servicio->service}}</span>
                </a>
                <div class="dropdown-divider"></div>
              @endforeach
              </div>
            </li> --}}
{{--             
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Proyectos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach($proyectos as $proyecto)
                <a class="dropdown-item" href="{{route('project.option', $proyecto->id)}}">
                  <span>{{$proyecto->project}}</span>
                </a>
                <div class="dropdown-divider"></div>
              @endforeach
              </div>
            </li> --}}
            <li class="nav-item dropdown">
              <a class="nav-link" href="{{asset('contactanos')}}">
                Contacto
              </a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link" href="{{asset('blog')}}">
                Blog
              </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </header>
<!-- header -->