@extends('common.main_plantilla')
@section('title')
<!-- Primary Meta Tags -->
<title>Servicios - Agencia digital en LATAM </title>
<meta name="title" content="Servicios - Agencia digital en LATAM ">
<meta name="description" content="Somos una agencia digital especializada en desarrollo web. Hacemos que las personas te consigan en internet. Incrementa tus ventas y tu presencia digital.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://oxas.tech/servicios">
<meta property="og:title" content="Servicios - Agencia digital en LATAM ">
<meta property="og:description" content="Somos una agencia digital especializada en desarrollo web. Hacemos que las personas te consigan en internet. Incrementa tus ventas y tu presencia digital.">
<meta property="og:image" content="{{asset('imagen/oxas/team.jpg')}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://oxas.tech/servicios">
<meta property="twitter:title" content="Servicios - Agencia digital en LATAM ">
<meta property="twitter:description" content="Somos una agencia digital especializada en desarrollo web. Hacemos que las personas te consigan en internet. Incrementa tus ventas y tu presencia digital.">
<meta property="twitter:image" content="{{asset('imagen/oxas/team.jpg')}}">
{{-- url canonical --}}
<link rel="canonical" href="https://oxas.tech/servicios" />
@php
      $color_header='dark';
      @endphp
@endsection

@section('content')
<div class="swiper-container swiper-container-carousel">
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
              <a href="/nosotros" class="btn btn-with-ico btn-primary">Sobre Nosotros<i class="icon-arrow-right2 fs-20"></i></a>
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




	@php
		$imagen ="https://www.conmasfuturo.com/wp-content/uploads/2014/03/objetivos-paginas-web-antoniosanjuan.jpg";	
	@endphp
	 <!-- presentation -->
   <section class="section-lg">
     <div class="container">
       <div class="row text-center text-lg-left">
         <div class="col-12 col-lg-8">
           <div class="row">
             <div class="col-lg-7">
               <h2 class="text-uppercase font-weight-bold h3">Crecimiento digital</h2>
               <p class="lead">Somos una agencia digital especializada en desarrollo web. Construimos plataformas que permiten a nuestros clientes CRECER.</p>
             </div>
           </div>
           <div class="row gutter-3">
             <div class="col-sm-6 col-lg-4">
               <i class="svg-icon fs-50 text-primary">
                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                 <circle fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" cx="32" cy="32" r="26"/>
                 <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="32,20 32,32 40,36 "/>
                 <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="21.995" y1="56.005" x2="15" y2="63"/>
                 <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="49" y1="63" x2="42.005" y2="56.005"/>
                 <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="1,8 5,4 15,6 3,18 "/>
                 <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="59,4 63,8 61,18 49,6 "/>
                 </svg>
               </i>
               <h4 class="fs-20 font-weight-bold text-primary my-1">Landing Page</h4>
               <p>Es un sitio web que funciona muy bien para promocionar productos y/o servicio para conseguir interesados.</p>
             </div>
             <div class="col-sm-6 col-lg-4">
               <i class="svg-icon fs-50 text-primary">
                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                 <g>
                   <rect x="1" y="18" fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="62" height="36"/>
                 </g>
                 <line fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" x1="1" y1="30" x2="63" y2="30"/>
                 <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="27,30 27,36 37,36 37,30 "/>
                 <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M23,18c0,0,0-8,9-8s9,8,9,8"/>
                 </svg>

               </i>
               <h4 class="fs-20 font-weight-bold text-primary my-1">Web Corporativa</h4>
               <p>Perfecta para conseguir credibilidad y confianza ante tus clientes y provedores.</p>
             </div>
             <div class="col-sm-6 col-lg-4">
               <i class="svg-icon fs-50 text-primary">
                 <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                 <polygon fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="56,22 56,54 1,54 1,15 19.629,15 26.726,22 
                   "/>
                 <polyline fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" points="8,13 8,7 26.629,7 33.726,14 63,14 63,46 
                   58,46 "/>
                 </svg>
               </i>
               <h4 class="fs-20 font-weight-bold text-primary my-1">Tienda Virtual</h4>
               <p>Podrás incrementar tu capacidad de venta y sistematizar la gestion de pedidos, inventario, envios y pagos.</p>
             </div>
           </div>
         </div>
         <div class="col-12 col-lg-3 presentation presentation-responsive">
           <img class="left-50 vertical-align" src="{{asset('demos/trainers.jpg')}}" alt="Image">
         </div>
       </div>
     </div>
   </section>
    <!-- / presentation -->



    <!-- services -->
    <section class="pt-0 pattern pattern-dark">
      <div class="container">
        <div class="row boxed separated">
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-5.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Servicio de Primera</h4>
            <p>Te brindaremos un servicio profesional y de calidad, cuidando cada uno de los detalles.</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-3.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Asesoria de Crecimiento</h4>
            <p>Recibiras Tips, consejos y recomendación de un equipo entusiasta de los negocios, marketing y tecnologia.</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-6.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Empatía al 100%</h4>
            <p>Buscaremos la manera de entender cada arista de tus necesidades. ¡Escucharemos con atención cada palabra!</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-1.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Disponibilidad 24/7</h4>
            <p>Nuestro equipo estará atento a cualquier requerimiento en el momento que lo necesites.</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-4.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Cuidamos tu Experiencia</h4>
            <p>Cuidamos cada detalle, por eso contamos con persona amables, atentas y respetuosas. ¡Sentiras que somos parte de equipo!</p>
          </div>
          <div class="col-md-6 col-lg-4 p-5 text-center">
            <i class="svg-icon w-50 equal">
              <span>
                <img src="{{asset('imagen/illustrations/draw-2.svg')}}" alt="Image">
              </span>
            </i>
            <h4 class="fs-24 font-weight-normal">Crece en Comunidad</h4>
            <p>Buscamos mantenerte informado de las mejores estrategias de crecimiento digital por nuestro blog y Redes sociales.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- / services -->


    <section  class="bg-white section-decorated-bottom">
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
      <div class="container px-5">
        <div class="row justify-content-between align-items-center text-center text-md-left">
          <div class="col-md-2">
            <i class="svg-icon fs-60 text-primary">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11,48C5.477,48,1,43.523,1,38s4.477-10,10-10h2v20
                  H11z" style="stroke-dasharray: 56, 58; stroke-dashoffset: 0;"></path>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M53,28c5.523,0,10,4.477,10,10s-4.477,10-10,10h-2
                  V28H53z" style="stroke-dasharray: 56, 58; stroke-dashoffset: 0;"></path>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M13,31v-9c0,0,0-16,19-16s19,16,19,16v6" style="stroke-dasharray: 71, 73; stroke-dashoffset: 0;"></path>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M51,48L51,53L36,59L28,59L28,55L36,55L36,58" style="stroke-dasharray: 45, 47; stroke-dashoffset: 0;"></path>
                </svg>
            </i>
          </div>
          <div class="col-md-6">
            <h3 class="mb-1">Estamos 24/7 por Whatsapp.</h3>
            <p>
              No des muchas vueltas, te brindamos una atencion rápida, profesional y precisa por whatsapp. Escribenos y te atenderemos lo más pronto posible. 
            </p>
          </div>
          <div class="col-md-4 text-lg-right">
            <a  href="https://api.whatsapp.com/send?phone=584143446225&text=Hola,%20Quiero%20conversar%20de%20mi%20proyecto.%20" class="btn btn-primary btn-rounded px-5">
              <i class="svg-icon fs-30 text-primary">
                <svg width="147" height="148" viewBox="0 0 147 148" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M70.4892 0.917674C47.0452 2.0059 25.7682 14.0533 12.7449 33.6135C6.4303 43.0978 2.58959 53.5037 1.0635 65.2631C0.58345 68.9626 0.467417 76.635 0.833342 80.4883C1.69937 89.6081 4.07478 97.8456 8.28269 106.323L10.006 109.794L5.30451 126.568C1.88719 138.761 0.603027 143.569 0.603027 144.173C0.603027 145.847 1.92762 147.179 3.59155 147.179C4.11219 147.179 8.90392 146.064 16.9476 144.07C23.847 142.359 31.7151 140.415 34.4324 139.749L39.373 138.538L41.6745 139.659C55.0263 146.159 68.7981 148.458 83.2904 146.608C102.207 144.192 119.608 134.208 131.536 118.927C138.825 109.589 143.848 98.2656 145.834 86.6958C146.669 81.8362 146.796 80.1647 146.796 74.042C146.796 67.9193 146.669 66.2477 145.834 61.3882C143.847 49.8112 138.812 38.4646 131.534 29.1568C122.623 17.7616 110.832 9.34988 97.2895 4.72607C91.2042 2.6483 83.983 1.25336 77.9583 0.991846C76.7765 0.940595 75.2366 0.873903 74.5362 0.843821C73.8359 0.813579 72.0147 0.846845 70.4892 0.917674ZM82.1762 7.72765C92.9414 9.17639 101.953 12.555 110.906 18.4991C125.814 28.3969 136.224 44.2082 139.458 61.8657C140.3 66.468 140.429 68.0837 140.429 74.042C140.429 80.0003 140.3 81.616 139.458 86.2183C135.277 109.044 119.329 128.188 97.558 136.513C92.6226 138.4 87.3858 139.684 81.5396 140.441C78.3214 140.858 69.1349 140.859 65.9412 140.443C57.5701 139.353 51.0216 137.361 43.5341 133.628C40.9717 132.35 40.2548 132.058 39.68 132.058C39.2918 132.058 32.6147 133.637 24.8421 135.566C9.21223 139.445 8.61598 139.588 8.42944 139.512C8.35782 139.483 10.1483 132.87 12.4081 124.816C14.8905 115.97 16.5177 109.899 16.5185 109.48C16.5198 108.76 16.4203 108.527 14.9087 105.716C10.6018 97.7081 8.13196 89.577 7.19733 80.3291C6.83761 76.7706 6.95667 69.1205 7.42637 65.6061C8.85171 54.9432 12.3209 45.6889 18.1966 36.8764C29.0021 20.6702 46.6245 9.87577 65.8616 7.67974C69.1637 7.30283 69.1174 7.30442 74.6158 7.35695C78.6932 7.39594 80.2944 7.47441 82.1762 7.72765ZM46.2044 35.9214C43.2976 36.2689 41.1655 37.5277 38.7185 40.3418C35.7016 43.8112 33.8405 47.4346 32.886 51.6979C32.5589 53.1589 32.5167 53.7556 32.5213 56.8519C32.5261 60.1171 32.5565 60.4809 32.9705 62.2394C33.8951 66.1664 35.6714 70.3943 37.8625 73.8828C39.1116 75.8718 43.1714 81.4509 44.9851 83.6716C51.7802 91.9911 59.2242 98.6671 66.7717 103.21C71.1375 105.838 75.8043 107.894 82.415 110.101C87.973 111.956 88.6499 112.077 93.4771 112.073C96.9166 112.071 97.6629 112.025 98.9792 111.737C101.025 111.29 103.502 110.28 105.563 109.054C111.36 105.606 113.311 103.076 114.595 97.341C114.9 95.9768 114.965 95.2308 114.965 93.0625C114.965 90.4693 114.959 90.4267 114.517 89.6738C113.55 88.0291 112.851 87.4638 110.588 86.4955C109.843 86.1772 106.861 84.773 103.96 83.3752C101.06 81.9774 97.8509 80.4996 96.8298 80.091C92.8632 78.5041 90.6371 79.0443 88.216 82.181C86.5295 84.3662 82.8436 88.765 82.6993 88.765C82.4277 88.765 77.9664 86.695 76.4462 85.8635C74.3715 84.7288 72.0425 83.2089 70.1591 81.7602C68.1208 80.1922 63.8712 75.8929 62.14 73.6471C60.7975 71.9056 58.3807 68.3759 58.3807 68.1568C58.3807 68.0998 58.877 67.4902 59.4836 66.8018C61.4976 64.5161 62.4577 63.2011 63.2777 61.6047C64.7323 58.7731 64.7366 57.307 63.3001 53.9525C62.8584 52.921 61.4555 49.57 60.1828 46.506C58.91 43.4421 57.6086 40.436 57.2909 39.8261C56.1397 37.6162 54.2207 36.165 52.2391 36.0055C50.3667 35.8547 47.1386 35.8097 46.2044 35.9214ZM51.5996 42.6462C51.726 42.8433 52.9151 45.6187 54.2424 48.814C55.5695 52.0093 56.9775 55.3494 57.371 56.2364L58.0866 57.8493L57.6573 58.7035C57.1762 59.6609 56.0733 61.0629 54.1155 63.2057C52.3666 65.12 51.8364 66.1826 51.8393 67.7683C51.8422 69.3004 52.1261 70.1916 53.1472 71.8724C58.4729 80.6401 65.9587 87.6974 74.584 92.082C77.1865 93.405 80.7651 94.9292 81.7794 95.1468C83.508 95.5175 85.2791 95.0401 86.7208 93.815C87.4332 93.2094 90.8289 89.2471 92.2824 87.3248C93.4593 85.7685 93.5236 85.7112 93.9729 85.8164C94.4719 85.9332 100.241 88.6129 104.76 90.8271L108.721 92.7678L108.633 94.0692C108.524 95.6784 107.842 98.3179 107.293 99.2569C106.371 100.834 103.755 102.942 101.228 104.144C98.2219 105.573 96.6024 105.874 92.5341 105.756C90.1602 105.687 89.5845 105.615 87.9859 105.189C84.2079 104.183 77.3374 101.59 73.9473 99.8908C65.5027 95.6575 56.875 88.3532 49.7209 79.3801C45.8864 74.5707 43.4217 70.8865 41.6774 67.357C39.6035 63.1602 38.8032 60.1523 38.8032 56.554C38.8032 51.2991 40.1782 47.9659 43.9567 44.0612C45.578 42.3858 45.8274 42.2959 48.8668 42.2916C51.2905 42.2883 51.3774 42.2996 51.5996 42.6462Z" fill="white"/>
                </svg>
              </i><br>
              Hablar por Whatsapp
            </a>
        </div>
      </div>
    
    </section>
    
@endsection