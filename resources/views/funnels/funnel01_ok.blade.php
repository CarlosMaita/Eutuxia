@extends('common.main_plantilla')

@section('title')
@php
  $titulo = "Tienda de Instagram - Requisitos y configuración ";
  $descripcion = "";   
  $url = "https://oxas.tech/tienda-de-intagram-venezuela";   
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
<meta property="og:image" content="{{asset('imagen/oxas/team.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{$url}}">
<meta property="twitter:title" content="{{$titulo}}">
<meta property="twitter:description" content="{{$descripcion}}">
<meta property="twitter:image" content="{{asset('imagen/oxas/team.jpg')}}">
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
    <section class="">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 mt-5">
              <h1 class="text-decorated text-center">Bienvenido <b>@if (session()->has('usuario_name'))
                {{  ucfirst(session()->get('usuario_name', '')) }}
              @endif
            </b></h1>
              <p class="text-center">La funcionalidad de <mark style="background-color: #8ed825;" >Instagram shopping</mark> te permite tener una tienda dentro de instagram.<br>
              </p>
              <img class="d-sm-none" src="{{asset('imagen/funnels/tienda-instagram-01.jpg')}}" alt="tienda de instagram">
              <h2 class="text-center h5"><b>¡Te ayudaremos a configurar la tuya para Venezuela!</b></h2>
              <p class="text-center">
               <div class="row">
                  {{-- <div class="col-sm-6 text-right p-1">
                      <a name="" id="" class="btn btn-primary btn-block" href="#beneficios" role="button">Beneficios</a>
                  </div> --}}
                  <div class="col-12 p-1">
                    <!-- Button trigger modal -->
                      <a type="button" class="btn btn-outline-primary btn-block" href="#requisitos">
                        Ver Requisitos
                      </a>
                  </div> 
                </div> 
                  
              </p>
            </div>
            <div class="col-lg-4 d-none d-sm-block">
              <img src="{{asset('imagen/funnels/tienda-instagram-01.jpg')}}" alt="tienda de instagram">
            </div>
          </div>
        </div>    
      </section>
      <!-- / hero -->
  
      
      
      
  
      <!-- features -->
      <section class="bg-primary separator-top separator-bottom" id="beneficios">
        <div class="container text-white">
          <div class="row">
            <div class="col">
              <h2><b>Beneficios</b> de tener una Tienda de instagram</h2>
            </div>
          </div>
          <div class="row gutter-2 gutter-lg-4">
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-50 text-primary mr-3">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bag-fill" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#8ED825" stroke-width="0.5" fill="none"  d="M8 1a2.5 2.5 0 0 0-2.5 2.5V4h5v-.5A2.5 2.5 0 0 0 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                  </svg>
                </i>
                <div class="media-body">
                  <h5 class="fs-20 font-weight-normal"><b>PROMOCIÓN</b></h5>
                </div>
              </div>
              <p>Promocionar tus productos directamente a los usuarios de Instagram a través de publicaciones e historias</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-50 text-primary mr-3">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#8ED825" stroke-width="0.5" fill="none"  d="M15 4H1v8h14V4zM1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1z"/>
                    <path  stroke="#8ED825" stroke-width="0.5" fill="none"  d="M13 4a2 2 0 0 0 2 2V4h-2zM3 4a2 2 0 0 1-2 2V4h2zm10 8a2 2 0 0 1 2-2v2h-2zM3 12a2 2 0 0 0-2-2v2h2zm7-4a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                  </svg>
                </i>
                <div class="media-body">
                  <h5 class="fs-20 font-weight-normal"><b>PRECIO</b></h5>
                </div>
              </div>
              <p>Podrás mostrar precios de los productos presentados en las publicaciones y facilitar el proceso de compra a tus seguidores.</p>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="media align-items-center mb-2">
                <i class="svg-icon fs-60 text-primary mr-3">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="#8ED825" stroke-width="0.5" fill="none" d="M1 2.828v9.923c.918-.35 2.107-.692 3.287-.81 1.094-.111 2.278-.039 3.213.492V2.687c-.654-.689-1.782-.886-3.112-.752-1.234.124-2.503.523-3.388.893zm7.5-.141v9.746c.935-.53 2.12-.603 3.213-.493 1.18.12 2.37.461 3.287.811V2.828c-.885-.37-2.154-.769-3.388-.893-1.33-.134-2.458.063-3.112.752zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                  </svg>
                </i>
                <div class="media-body">
                  <h5 class="fs-20 font-weight-normal"><b>CATALOGO</b></h5>
                </div>
              </div>
              <p>Podrás integrar tu catálogo de productos con tu perfil de Instagram y mostrarlo en tu tienda virtual.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <!-- Button trigger modal -->
              <button type="button"class="btn btn-primary" data-toggle="modal" data-target="#modelId">
                Ver Requisitos
              </button>
             
            </div>
          </div>
        </div>
      </section>
      <!-- / features -->

      
    <!-- blog -->
    <section class="separator-bottom" id="requisitos">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <h2><b>Requisitos</b> para Tienda Instagram</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <article class="news">
              <a href="https://www.facebook.com/business/help/549256849084694" target="_blank" rel="noopener noreferrer">
                <h3 class="news-title">Estar en la lista de países donde está habilitada la tienda</h3>
                <time datetime="2018-02-02">Verificar pais</time>
              </a>
            </article>
            <article class="news">
              <a href="">
                <h3 class="news-title">Ser una cuenta de Instagram confiable</h3>
                <time datetime="2018-02-02">Nada de Trampas</time>
              </a>
            </article>
            <article class="news">
              <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/business/learn/lessons/create-an-instagram-business-profile?course_id=428024244490300&curriculum_id=809171499485562">
                <h3 class="news-title">Tener un perfil de empresa de instagram</h3>
                <time datetime="2018-02-02">Es necesario</time>
              </a>
            </article>
            <article class="news">
              <a href="">
                <h3 class="news-title">Tener una Fan page en Facebook</h3>
                <time datetime="2018-02-02">Dale una mirada</time>
              </a>
            </article>
            <article class="news">
              <a href="https://oxas.tech/contactanos" style="background:#8ed825">
                <h3 class="news-title"><b>Tener una página web tipo Ecommerce o Catalogo</b></h3>
                <time datetime="2018-02-02">Aqui te la construimos</time>
              </a>
            </article>
            <article class="news">
              <a href="#none">
                <h3 class="news-title">Tener catálogo de productos en facebook</h3>
                <time datetime="2018-02-02">Siempre es Bueno</time>
              </a>
            </article>
            <article class="news">
              <a href="#none">
                <h3 class="news-title">Tener la última versión de Instagram</h3>
                <time datetime="2018-02-02">Debes estar actualizado</time>
              </a>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <p class="lead text-center"><b>¿Sabias que necesitas un sitio web?</b><br>mmm... Tenemos <b style="color:#8ed825">ASESORÍA + SITIO WEB</b> para tu tienda de Instagram.<br></p>
          </div>
        </div>
      </div>
    </section>
    <!-- / blog -->

      <section class="bg-light" id="pasos">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-6 text-center">
              <h2>Configurar <br><b>Tienda de Instagram</b></h2>
              <p>Los pasos para iniciar una tienda de Instagram, lo primero será verificar que tienes todos los requisitos mencionados anteriormente.</p>
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
                    <h5>Verificar requisitos</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Antes de poder comenzar una tienda de Instagram, debes cumplir con todos los requisitos de Instagram y dar cumplimiento a los <a href="https://help.instagram.com/1627591223954487?helpref=uf_permalink" target="_blank" rel="noopener noreferrer"> terminos comerciales de facebook</a>.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Agrega tu catálogo</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Las tiendas de Instagram obtienen información del producto de las tiendas de Facebook. Entonces, ahora que tu cuenta de Instagram debe estar vinculada a tu página de Facebook, debes <a href="https://www.facebook.com/business/help/1275400645914358?id=725943027795860" target="_blank" rel="noopener noreferrer">crear una tienda de Facebook</a>  y sincronizar tu catálogo de productos.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion" data-accordion>
                  <div class="accordion-control" data-control>
                    <h5>Habilitar la Funcionalidad</h5>
                  </div>
                  <div class="accordion-content" data-content>
                    <div class="accordion-content-wrapper">
                      <p>Sigue los siguientes paso que se muestras <a href="https://www.facebook.com/help/instagram/1108695469241257?helpref=related" target="_blank" rel="noopener noreferrer">Aqui</a>.<br>Dirijete a Instagram en tu Smartphone y solicita la opción de Instagram Shopping desde instagram. Una vez que recibas la notificación de aprobación, todo lo que necesitas hacer es confirmar qué tienda de Facebook deseas conectar a tu perfil de Instagram.</p>
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
              <p class="lead text-center"><b>¿Necesitas ayuda con la configuración?</b> Si, ¡Quiero ayuda!. <a href="https://api.whatsapp.com/send?phone=584143446225&text=Hola,%20Necesito%20ayuda%20con%20mi%20tienda%20de%20Instagram.%20" class="btn btn-rounded btn-primary ml-1">Whatsapp</a></p>
            </div>
          </div>
        </div>
      </section>

     

      
@endsection