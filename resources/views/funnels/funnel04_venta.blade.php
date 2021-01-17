@extends('common.main_plantilla')

@section('title')
@php
  $titulo = "Ecommerce para tienda de Instagram";
  $descripcion = "Necesitas una ecommerce que te permita activar Instagram Shopping";   
  $url = "https://oxas.tech/tienda-de-instagram-venta";   
  $imagen_shared = asset('imagen/funnels/share-tienda.jpg'); 
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

    <!-- hero -->
    <section class="bg-primary pt-0">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 d-none d-sm-block text-center" style="mix-blend-mode: multiply;">
              <img src="{{asset('imagen/funnels/tienda-instagram-03.svg')}}" alt="tienda de instagram">
            </div>

            <div class="col-12"> 
              @if(session()->has('usuario_hot'))
              <h1 class="text-center text-white" style="font-family: Rubik;"><b>{{session()->get('usuario_hot', '').','}}</b> Gracias por dejarnos tus datos, pronto recibiras los precios por Correo. <br> 
                <b class="text-white">¡Esta atento!<b> 
              </h1>
              @else
              <h1 class="text-center text-white" style="font-family: Rubik;">¿Aún no tienes Ecommerce?<br> Y Buscas activar
                <b class="text-white">Instagram Shopping<b> 
              </h1>
              <h2 class="text-center text-white h5">
                <b>@if (session()->has('usuario_hot')) {{session()->get('usuario_hot', '').','}} @endif</b> Te construimos un sitio web  que te permite activar Instagram Shopping. <br>Incrementa las Ventas de tu empresa.  
              </h2>
            </div>
            @endif
           
          </div>
        </div>  
        <div class="row">
          <div class="col-12 text-center">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-dark btn-lg  px-5 btn-rounded" data-toggle="modal" data-target="#modelId_info">
              Solicitar precios
            </button>
          </div>
        </div>  
      </section>
      <!-- / hero -->
  
      <section class="bg-white separator-top separator-bottom py-4 p-2" id="beneficios">
        <div class="container">
          <div class="row">
            <div class="col-md-6 order-2 order-md-1">
              <h2 class="text-dark">¡Nuestra oferta esta <b class="text-dark">GENIAL</b>!</h2>
              <p class="text-dark h5">
                Se trata de una Ecommerce que construiremos para tí en  <mark class="bg-primary"><b>una (1) Semana.</b></mark><br><br>
                Contamos con <mark class="bg-primary"><b>Precios Increibles</b></mark>, aceptamos Efectivo, Zelle, Paypal y hasta Criptos.
                <br><br>
              </p>
              <p class="text-dark h6">
                **Si estas buscando una ecommerce para vender una manera mas agresiva, esta es tu oportunidad.  
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
              <span class="eyebrow text-dark">Ecommerce</span>
              <h2 class="text-dark">Algunos <b class="text-dark">DEMOS</b>
              </h2>
              <p class="text-dark h6">Tenemos tres modelos de ecommerce. ¡Descubre sus funcionalidades!</p>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="http://shop.vzla.cc/" role="button">Tienda de Ropa</a>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="http://tienda.vzla.cc/" role="button">Tienda de Repuestos</a>
              <a name="" id="" class="btn btn-outline-primary btn-block" target="_black" href="http://store.vzla.cc/" role="button">Tienda de PC & Celulares</a>
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
              <p class="text-dark" style="font-weight: 400"><b class="text-dark">Ecommerce</b> para Pymes con <b class="text-dark">carrito de compra</b> que lleva los pedidos al whatsapp. </p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/cms.svg')}}" alt="cms" width="50%">
                </i>
              
              </div>
              <p class="text-dark" style="font-weight: 400">Administrador para <b class="text-dark">gestionar productos, pedidos, compradores, publicidad</b> y usuarios administrativos.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/asesoria.svg')}}" alt="asesoria" width="50%">
                </i>
              
              </div>
              <p class="text-dark" style="font-weight: 400"><b class="text-dark">Una (1) sesión de acompañamiento</b> para analizar tu rendimiento con la plataforma luego de un mes.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/design.svg')}}" alt="diseño" width="50%">
                </i>
              
              </div>
              <p class="text-dark" style="font-weight: 400">Instalamos la ecommerce adaptada a tu marca. El <b class="text-dark">diseño responsivo</b> se adapta a cualquier dispositivo.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-dark mr-3 text-center">
                  <img src="{{asset('/imagen/funnels/medir.svg')}}" alt="medir" width="50%">
                </i>
              </div>
              <p class="text-dark" style="font-weight: 400">Instalamos <b class="text-dark">Google analitic</b> para medir la adquicision, comportamiento y conversiones de la ecommerce.</p>
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
              <p class="text-dark" style="font-weight: 400">El <b class="text-dark">domimino, Hosting y SSL</b> serán incluidos en la oferta.</p>
            </div>
          </div>
         
          <div class="row">
            <div class="col-12">
              <p class="lead text-center text-dark" ><b class="text-primary"> ¿Estás Listo <b class="text-primary">@if (session()->has('usuario_hot')) {{session()->get('usuario_hot', '')}} @endif</b>?</b> Si, ¡Quiero mi tienda!. 
                @if (!session()->has('usuario_hot'))
                  <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-rounded ml-1" data-toggle="modal" data-target="#modelId_precio">
                      Ir a los precios
                    </button>
                  @else  
                  <a href="https://api.whatsapp.com/send?phone=584165124043&text=Hola,%20Quiero%20mi%20ecommerce%20Ya." class="btn btn-rounded btn-primary ml-1">Atención al Cliente</a>
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
                <h6 class="text-dark p-2">{{session()->get('usuario_name', '')}}, <br><br>Pronto recibiras los precios por Correo. ¡Esta atento!</h6>
              @else 
              
              <form action="{{route('Lead.store')}}" method="post">
                  @csrf
                  @method('post')
                  <input type="hidden" name="funnel_type" value="Ecommerce-precio-superior">
                  <input type="hidden" name="id_funnel" value="01">

                  <div class="modal-header">
                      <h5 class="modal-title"><span class="text-dark">¡Quiero saber sobre los precios!</span></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                        top: 0;
                        right: 0;">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <div class="modal-body py-0 px-0 px-sm-3">
                  <div class="container-fluid">
                      <div class="form-group " >
                        <label for="">Nombre</label>
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
    <div class="modal fade " id="modelId_precio" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          @if (session()->has('usuario_hot'))
           <h6 class="text-dark p-2">{{session()->get('usuario_name', '')}}, <br><br>Pronto recibiras los precios por Correo. ¡Esta atento!</h6>
          @else 
                  <form action="{{route('Lead.store')}}" method="post">
                      @csrf
                      @method('post')
                      <input type="hidden" name="funnel_type" value="Ecommerce-precio-inferior">
                      <input type="hidden" name="id_funnel" value="01">
                      <div class="modal-header">
                          <h5 class="modal-title"><span class="text-dark">¡Quiero saber los precios!</span></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                            top: 0;
                            right: 0;">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body py-0 px-0 px-sm-3">
                      <div class="container-fluid">
                          <div class="form-group " >
                            <label for="">Nombre</label>
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