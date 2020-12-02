@extends('common.main_plantilla')

@section('title')
@php
  $titulo = "Tienda de Instagram - Requisitos y configuración ";
  $descripcion = "¿Ya sabes como configurar tu tienda en instagram?, En este Articulo te damos todos los detalles.";   
  $url = "https://oxas.tech/tienda-de-instagram-venezuela";    
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
<meta property="og:image" content="{{asset('imagen/funnels/share-tienda.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{$url}}">
<meta property="twitter:title" content="{{$titulo}}">
<meta property="twitter:description" content="{{$descripcion}}">
<meta property="twitter:image" content="{{asset('imagen/funnels/share-tienda.jpg')}}">
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
              <h1 class="text-decorated text-center">Tienda de instagram <b>Venezuela</b></h1>
              <p class="text-center h5">La funcionalidad de <mark style="background-color: #8ed825;" >Instagram shopping</mark> te permitirá tener una tienda en instagram y mostrar tu catalogo de productos. <br>
              </p>
                <img class="d-sm-none" src="{{asset('imagen/funnels/tienda-instagram-01.jpg')}}" alt="tienda de instagram">
              <h2 class="text-center h5"><b>¡Ya puedes configurar la tuya para Venezuela!</b></h2>
              <p class="text-center">
               <div class="row">
                 @if (session()->has('usuario_name'))
                    <div class="col-sm-12 text-right p-1">
                      <a href="{{route('funnel_01_ok')}}" class="btn btn-primary btn-block" >{{ ucfirst(session()->get('usuario_name', '')) }}, Puedes Continuar...</a>
                    </div>
                
                 @else
                        <div class="col-sm-6 text-right p-1">
                          <!-- Button trigger modal -->
                          <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modelId">
                            Pasos para configurar
                         </button>
                       </div>
                       <div class="col-sm-6 p-1 ">
                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#modelId">
                           Ver Requisitos
                         </button>
                       </div> 
                  @endif
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
  
      
      

      <!-- Modal -->
      <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <form action="{{route('Lead.store')}}" method="post">
              @csrf
              @method('post')
              <input type="hidden" name="funnel_type" value="General">
              <div class="modal-header">
                  <h5 class="modal-title"><span>Para continuar leyendo, por favor...</span><br>
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
              
                  <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text"
                      class="form-control" name="nombre" id="nombre"  placeholder="Nombre" required>
                  </div>
                  <div class="form-group">
                    <label for="">Correo</label>
                    <input type="email"
                      class="form-control" name="correo" id="correo"  placeholder="Correo" required>
                  </div>

              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-block m-1" data-dismiss="modal">Cerrar</button>
              <button id="" type="submit" class="btn btn-primary btn-block m-1">Continuar</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      
      <script>
        $('#exampleModal').on('show.bs.modal', event => {
          var button = $(event.relatedTarget);
          var modal = $(this);
          // Use above variables to manipulate the DOM

          
        });
      </script>

     <script>
      $("#get_lead").on('click', function(){
         //vars
        var nombre = $("#nombre").val();
        var correo = $("#correo").val();

        return alert(nombre+correo);
            
         axios.post('/lead',{nombre:nombre, correo: correo})
              .then(function (response) {
                  // handle success
                  console.log(response);
              })
              .catch(function (error) {
                  // handle error
                  console.log(error);
              });   

      });
     </script>
      
@endsection