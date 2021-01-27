@extends('common.main_plantilla')

@section('title')
@php
  $titulo = "Servicio de desarrollo web en Venezuela";
  $descripcion = "Estas buscando una agencia de desarrollo web. Quieres construir un sitio web profesional y de calidad.";   
  $url = "https://oxas.tech/agencia-de-desarrollo-web";   
  $imagen_shared = asset('imagen/funnels/share-personal-web.png'); 
@endphp
<!-- Primary Meta Tags -->
<title>{{$titulo}}</title>
<meta name="title" content="{{$titulo}}">
<meta name="description" content="{{$descripcion}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{$url}}">
<meta property="og:title" content="{{$titulo}}">
<meta property="og:description" content="{{$descripcion}}">
<meta property="og:image" content="{{$imagen_shared}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{$url}}">
<meta property="twitter:title" content="{{$titulo}}">
<meta property="twitter:description" content="{{$descripcion}}">
<meta property="twitter:image" content="{{$imagen_shared}}">
{{-- url canonical --}}
<link rel="canonical" href="{{$url}}" />
<meta name="csrf-token" content="{{ csrf_token() }}">

@php
// importante para el color de las letras del header dark o light
    $color_header='dark';
@endphp
@endsection


@section('content')
    <section class="d-block d-lg-none"  style='min-height:10vh' style="background:#151515" >
    </section>
    <!-- hero -->
    <section class="pt-0" style="background:#151515">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 d-none d-sm-block text-center m-5">
              @if(session()->has('usuario_hot'))
              <img width="300px" src="{{asset('imagen/funnels/hi-five.svg')}}" alt="Thank-you">
              @else
              <img width="400px" src="{{asset('imagen/funnels/web-site.svg')}}" alt="tienda de instagram" >
              @endif
            </div>

            <div class="col-12 p-2"> 
              @if(session()->has('usuario_hot'))
              <h1 class="text-center text-white" style="font-family: Rubik;"><b>{{session()->get('usuario_hot', '').','}}</b> Gracias por dejarnos tus datos,<br> 
              </h1>
                <h2 class="h3 text-center text-white">
                  Pronto recibiras un correo. <b class="text-white">¡Esta atento!<b> 
                </h2>
              @else
              <h1 class="text-center text-white" style="font-family: Rubik;">¿Estas buscando una Agencia<br>
                Para tu <b class="text-white">Desarrollo Web<b>?
              </h1>
              <h2 class="text-center text-white h5">
                <b>@if (session()->has('usuario_hot')) {{session()->get('usuario_hot', '').','}} @endif</b> Te ofrecemos un servicio de desarrollo web de primera para tu marca, empresa o emprendimiento.<br>  
              </h2>
            </div>
            @endif
           
          </div>
        </div>  
        <div class="row">
          <div class="col-12 text-center">
           @if (!session()->has('usuario_hot'))
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-lg btn-primary  px-5 btn-rounded m-1" data-toggle="modal" data-target="#modelId_info" style=" color:white">
              Solicitar reunión
            </button>
           @endif
            <a href="#oferta" class="btn btn-rounded btn-secondary  m-1">Leer Más</a>
          </div>
        </div>  
        <div class="row">
          <div class="col-12 text-center">
            <small class=" text-muted">**Asegurate de leer toda nuestra propuesta</small>
          </div>
        </div>
      </section>
      <!-- / hero -->

<style>
 html{scroll-behavior: smooth;}
</style>
  
      <section class="bg-white separator-top separator-bottom py-4 p-2" id="oferta">
        <div class="container">
          <div class="row">
            <div class="col-md-6 order-2 order-md-1">
              <h2 class="text-dark">¡Hola, Somos <b class="text-dark">OXAS</b>!</h2>
              <p class="text-dark h5">
                Una agencia digital especializada en el diseño y desarrollo de <mark class="bg-primary"><b>Paginas Web.</b></mark><br><br>
                Contamos con un  <mark class="bg-primary"><b>equipo profesional</b></mark>, que te ayudaran a lograr las metas de tu negocio.
                <br><br>
              </p>
              <div class="d-flex">
                <a class="btn btn-primary btn-rounded align-self-center" href="{{route('nosotros')}}" target="_blank">Conoce de nosotros</a>
                <a class="btn btn-primary-outline" href="https://www.instagram.com/oxas.tech/" target="_blank">
                  <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.6" clip-path="url(#clip0)">
                    <path d="M39.9609 11.7601C39.8672 9.63475 39.5235 8.17359 39.0311 6.90748C38.5232 5.56353 37.7418 4.36029 36.7181 3.36003C35.7178 2.34421 34.5066 1.55487 33.1783 1.05489C31.9048 0.562549 30.4513 0.218854 28.3259 0.125146C26.1847 0.0235031 25.505 0 20.0742 0C14.6435 0 13.9637 0.0235031 11.8304 0.11721C9.70506 0.210918 8.2439 0.554918 6.97809 1.04696C5.63384 1.55487 4.4306 2.33627 3.43034 3.36003C2.41452 4.36029 1.62549 5.57146 1.12521 6.89985C0.632861 8.17359 0.289166 9.62682 0.195459 11.7522C0.0938156 13.8934 0.0703125 14.5732 0.0703125 20.0039C0.0703125 25.4347 0.0938156 26.1144 0.187523 28.2477C0.28123 30.3731 0.62523 31.8342 1.11757 33.1003C1.62549 34.4443 2.41452 35.6475 3.43034 36.6478C4.4306 37.6636 5.64177 38.4529 6.97016 38.9529C8.2439 39.4453 9.69713 39.789 11.8228 39.8827C13.9558 39.9767 14.6358 39.9999 20.0666 39.9999C25.4973 39.9999 26.1771 39.9767 28.3104 39.8827C30.4357 39.789 31.8969 39.4453 33.1627 38.9529C35.8509 37.9136 37.9763 35.7882 39.0156 33.1003C39.5076 31.8266 39.8516 30.3731 39.9453 28.2477C40.039 26.1144 40.0625 25.4347 40.0625 20.0039C40.0625 14.5732 40.0546 13.8934 39.9609 11.7601ZM36.3588 28.0914C36.2727 30.0449 35.9446 31.0998 35.6711 31.8031C34.999 33.5457 33.616 34.9287 31.8734 35.6008C31.1701 35.8743 30.1076 36.2024 28.1617 36.2882C26.0519 36.3822 25.4192 36.4054 20.0821 36.4054C14.7451 36.4054 14.1044 36.3822 12.0023 36.2882C10.0488 36.2024 8.99386 35.8743 8.2906 35.6008C7.42343 35.2803 6.63409 34.7724 5.9934 34.1082C5.32921 33.4596 4.8213 32.6782 4.5008 31.811C4.22731 31.1078 3.89918 30.0449 3.81341 28.0994C3.7194 25.9896 3.6962 25.3565 3.6962 20.0195C3.6962 14.6824 3.7194 14.0417 3.81341 11.9399C3.89918 9.98639 4.22731 8.93149 4.5008 8.22823C4.8213 7.36075 5.32921 6.57172 6.00134 5.93072C6.64966 5.26653 7.43106 4.75862 8.29854 4.43843C9.0018 4.16494 10.0646 3.83681 12.0102 3.75073C14.12 3.65703 14.753 3.63352 20.0898 3.63352C25.4348 3.63352 26.0675 3.65703 28.1697 3.75073C30.1232 3.83681 31.1781 4.16494 31.8813 4.43843C32.7485 4.75862 33.5378 5.26653 34.1785 5.93072C34.8427 6.57935 35.3506 7.36075 35.6711 8.22823C35.9446 8.93149 36.2727 9.99402 36.3588 11.9399C36.4525 14.0497 36.476 14.6824 36.476 20.0195C36.476 25.3565 36.4525 25.9816 36.3588 28.0914Z" fill="#8ED825"/>
                    <path d="M20.0743 9.72852C14.4015 9.72852 9.79883 14.3309 9.79883 20.004C9.79883 25.6771 14.4015 30.2794 20.0743 30.2794C25.7474 30.2794 30.3497 25.6771 30.3497 20.004C30.3497 14.3309 25.7474 9.72852 20.0743 9.72852ZM20.0743 26.6694C16.394 26.6694 13.4088 23.6845 13.4088 20.004C13.4088 16.3234 16.394 13.3385 20.0743 13.3385C23.7548 13.3385 26.7397 16.3234 26.7397 20.004C26.7397 23.6845 23.7548 26.6694 20.0743 26.6694V26.6694Z" fill="#8ED825"/>
                    <path d="M33.1549 9.32219C33.1549 10.6469 32.0808 11.721 30.7558 11.721C29.4311 11.721 28.3569 10.6469 28.3569 9.32219C28.3569 7.99716 29.4311 6.92334 30.7558 6.92334C32.0808 6.92334 33.1549 7.99716 33.1549 9.32219V9.32219Z" fill="#8ED825"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="40" height="40" fill="white"/>
                    </clipPath>
                    </defs>
                    </svg>
                </a>

              </div>
              <p class="text-dark h6 m-2">
                **Si estas buscando una agencia que construya tu sitio web, esta es tu oportunidad.  
              </p>
            </div>
            <div class="col-md-6 order-1 order-md-2">
              <img src="{{asset('imagen/illustrations/draw-1.svg')}}" alt="demos">
            </div>
          </div>
        </div>
    </section>

      {{-- video promocional --}}
      <section class="bg-white p-2">
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <img src="{{asset('imagen/illustrations/draw-6.svg')}}" alt="demos">
            </div>
            <div class="col-sm-6">
              <span class="eyebrow text-dark">Clientes</span>
              <h2 class="text-dark">Algunos <b class="text-dark">SITIOS WEB</b>
              </h2>
              <p class="text-dark h6">Te mostramos tres de nuestros trabajos. ¡Observa nuestro trabajo!</p>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="https://distrialimentosdelcentro.com/" role="button">Web corporativa de Alimentos</a>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="https://ecofoodsservices.com/" role="button">Web Corporativa de Azucarera</a>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="https://servielectra.com.ve/" role="button">Web Corporativa de Fabricante de Resistencias</a>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="http://store.vzla.cc/" role="button">Ecommerce de PC & Celulares</a>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="http://autos-latam.com/" role="button">Marketplace de Carros clasicos</a>
            </div>
          </div>
        </div>

      </section>
      {{-- video promocional --}}

   

      <!-- features -->
      <section class="bg-white separator-top separator-bottom p-2" id="beneficios">
        <div class="container">
          <div class="row">
            <div class="col">
              <h2 ><b class="text-dark">BENEFICIOS DE LA OFERTA...</b></h2>
            </div>
          </div>
          <div class="row gutter-2 gutter-lg-4">
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/tienda.svg')}}" alt="tienda" width="50%">
                </i>
              
              </div>
              <p class="text-dark" style="font-weight: 400"><b class="text-dark">Desarrollo de sitio web</b> a la medida para tu empresa, marca o emprendimiento <b class="text-dark"></b> </p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/cms.svg')}}" alt="cms" width="50%">
                </i>
              
              </div>
              <p class="text-dark" style="font-weight: 400">Administrador para <b class="text-dark">gestionar publicidad, leads, usuarios, ventas, compradores,</b> etc.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/asesoria.svg')}}" alt="asesoria" width="50%">
                </i>
              
              </div>
              <p class="text-dark" style="font-weight: 400"><b class="text-dark">Sesiónes de acompañamiento</b> y revision al desarrollar el proyecto.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/design.svg')}}" alt="diseño" width="50%">
                </i>
              
              </div>
              <p class="text-dark" style="font-weight: 400">Construimos el sitio web adaptada a tu marca. El <b class="text-dark">diseño responsivo</b> se adapta a cualquier dispositivo.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/medir.svg')}}" alt="medir" width="50%">
                </i>
              </div>
              <p class="text-dark" style="font-weight: 400">Instalamos <b class="text-dark">Google analitic</b> para medir la adquicision, comportamiento y conversiones del sitio web.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/extra.svg')}}" alt="extra" width="50%">
                </i>
                <div class="media-body">
                  {{-- <h5 class="fs-20 font-weight-normal"><b class="text-primary">Extras</b></h5> --}}
                </div>
              </div> 
              <p class="text-dark" style="font-weight: 400">Si lo deseas, el <b class="text-dark">domimino, Hosting y SSL</b> serán incluidos en la oferta.</p>
            </div>
          </div>
         
          <div class="row">
            <div class="col-12">
              <p class="lead text-center text-dark" ><b class="text-primary"> ¿Estás Listo <b class="text-primary">@if (session()->has('usuario_hot')) {{session()->get('usuario_hot', '')}} @endif</b>?</b> Si, ¡Quiero una conversación!. 
                @if (!session()->has('usuario_hot'))
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-rounded ml-1" data-toggle="modal" data-target="#modelId_conversacion">
                      Solicitar
                    </button>
                  @else  
                  <a href="https://api.whatsapp.com/send?phone=584244545814&text=Hola,%20Quiero%20informacion%20de%20sus%20Servicios." class="btn btn-rounded btn-primary ml-1">Atención al Cliente</a>
                  @endif
            </div>
          </div>
        </div>
      </section>
      <!-- / features -->

    {{-- modal de lead informacion --}}
          <div class="modal fade " id="modelId_info" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                @if (session()->has('usuario_hot'))
                <h6 class="text-dark p-2">{{session()->get('usuario_name', '')}}, <br><br>Pronto recibiras la invitación de uno de nuestros asesores comerciales. ¡Esta atento!</h6>
              @else 
              
              <form action="{{route('Lead.store')}}" method="post">
                  @csrf
                  @method('post')
                  <input type="hidden" name="funnel_type" value="Solicitud-reunion-superior">
                  <input type="hidden" name="id_funnel" value="02">

                  <div class="modal-header">
                      {{-- <h5 class="modal-title"><span class="text-dark">¡Quiero reunirme con un asesor comercial!</span></h5> --}}
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                        top: 0;
                        right: 0;">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body py-0 px-0 px-sm-3">
                  <div class="container-fluid">
                    <div class="text-center">
                      <img src="{{ asset('imagen/funnels/meet.svg') }}" alt="reunion" width="80%">
                      <h5 class="modal-title"><span class="text-dark">¡Quiero reunirme con un asesor!</span></h5>
                      <h6 class=" mb-3 " style="color:#BCBCBC">Completa los datos y pronto recibiras un correo.</h6>
                     </div>
                      <div class="form-group " >
                        <label for="">Nombre y Apellido</label>
                        <input style="border-color: #f5f5f5" type="text"
                          class="form-control  text-dark" name="nombre" id="nombre"  placeholder="Nombre" required>
                      </div>
                      <div class="form-group">
                        <label for="">Correo</label>
                        <input style="border-color: #f5f5f5" type="email"
                          class="form-control text-dark" name="correo" id="correo"  placeholder="Correo" required>
                      </div>
                      
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-block m-1" data-dismiss="modal">Cerrar</button>
                  <button id="" type="submit" class="btn btn-primary btn-block m-1">Continuar</button>
                </div>
              </form>
              @endif  
              </div>
            </div>
          </div>
    {{-- modal de lead  --}}

    
    {{-- modal de lead precio --}}
    <div class="modal fade " id="modelId_conversacion" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          @if (session()->has('usuario_hot'))
           <h6 class="text-dark p-2">{{session()->get('usuario_name', '')}}, <br><br>Pronto recibiras la invitación de uno de nuestros asesores comerciales. ¡Esta atento!</h6>
          @else 
                  <form action="{{route('Lead.store')}}" method="post">
                      @csrf
                      @method('post')
                      <input type="hidden" name="funnel_type" value="Solicitud-reunion-inferior">
                      <input type="hidden" name="id_funnel" value="02">
                      <div class="modal-header">
                          {{-- <h5 class="modal-title"><span class="text-dark">¡Quiero reunirme con un asesor comercial!</span></h5> --}}
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                            top: 0;
                            right: 0;">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body py-0 px-0 px-sm-3">
                      <div class="container-fluid">
                        <div class="text-center">
                          <img src="{{ asset('imagen/funnels/meet.svg') }}" alt="reunion" width="80%">
                          <h5 class="modal-title"><span class="text-dark">¡Quiero reunirme con un asesor!</span></h5>
                          <h6 class=" mb-3 " style="color:#BCBCBC">Completa los datos y pronto recibiras un correo.</h6>
                         </div>
                          <div class="form-group " >
                            <label for="">Nombre y Apellido</label>
                            <input style="border-color: #f5f5f5" type="text"
                              class="form-control  text-dark" name="nombre" id="nombre"  placeholder="Nombre" required>
                          </div>
                          <div class="form-group">
                            <label for="">Correo</label>
                            <input style="border-color: #f5f5f5" type="email"
                              class="form-control text-dark" name="correo" id="correo"  placeholder="Correo" required>
                          </div>
          
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary btn-block m-1" data-dismiss="modal">Cerrar</button>
                      <button id="" type="submit" class="btn btn-primary btn-block m-1">Continuar</button>
                    </div>
                  </form>
          @endif  

        </div>
      </div>
    </div>
{{-- modal de lead  --}}

              <script>
                $('#exampleModal').on('show.bs.modal', event => {
                  var button = $(event.relatedTarget);
                  var modal = $(this);
                  // Use above variables to manipulate the DOM
        
                  
                });
              </script>

              
      
@endsection