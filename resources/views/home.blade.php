@extends('common.main_plantilla')

@section('title')

{{-- precargar imagenes --}}
<link rel="preload" href="{{asset('imagen/oxas/fondo2.jpg')}}" as="image">
<link rel="preload" href="{{asset('imagen/oxas/eurochem.webp')}}" as="image">
<link rel="preload" href="{{asset('imagen/oxas/ecofood.webp')}}" as="image">
<link rel="preload" href="{{asset('imagen/oxas/servielectra.webp')}}" as="image">
<link rel="preload" href="{{asset('imagen/fondo.png')}}" as="image">

<!-- Primary Meta Tags -->
<title>Oxas - Desarrollamos negocios digitales</title>
<meta name="title" content="Oxas - Desarrollamos negocios digitales">
<meta name="description" content="Hacemos que las personas te consigan en internet. Incrementa tus ventas y tu presencia digital. Agencia digital que se hará cargo de tu crecimiento.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://oxas.tech/">
<meta property="og:title" content="Oxas - Desarrollamos negocios digitales">
<meta property="og:description" content="Hacemos que las personas te consigan en internet. Incrementa tus ventas y tu presencia digital. Agencia digital que se hará cargo de tu crecimiento.">
<meta property="og:image" content="{{asset('imagen/oxas/share.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://oxas.tech/">
<meta property="twitter:title" content="Oxas - Desarrollamos negocios digitales">
<meta property="twitter:description" content="Hacemos que las personas te consigan en internet. Incrementa tus ventas y tu presencia digital. Agencia digital que se hará cargo de tu crecimiento.">
<meta property="twitter:image" content="{{asset('imagen/oxas/share.jpg')}}">
{{-- url canonical --}}
<link rel="canonical" href="https://oxas.tech" />


@php
// importante para el color de las letras del header
$color_header='dark';
@endphp
@endsection

@section('content')

<div class="swiper-container"> <!-- Para activar carousel agregar clase 'swiper-container-carousel'  -->
  <div class="swiper-wrapper">
    <div class="swiper-slide bg-dark">
      <div class="image" style=" background-image:url('{{asset('imagen/oxas/fondo2.jpg')}}');" ></div>
      <div class="image band" ></div>
      <div class="caption" data-swiper-parallax-y="-100%">
        <div class="container">
          <div class="row align-items-end vh-75">
            <div class="col-md-5 text-white">
              <span class="eyebrow mb-2">Diseño web</span>
              <h2>Somos <br><span id="typed"></span></h2>
              <div id="typed-strings">
                  <p>Parte de tu Crecimiento</p>
                  <p>Diseñadores</p>
                  <p>Programadores</p>
                  <p>Tus aliados</p>
                  <p>todo lo que necesitas ...</p>
              </div>
              <a href="https://oxas.tech/nosotros" class="btn btn-with-ico btn-primary">Iniciar el crecimiento<i class="icon-arrow-right2 fs-20"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    ...
  </div>
</div>
<style>
  .band{
    background-image:url('{{asset('imagen/oxas/curva_blanca.svg')}}');
    background-position-y: bottom;
    bottom: -3px;
  }
</style>

<div class="container">
  <div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
	  <div class="col-sm-6">
	    <h3 style="margin-bottom:2rem;">Landing page</h3>
	    <p class="text_page">
        Es un sitio web de una sola pagina y cuyo objetivo principal es transformar visitantes en clientes, usualmente usado para recibir usuarios de otros canales de marketing como redes sociales. 
	    </p>
	    <a href="https://api.whatsapp.com/send?phone=584143446225&text=Hola,%20%20quiero%20mas%20informaci%C3%B3n%20de%20sus%20servicios.%20" type="button" class="btn btn-primary btn-rounded text-white">Mas Información</a>
	  </div>
    <div class="col-6 d-none d-sm-block" style="text-align:left;">
	    <!--div-- class="">
	      <img src="imagen/tablet_page.png" alt="" width="100%">
      </!--div-->
      <div class="cont_image">
        <img src="imagen/tablet_page.png" alt="" width="100%">
        <img class="picture_float8" src="imagen/cart.png" alt="" width="45%" data-aos="fade-up" data-aos-duration="1500">
        <img class="picture_float7" src="imagen/comentarios2.jpg" alt="" width="35%" data-aos="fade-up" data-aos-duration="1500">
      </div>
	  </div>
  </div>

	<div class="row mt-4">
	  <div class="col-6 d-none d-sm-block" style="text-align:left;">
	    <!--div-- class="cont_image">
	      <img src="imagen/fondo.png" alt="" width="100%">
      </!--div-->
      <div class="cont_image">
        <img src="imagen/fondo.png" alt="" width="100%">
        <img class="picture_float1" src="imagen/buttons.png" alt="" width="30%" id="picture_float1">
        <img class="picture_float2" src="imagen/card.png" alt="" width="30%" id="picture_float2">
        <img class="picture_float3" src="imagen/lista.png" alt="" width="15%" id="picture_float3">
        <img class="picture_float4" src="imagen/redes.png" alt="" width="20%" id="picture_float4">
        <img class="picture_float5" src="imagen/texto.png" alt="" width="25%" id="picture_float5">
        <img class="picture_float6" src="imagen/section_footer.png" alt="" width="30%" id="picture_float6">
      </div>
	  </div>
	  <div class="col-sm-6">
	    <h3 style="margin-bottom:2rem;">Páginas Dinámicas</h3>
	    {{-- <h6 style="margin-bottom:3rem;">100% Personalizadas</h6> --}}
	    <p class="text_page">Realizamos paginas animadas, y muy atractivas a los usarios. Ten en cuenta que el tiempo que tarda un usario en tu sitio web,
	      incrementa exponencialmente la posibilidad de que el usuario se convierta en cliente.
	    </p>
	    <a  href="https://api.whatsapp.com/send?phone=584143446225&text=Hola,%20%20quiero%20mas%20informaci%C3%B3n%20de%20sus%20servicios.%20" type="button" class="btn btn-primary btn-rounded" >¡Quiero mi página!</a>
	  </div>
  </div>
  
  <script>
    anime({
      targets: '#picture_float1',
      translateX: 18,
      duration: 2500,
      direction: 'alternate',
      loop: true,
      easing: 'easeInOutSine'
    });
    anime({
      targets: '#picture_float2',
      translateY: 35,
      duration: 4000,
      direction: 'alternate',
       delay: 1000,
      loop: true,
      easing: 'easeInOutSine'
    });
    anime({
      targets: '#picture_float3',
      translateY: 18,
      duration: 10000,
      direction: 'alternate',
      loop: true,
      easing: 'linear'
    });
    anime({
      targets: '#picture_float4',
      translateX: 58,
      duration: 6500,
      direction: 'alternate',
      loop: true,
      easing: 'easeInOutSine'
    });
    anime({
      targets: '#picture_float5',
      translateY: 8,
      duration: 3500,
      direction: 'alternate',
      loop: true,
      easing: 'easeInOutSine'
    });
    anime({
      targets: '#picture_float6',
      translateX: 80,
      duration: 20000,
      direction: 'alternate',
      loop: true,
      easing: 'easeInOutSine'
    });
  </script>

	<div class="row" style="margin-top:5rem; margin-bottom: 5rem;">
	  <div class="col-sm-6">
	    <h3 style="margin-bottom:2rem;">Tiendas Virtuales</h3>
	    <p class="text_page ">
        Es un sitio web donde podrás vender productos/servicios de forma digital. Podrás gestionar tu inventario, ventas, compradores, envios y demás procesos que
	      facilitaran la gestion de tu empresa.
	    </p>
	    <a  href="https://api.whatsapp.com/send?phone=584143446225&text=Hola,%20quiero%20una%20Tienda%20Online." type="button" class="btn btn-primary btn-rounded">Crear mi tienda!</a>
	  </div>
	  <div class="col-6 d-none d-sm-block" style="text-align:left;">
      <div class="cont_image">
        <img src="imagen/tablet_page.png" alt="" width="100%">
        <img class="picture_float8" src="imagen/cart.png" alt="" width="45%" data-aos="fade-up" data-aos-duration="1500">
        <img class="picture_float7" src="imagen/comentarios2.jpg" alt="" width="35%" data-aos="fade-up" data-aos-duration="1500">
      </div>
	  </div>
	</div>

	<div class="row mb-5">
	    <div class="col-6 d-none d-sm-block" style="text-align:left;">
	      <div class="cont_image">
	        <img src="imagen/laptop_app.png" alt="" width="80%">
	      </div>
	    </div>
	    <div class="col-sm-6">
	      <h3 style="margin-bottom:2rem;">Aplicaciones Web</h3>
	      {{-- <h6 style="margin-bottom:3rem;">Visibles desde cualquier dispositivo</h6> --}}
	      <p class="text_page">
	        Nuestro equipo puede crear tu aplicacion web como la desees, contamos con un equipo de profesionales en diseño UI/UX, desarrolladores de Frond-end, Back-end y Devops.  ¡Hacemos proyecto a la medida del cliente!. <br>
	      </p>
	      <a  href="https://api.whatsapp.com/send?phone=584143446225&text=Hola,%20%20quiero%20mas%20informaci%C3%B3n%20de%20sus%20servicios.%20" type="button" class="btn btn-primary btn-rounded">Empezar una conversación</a>
	    </div>
	  </div>
</div>


    <!-- cta -->
    <section class="text-white">
      <div class="image image-overlay  image-blur image-scrolling" style="background-image:url(imagen/oxas/oficina2.jpg)"
        data--100-bottom-top="transform: translateY(0%);" 
        data-top-bottom="transform: translateY(25%);">
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center">
            <span class="eyebrow">Portafolio</span>
            <h2 class="display-4"><b>Conoce</b> nuestro trabajo.</h2>
            {{-- <a href="" class="btn btn-rounded btn-white px-4">Ver trabajos</a> --}}
          </div>
        </div>
      </div>
    </section>
    <!-- / cta -->


<section class="bg-white  section-decorated-bottom">
  <div class="decorated-bottom text-primary">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
      <path d="">
        <animate 
          attributeName="d" 
          begin="0s" 
          dur="5s"
          repeatCount="indefinite"
          values="
          M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
          M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
          M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
          M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
      </path>
    </svg>
  </div>
  <div class="container ">
    <div class="row gutter-1 gutter-md-3 demo-preview">
      <div class="col-12 col-lg-4">
        <article class="card card-minimal">
          <a href="https://servielectra.com.ve/" target="_black" class="card-img-container">
            <img class="card-img" src="{{asset('imagen/oxas/servielectra.webp')}}" alt="Profile">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a target="_blank" href="https://servielectra.com.ve/">Servielectra</a></h5>
          </div>
        </article>
      </div>
      <div class="col-12 col-lg-4">
        <article class="card card-minimal">
          <a href="https://ecofoodsservices.com/"  class="card-img-container" target="_blank">
            <img  class="card-img" src="{{asset('imagen/oxas/ecofood.webp')}}" alt="Portal">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a target="_blank" href="https://ecofoodsservices.com/">Ecofood Services</a></h5>
          </div>
        </article>
      </div>
      <div class="col-12 col-lg-4">
        <article class="card card-minimal">
          <a href="http://eurochemus.com/"  class="card-img-container" target="_blank">
            <img class="card-img" src="{{asset('imagen/oxas/eurochem.webp')}}" alt="Connections">
          </a>
          <div class="card-body">
            <h5 class="card-title text-center"><a target="_blank" href="http://eurochemus.com/" >Eurochem Us</a></h5>
          </div>
        </article>
      </div>
     
    </div>
  </div>
</section>





    <!-- features -->
    <section class="bg-primary section-decorated-bottom">
      <div class="decorated-bottom text-light">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40"  preserveAspectRatio="none">  
          <path d="">
            <animate 
              attributeName="d" 
              begin="0s" 
              dur="5s"
              repeatCount="indefinite"
              values="
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
              M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
              M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
              M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;"></animate>
          </path>
        </svg>
      </div>
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-7">
            <ul class="masonry row gutter-2" data-columns="2">
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-laptop fs-50 mb-2"></i>
                  <h4>ONLINE - O</h4>
                  <p>Junto a ti vamos a crear la cara online de tu negocios,vamos a hacer crecer el entorno digital de tu empresa. </p>
                </div>
              </li>
              <li class="col-md-6 mt-5" data-aos="fade-up">
                <div class="boxed p-4">
                  <i class="icon-basic_globe fs-50 mb-2 text-primary"></i>
                  <h4>XPERIENCE - X</h4>
                  <p>Nos caracteriza el cuidar la experiencia de nuestros clientes en cada etapa de ejecucion de sus proyectos. ⁣</p>
                </div>
              </li>
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-basic_accelerator fs-50 mb-2"></i>
                  <h4>ADVANCE - A</h4>
                  <p>Buscamos avanzar con cada reto que se presenta en cada uno de los proyecto.⁣</p>
                </div>
              </li>
              <li class="col-md-6 text-white" data-aos="fade-up">
                <div class="bordered p-4">
                  <i class="icon-headphones2 fs-50 mb-2"></i>
                  <h4>SUPPORT - S</h4>
                  <p>Brindamos un soporte constante a nuestros clientes, ofrecemos la mejor comunicación.⁣</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-4 text-white text-center">
            <svg class="logo-sm" style="max-height: 7rem;" width="234" height="258" viewBox="0 0 234 258" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M103.705 216.835C97.6706 216.835 91.8978 215.418 86.7117 211.623C76.013 203.791 74.2646 189.903 73.1089 180.713C73.0797 180.48 73.0504 180.246 73.0204 180.012C55.143 185.517 37.529 191.974 20.2238 199.374C16.6668 200.903 12.5331 199.246 11.0079 195.679C9.48196 192.112 11.1373 187.986 14.7027 186.463C33.196 178.553 52.0395 171.692 71.168 165.892C66.7248 133.272 61.1322 100.543 54.5086 68.3968C54.2677 67.2327 54.0282 66.0324 53.7865 64.8052C51.9972 55.8111 49.9685 45.6152 45.2859 39.5244C40.3069 33.0487 32.5131 33.2781 26.8742 35.6487C20.7088 38.2463 15.6597 44.3748 15.1316 49.9059C14.4664 56.8843 15.3856 65.7044 17.6553 74.1019L40.6248 159.116C41.6357 162.859 39.4222 166.715 35.6782 167.726C31.9264 168.732 28.0807 166.523 27.0675 162.779L4.09797 77.7659C1.3671 67.6585 0.320786 57.2901 1.15075 48.5732C2.16549 37.9407 10.5021 27.3044 21.424 22.7065C34.5741 17.1731 48.3062 20.416 56.4172 30.9622C63.1031 39.6568 65.5738 52.0824 67.5586 62.0689C67.7958 63.26 68.029 64.4295 68.2608 65.562C74.8112 97.3501 80.3623 129.694 84.8031 161.953C119.658 152.372 155.419 146.277 191.728 143.756C211.841 142.355 219.332 149.962 222.074 156.582C225.309 164.388 222.508 174.302 215.262 180.691C209.573 185.706 202.381 188.002 196.603 189.848L124.939 212.717C117.851 214.981 110.608 216.835 103.705 216.835ZM86.6678 176.009C86.7941 176.994 86.9188 177.976 87.042 178.961C88.1745 187.958 89.6343 196.36 95.0059 200.291C101.056 204.719 110.917 202.45 120.668 199.342L192.331 176.472C197.327 174.874 202.495 173.225 205.975 170.157C208.654 167.796 210.028 164.195 209.101 161.959C207.163 157.281 196.989 157.472 192.701 157.765C156.679 160.266 121.216 166.377 86.6678 176.009Z" fill="white"/>
              <path d="M208.139 133.341C207.678 133.341 207.214 133.296 206.745 133.202C202.944 132.436 200.482 128.735 201.246 124.932C203.268 114.892 205.701 104.701 208.054 94.8486C210.378 85.1154 212.782 75.0511 214.751 65.2548C215.172 63.1668 215.664 60.9387 216.178 58.6189C218.458 48.3037 221.294 35.4654 219.009 27.1288C216.755 18.9177 214.837 17.4564 203.217 15.1013C199.158 14.269 194.061 16.6965 191.107 20.854C188.17 24.9854 186.069 33.0887 184.536 39.0078C184.239 40.1457 183.958 41.239 183.682 42.2637C180.034 55.8095 177.817 70.1037 175.671 83.9297C174.856 89.1805 174.049 94.3905 173.171 99.5251C172.82 101.578 171.577 103.369 169.773 104.416C167.973 105.462 165.801 105.652 163.844 104.938C143.313 97.4486 118.404 101.155 100.385 114.38C97.2641 116.673 92.8663 115.998 90.5689 112.871C88.2746 109.745 88.9506 105.35 92.0779 103.056C111.807 88.5831 137.396 83.5933 160.616 89.3022C161.014 86.8046 161.403 84.2947 161.793 81.7771C163.995 67.5784 166.274 52.8985 170.12 38.6113C170.386 37.6265 170.659 36.5764 170.94 35.4846C172.849 28.1197 175.223 18.957 179.661 12.7168C185.875 3.97528 196.46 -0.603386 206.006 1.33602C218.71 3.91214 228.047 7.00411 232.55 23.414C235.757 35.1005 232.503 49.8219 229.89 61.6501C229.395 63.8797 228.923 66.0193 228.52 68.0257C226.498 78.0661 224.067 88.2559 221.712 98.1084C219.387 107.842 216.984 117.907 215.015 127.702C214.344 131.037 211.413 133.341 208.139 133.341Z" fill="white"/>
              <path d="M116.299 257.137C110.144 257.137 103.782 256.618 97.0692 255.483C69.9829 250.89 47.6293 231.582 42.7081 208.527C41.8989 204.735 44.3164 201.003 48.1098 200.193C51.9039 199.382 55.6326 201.801 56.4417 205.596C60.192 223.162 77.8637 237.981 99.4166 241.635C121.629 245.4 139.232 241.583 160.438 234.205C171.022 230.524 184.811 224.384 191.765 218.966C197.925 214.168 202.372 208.628 204.289 203.374C205.617 199.73 209.653 197.854 213.291 199.184C216.935 200.513 218.81 204.544 217.482 208.186C213.882 218.052 206.204 225.518 200.398 230.043C189.073 238.866 168.969 246.107 165.052 247.468C148.453 253.242 133.154 257.137 116.299 257.137Z" fill="white"/>
              </svg>
            <h2 class="pt-2 m-0"><b>OXAS</b></h2>
            <span class="h5">Desarrollamos negocios digitales</span> 
            <a class="btn btn-outline-white btn-rounded m-2 px-5"  href="/nosotros">Quienes somos</a>
          </div>
        </div>
      </div>
    </section>
    <!-- / features -->

    
     <!-- about -->
     <section class="bg-light pb-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div class="row separator-bottom pb-5 mb-5">
              <div class="col-md-4 text-center p-2">
                <h2>Contruye tu <br> <b>PROYECTO</b> <br>Hoy</h2>
              </div>
              <div class="col-md-8">
                <p class="lead d-sm-block d-none">Nos enfocaremos en tu <mark style="background-color: #8ed825;" >CRECIMIENTO DIGITAL</mark> , incrementaremos ventas, tendras presencia efectiva en internet y te guiaremos en todo el proceso.</p>
                <p class="lead d-sm-none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;El <mark style="background-color: #8ed825;" >CRECIMIENTO DIGITAL</mark> es lo mas importante , incrementaremos ventas, tendras presencia efectiva en internet y te guiaremos en todo el proceso.</p>
                <p class="text-center">
                  <a class="btn btn-primary btn-rounded px-5"  href="{{route('funnel_05_servicio')}}">¡Solicitar una Reunión!  </a>
                </p>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </section>
    <!-- / about -->




<section>
  <div class="image band2 bg-light" style="background-image:url({{asset('imagen/oxas/curva_negra.svg')}})"></div>
</section>

<style>
  .band2{
    background-position-y: bottom;
    bottom: -10px;
  }

</style>

<div class="component-example bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col p-5">
        <h1>Pasos para <b class="text-primary">COMENZAR ...</b></h1>
      </div>
      <div class="col">
        <div class="owl-carousel visible owl-loaded owl-drag" data-items="[3,2]" data-margin="20">
          
        <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1934px;"><div class="owl-item active" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Primer Paso</h4>
            <p>Escribenos por nuestros medios de <a href="{{route('contactanos')}}"><b class="text-primary">CONTACTO.</b></a></p>
          </div></div><div class="owl-item active" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Segundo Paso</h4>
            <p>Coordinamos una reunión presencial o videollamada.</p>
          </div></div><div class="owl-item active" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Tercer Paso</h4>
            <p>Escucharemos con atención tus necesidades y requerimientos.</p>
          </div></div><div class="owl-item" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Cuarto Paso</h4>
            <p>Te enviamos una propuesta junto con la cotización del proyecto.</p>
          </div></div><div class="owl-item" style="width: 366.667px; margin-right: 20px;"><div class="step">
            <h4 class="step-title">Quinto Paso</h4>
            <p>Preparate porque empieza la <a href="{{route('funnel_05_servicio')}}"><b class="text-primary">AVENTURA</b></a></p>
          </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots disabled"></div></div>
      </div>
    </div>
  </div>
</div>

@endsection