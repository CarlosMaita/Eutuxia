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
    $color_header='light';
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
              <h1 class="text-center text-white" style="font-family: Rubik;">¿Aún no tienes Sitio Web?<br> Y Buscas activar
                <b class="text-white">Instagram Shopping<b> 
              </h1>
              <h2 class="text-center text-white h5">
                Te construimos un sitio web  que te permite activar Instagram Shopping. <br>Incrementa las Ventas de tu empresa.  
              </h2>
            </div>
           
          </div>
        </div>  
        <div class="row">
          <div class="col-12 text-center">
            <button type="button" name="" id="" role="link" onclick="window.location='#precios'" class="btn btn-dark btn-lg  px-5" style="border-radius: 30px" >Ver Precios</button>
          </div>
        </div>  
      </section>
      <!-- / hero -->
  


      <!-- features -->
      <section class="bg-primary separator-top separator-bottom" id="beneficios">
        <div class="container text-white">
          <div class="row">
            <div class="col">
              <h2>Algunos <b>BENEFICIOS...</b></h2>
            </div>
          </div>
          <div class="row gutter-2 gutter-lg-4">
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-50 text-white mr-3">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#8ED825" stroke-width="0.5" fill="none"  d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                  </svg>
                </i>
                <div class="media-body">
                  <h5 class="fs-20 font-weight-normal"><b>PROMOCIÓN</b></h5>
                </div>
              </div>
              <p class="text-white">Podrás promocionar tus productos directamente a los usuarios de Instagram a través de publicaciones e historias</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-50 text-white mr-3">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#8ED825" stroke-width="0.5" fill="none"  d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                    <path  stroke="#8ED825" stroke-width="0.5" fill="none"  d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                  </svg>
                </i>
                <div class="media-body">
                  <h5 class="fs-20 font-weight-normal"><b>PRECIO</b></h5>
                </div>
              </div>
              <p class="text-white">Podrás mostrar precios de los productos presentados en las publicaciones y facilitar el proceso de compra a tus seguidores.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-white mr-3">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#8ED825" stroke-width="0.5" fill="none" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg>
                </i>
                <div class="media-body">
                  <h5 class="fs-20 font-weight-normal"><b>CATALOGO</b></h5>
                </div>
              </div>
              <p class="text-white">Podrás integrar tu catálogo de productos con tu perfil de Instagram y mostrarlo en tu tienda virtual.</p>
            </div>
          </div>
         
          <div class="row">
            <div class="col-12">
              <p class="lead text-center"><b>¿Estás Listo?</b> Si, ¡Quiero mi tienda!. <a href="https://api.whatsapp.com/send?phone=584143446225&text=Hola,%20Quiero%20mi%20tienda%20de%20Instagram.%20" class="btn btn-rounded btn-white ml-1">Ir a una conversación</a></p>
            </div>
          </div>
        </div>
      </section>
      <!-- / features -->


        <!-- Modal de trampas -->
        <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="{{route('Lead.store')}}" method="post">
                @csrf
                @method('post')
                <div class="modal-header">
                    <h5 class="modal-title">Recuerda <b><span style="color:#8ed825">NADA DE TRAMPAS...</span></b><br>
                      {{-- <small>Continuar Leyendo...</small> --}}
                    </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                      top: 0;
                      right: 0;">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body py-0 px-0 px-sm-3">
                <div class="container-fluid">
                  <div class="col-12 text-center p-5">
                    <img src="{{asset('imagen/funnels/tienda-instagram-04.svg')}}" alt="tienda de instagram">
                  </div>
  
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block m-1" data-dismiss="modal">Continuar</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Modal -->
         <!-- Modal de Actualizado -->
         <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="{{route('Lead.store')}}" method="post">
                @csrf
                @method('post')
                <div class="modal-header">
                    <h5 class="modal-title">Eres negocio <b><span style="color:#8ed825">YA DEBERIAS TENERLO</span></b><br>
                      {{-- <small>Continuar Leyendo...</small> --}}
                    </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                      top: 0;
                      right: 0;">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body py-0 px-0 px-sm-3">
                <div class="container-fluid">
                  <div class="col-12 text-center p-0">
                    <img src="{{asset('imagen/funnels/tienda-instagram-06.svg')}}" alt="tienda de instagram">
                  </div>
                </div>
              </div>
              <div class="modal-footer  d-block d-sm-flex">
                <a target="_black" href="https://www.facebook.com/business/learn/lessons/create-an-instagram-business-profile?course_id=428024244490300&curriculum_id=809171499485562" type="button" class="btn btn-secondary btn-block">Información</a>
                <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Continuar</button>
                
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Modal -->

                     <!-- Modal de Actualizado -->
                     <div class="modal fade" id="modelId3" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <form action="{{route('Lead.store')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="modal-header">
                                <h5 class="modal-title">No seas tan Boomer <b><span style="color:#8ed825">ACTUALIZATE</span></b><br>
                                  {{-- <small>Continuar Leyendo...</small> --}}
                                </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                                  top: 0;
                                  right: 0;">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                          <div class="modal-body py-0 px-0 px-sm-3">
                            <div class="container-fluid">
                              <div class="col-12 text-center p-0">
                                <img src="{{asset('imagen/funnels/tienda-instagram-07.svg')}}" alt="tienda de instagram">
                              </div>
              
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-block m-1" data-dismiss="modal">Continuar</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->

        <!-- Modal de Fan page -->
        <div class="modal fade" id="modelId4" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
            <form action="{{route('Lead.store')}}" method="post">
                @csrf
                @method('post')
                <div class="modal-header">
                    <h5 class="modal-title">Mantén informados a tus <b><span style="color:#8ed825">FANS</span></b><br>
                      {{-- <small>Continuar Leyendo...</small> --}}
                    </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                      top: 0;
                      right: 0;">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              <div class="modal-body py-0 px-0 px-sm-3">
                <div class="container-fluid">
                  <div class="col-12 text-center p-0">
                    <img src="{{asset('imagen/funnels/tienda-instagram-05.svg')}}" alt="tienda de instagram">
                  </div>
  
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-block m-1" data-dismiss="modal">Continuar</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        <!-- Modal -->
              <!-- Modal de Dominio -->
              <div class="modal fade" id="modelId5" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <form action="{{route('Lead.store')}}" method="post">
                      @csrf
                      @method('post')
                      <div class="modal-header">
                          <h5 class="modal-title">Es tu nombre en <b><span style="color:#8ed825">INTERNET</span></b><br>
                            {{-- <small>Continuar Leyendo...</small> --}}
                          </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                            top: 0;
                            right: 0;">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body py-0 px-0 px-sm-3">
                      <div class="container-fluid">
                        <div class="col-12 text-center p-5">
                          <img src="{{asset('imagen/funnels/tienda-instagram-08.svg')}}" alt="tienda de instagram">
                        </div>
        
                      </div>
                    </div>
                    <div class="modal-footer  d-block d-sm-flex">
                      <a target="_black" href="https://www.namecheap.com/domains/" type="button" class="btn btn-secondary btn-block m-1 btn-sm-flex"><span class="d-none d-sm-block"></span>Dominio</a>
                      <button type="button" class="btn btn-primary btn-block m-1" data-dismiss="modal">Continuar</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- Modal -->
      
              <!-- Modal de Fan page -->
              <div class="modal fade" id="modelId6" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <form action="{{route('Lead.store')}}" method="post">
                      @csrf
                      @method('post')
                      <div class="modal-header">
                          <h5 class="modal-title">Desarrollamos <b><span style="color:#8ed825">NEGOCIOS DIGITALES</span></b><br>
                            {{-- <small>Continuar Leyendo...</small> --}}
                          </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                            top: 0;
                            right: 0;">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body py-0 px-0 px-sm-3">
                      <div class="container-fluid">
                        <div class="col-12 text-center p-0">
                          <img src="{{asset('imagen/funnels/tienda-instagram-10.svg')}}" alt="tienda de instagram">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer d-block d-sm-flex">
                      <a target="_black" href="https://oxas.tech/nosotros" type="button" class="btn btn-secondary btn-block m-1"><span class="d-none d-sm-block"></span>Quienes somos</a>
                      <button type="button" class="btn btn-primary btn-block m-1" data-dismiss="modal">Continuar</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- Modal -->
      
                     <!-- Modal de cuenta comercial -->
                     <div class="modal fade" id="modelId7" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <form action="{{route('Lead.store')}}" method="post">
                            @csrf
                            @method('post')
                            <div class="modal-header">
                                <h5 class="modal-title">Gestiona tu negocio en <b><span style="color:#8ed825">FACEBOOK</span></b><br>
                                  {{-- <small>Continuar Leyendo...</small> --}}
                                </h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                                  top: 0;
                                  right: 0;">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                          <div class="modal-body py-0 px-0 px-sm-3">
                            <div class="container-fluid">
                              <div class="col-12 text-center p-0">
                                <img src="{{asset('imagen/funnels/tienda-instagram-09.svg')}}" alt="tienda de instagram">
                              </div>
              
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary btn-block m-1" data-dismiss="modal">Continuar</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>
                    <!-- Modal -->
              

              

               <!-- Modal de catalogo de productos -->
               <div class="modal fade" id="modelId8" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <form action="{{route('Lead.store')}}" method="post">
                      @csrf
                      @method('post')
                      <div class="modal-header">
                          <h5 class="modal-title">Consigue mayor <b><span style="color:#8ed825">EXPOSICIÓN</span></b><br>
                            {{-- <small>Continuar Leyendo...</small> --}}
                          </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute;
                            top: 0;
                            right: 0;">
                              <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <div class="modal-body py-0 px-0 px-sm-3">
                      <div class="container-fluid">
                        <div class="col-12 text-center p-0">
                          <img src="{{asset('imagen/funnels/tienda-instagram-03.svg')}}" alt="tienda de instagram">
                        </div>
        
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary btn-block m-1" data-dismiss="modal">Continuar</button>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
              <!-- Modal -->
                    
              
      
@endsection