@extends('common.main_plantilla')

@section('title')
@php
  $titulo = "Tienda de Instagram - Requisitos y configuración ";
  $descripcion = "¿Ya sabes como configurar tu tienda en instagram?, En este Articulo te damos todos los detalles.";   
  $url = "https://oxas.tech/tienda-de-instagram-venezuela_ok";   
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
<meta property="og:image" content="{{asset('imagen/funnels/tienda-instagram-03.svg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{$url}}">
<meta property="twitter:title" content="{{$titulo}}">
<meta property="twitter:description" content="{{$descripcion}}">
<meta property="twitter:image" content="{{asset('imagen/funnels/tienda-instagram-03.svg')}}">
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
    <section class="pt-5 m-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 mt-5">
              <h1 class="text-decorated text-center">Bienvenido <b>@if (session()->has('usuario_name'))
                {{  ucfirst(session()->get('usuario_name', '')) }}
              @endif
            </b></h1>
              <p class="text-center">La funcionalidad de <mark style="background-color: #8ed825;" >Instagram shopping</mark> te permite tener una tienda dentro de instagram.<br>
              </p>
              <img class="d-sm-none" src="{{asset('imagen/funnels/tienda-instagram-03.svg')}}" alt="tienda de instagram">
              <h2 class="text-center h5"><b>¡Te ayudaremos a configurar la tuya para Venezuela!</b></h2>
              <p class="text-center">
               <div class="row">
                  {{-- <div class="col-sm-6 text-right p-1">
                      <a name="" id="" class="btn btn-primary btn-block" href="#beneficios" role="button">Beneficios</a>
                  </div> --}}
                  <div class="col-12 p-1">
                    <!-- Button trigger modal -->
                      <a type="button" class="btn btn-outline-primary btn-block d-block d-sm-none" href="#requisitos">
                        Ver Requisitos
                      </a>
                  </div> 
                </div> 
                  
              </p>
            </div>
            <div class="col-lg-6 d-none d-sm-block">
              <img src="{{asset('imagen/funnels/tienda-instagram-03.svg')}}" alt="tienda de instagram">
            </div>
          </div>
        </div>  
        <div class="row">
          <div class="col-12">
            <p class="lead text-center"><b>¡Empecemos por lo primero!</b><br> Los <b style="color:#8ed825">REQUISITOS</b> para tu tienda de Instagram.<br></p>
          </div>
        </div>  
      </section>
      <!-- / hero -->
  
      
      
    
      
    <!-- blog -->
    <section class="separator-bottom" id="requisitos">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h2 class="text-center">Para tener una tienda en Instagram <b>NECESITAS...</b></h2>
			   <small>**hacer click en los requisitos para más información</small>
          </div>
        </div>   
        <!-- Button trigger modal -->
        <button id="btn_modal1" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId1">
          Ver Requisitos
        </button>
          <!-- Button trigger modal -->
          <button id="btn_modal2" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId2">
            Ver Requisitos
          </button>
            <!-- Button trigger modal -->
        <button id="btn_modal3" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId3">
          Ver Requisitos
        </button>
            <!-- Button trigger modal -->
            <button id="btn_modal4" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId4">
              Ver Requisitos
            </button>

               <!-- Button trigger modal -->
        <button id="btn_modal5" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId5">
          Ver Requisitos
        </button>
          <!-- Button trigger modal -->
          <button id="btn_modal6" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId6">
            Ver Requisitos
          </button>
            <!-- Button trigger modal -->
        <button id="btn_modal7" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId7">
          Ver Requisitos
        </button>
            <!-- Button trigger modal -->
            <button id="btn_modal8" type="button" class="btn btn-outline-primary btn-block d-none" data-toggle="modal" data-target="#modelId8">
              Ver Requisitos
            </button>
            

        <div class="row justify-content-center">
          <div class="col-md-8">
            {{-- <article class="news">
              <a href="https://www.facebook.com/business/help/549256849084694" target="_blank" rel="noopener noreferrer">
                <h3 class="news-title">Estar en la lista de países donde está habilitada la tienda</h3>
                <time datetime="2018-02-02">Verificar pais</time>
              </a>
            </article> --}}
            <article class="news">
              <a onclick="$('#btn_modal1').click()">
                <h3 class="news-title">Tener una cuenta de Instagram confiable</h3>
                <time datetime="2018-02-02">Nada de Trampas</time>
              </a>
            </article>
            <article class="news">
              <a onclick="$('#btn_modal2').click()" >
                <h3 class="news-title">Tener un perfil de empresa de instagram</h3>
                <time datetime="2018-02-02">Es necesario</time>
              </a>
            </article>
            <article class="news">
              <a onclick="$('#btn_modal3').click()">
                <h3 class="news-title">Tener la última versión de Instagram</h3>
                <time datetime="2018-02-02">Debes estar actualizado</time>
              </a>
            </article>
            <article class="news">
              <a onclick="$('#btn_modal4').click()">
                <h3 class="news-title">Tener una Fan page en Facebook</h3>
                <time datetime="2018-02-02">Dale una mirada</time>
              </a>
            </article>
           
            <article class="news">
              <a onclick="$('#btn_modal5').click()">
                <h3 class="news-title">Dominio Único</h3>
                <time datetime="2018-02-02">El de tu sitio web</time>
              </a>
            </article>
            <article class="news">
              <a onclick="$('#btn_modal6').click()"  style="background:#8ed825">
                <h3 class="news-title"><b>Tener una página web que represente a tu negocio</b></h3>
                <time datetime="2018-02-02">Aqui te la construimos</time>
              </a>
            </article>
            <article class="news">
              <a onclick="$('#btn_modal7').click()">
                <h3 class="news-title">Tener una cuenta comercial en Facebook Business</h3>
                <time datetime="2018-02-02">El control digital del negocio</time>
              </a>
            </article>
            <article class="news">
              <a onclick="$('#btn_modal8').click()">
                <h3 class="news-title">Tener catálogo de productos</h3>
                <time datetime="2018-02-02">Los que vas a mostrar</time>
              </a>
            </article>
           
           
     
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="lead text-center"><b>¿Aún no tienes tu pagina web?</b><br>mmm... Te brindamos <b style="color:#8ed825">ASESORÍA + SITIO WEB</b> para tu tienda de Instagram.<br>
              <a href="https://api.whatsapp.com/send?phone=584165124043&text=Hola,%20Quiero%20mi%20tienda%20de%20Instagram%20en%20promoción%20con%20la%20ecommerce.%20" class="btn btn-rounded btn-primary ml-1">Promoción</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- / blog -->

      <section class="bg-light" id="pasos">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <h2><b>Configura</b> <br>tú tienda de Instagram</h2>
              <p>Recuerda cumplir con todos los requisitos de Instagram antes mencionados y dar cumplimiento a los <a href="https://help.instagram.com/1627591223954487?helpref=uf_permalink" target="_blank" rel="noopener noreferrer"> terminos comerciales de facebook</a>.</p>
              {{-- <p>Los pasos para iniciar una tienda de Instagram, lo primero será verificar que tienes todos los requisitos mencionados anteriormente.</p> --}}
              <small>**hacer click en los número para más información</small>
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-5">
              <img src="{{ asset('imagen/funnels/tienda-instagram-02.svg')}}" alt="Image">
            </div>
            <div class="col-md-7">
              <div class="accordion-group accordion-group-steps" data-accordion-group>
                <div class="accordion open" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Tener cuenta de empresa en Instagram</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>El primer paso es tener tu cuenta de Instagram apta para habilitar la funcionalidad, para ello debes tener la cuenta de tu negocio en modo “empresa”. También, deberás tener la última versión de Instagram instalada en tu Smartphone.  Ambos requisitos  son indispensables.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Crear la Fan page de tu negocio</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Si aún no tienes una fan page de tu negocio en Facebook este es el momento de crearla, con ella tendrás mayor exposición a tus clientes. Además, se creará una cuenta en Facebook Business Necesaria para tener tu tienda. </p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Crear un negocio en Facebook</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Para activar una cuenta comercial en Facebook Business deberás crear un negocio en Facebook y vincularlo a tu Fan page. Esta opción la puedes conseguir en el dashboard de Facebook Business Suite en Mas herramientas >> Configuración del negocio.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Verificar dominio de tu sitio web</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Para poder crear una tienda Facebook debe verificar  el dominio de tu sitio web, este debe ser único y que represente a tu empresa, marca o negocio. Este es un requisito comercial fue añadido reciente por Facebook para poder activar la cuenta comercial de tu negocio en Facebook Business. </p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Crear catálogo de productos</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Ya con la funcionalidad comercial habilitada en Facebook Business puedes crear tu catalogo en el administrador de catálogos y luego, agregar tus productos de forma manual, mediante una hoja de cálculo en Google o de forma automática con Pixel. Los productos que añadas deben tener una URL del dominio de tu sitio web registrada, de lo contrario no funcionará.</p>
                    </div>
                  </div>
                </div>

                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Crear tu tienda en Instagram</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Ya con el catalogo creado, ve a Instagram en tu Smartphone y solicita la opción de Instagram Shopping. Para hacer esto vamos al menú, ve a Configuración >> Negocio  y has click en “Compras en Instagram” y Dale “Empezar”. Lo siguiente será vincular tu catálogo de facebook previamente creado con  tu cuenta de Instagram.</p>
                    </div>
                  </div>
                </div>




                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Usa Instagram Shopping</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Ahora que ya está todo configurado, puedes comenzar a etiquetar tus productos en publicaciones e historias de Instagram.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <p class="lead text-center"><b>¿Necesitas ayuda con la configuración?</b> Si, ¡Quiero ayuda!. <a href="https://api.whatsapp.com/send?phone=584165124043&text=Hola,%20Necesito%20ayuda%20con%20mi%20tienda%20de%20Instagram.%20" class="btn btn-rounded btn-primary ml-1">Whatsapp</a></p>
            </div>
          </div>
        </div>
      </section>
      



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