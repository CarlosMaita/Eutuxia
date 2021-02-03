@extends('common.main_plantilla')

@section('title')
<!-- Primary Meta Tags -->
<title>Blog — {{$articulo->title}}</title>
<meta name="title" content="Blog — {{$articulo->title}}">
<meta name="description" content="{{$articulo->description}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{Request::path()}}">
<meta property="og:title" content="Blog — {{$articulo->title}}">
<meta property="og:description" content="{{$articulo->description}}">
<meta property="og:image" content="{{asset('storage/'.$articulo->image)}}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{Request::path()}}">
<meta property="twitter:title" content="Blog — {{$articulo->title}}">
<meta property="twitter:description" content="{{$articulo->description}}">
<meta property="twitter:image" content="{{asset('storage/'.$articulo->image)}}">
{{-- url canonical --}}
<link rel="canonical" href="https://oxas.tech/blog/{{$articulo->slug}}" />
@endsection


@section('content')
<!-- cover -->
<section class="p-0">
  <div class="swiper-container text-white"
    data-top-top="transform: translateY(0px);" 
    data-top-bottom="transform: translateY(250px);">
    <div class="swiper-wrapper">
      <div class="swiper-slide vh-60">
        <div class="image image-overlay image-zoom" style="background-image:url({{asset('storage/'.$articulo->image)}})"></div>
        <div class="caption">
          <div class="container">
            <div class="row align-items-center vh-60">
              <div class="col-md-8" data-swiper-parallax-y="-250%">
                <span class="eyebrow mb-2">{{$articulo->category->title}}</span>
                <h1 class="display-3">{{$articulo->title}}</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-footer mb-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col text-center">
              <div class="mouse"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- / cover -->



<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8 p-2">
        {!! $articulo->content !!}
      </div>
    </div>
    <!-- <div class="row justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="owl-carousel owl-carousel-single" data-dots="true" data-nav="true" data-autoplay="true">
          <figure class="photo">
            <img src="{{asset('imagen/coworking-1.jpg')}}" alt="Image">
          </figure>
          <figure class="photo">
            <img src="{{asset('imagen/coworking-2.jpg')}}" alt="Image">
          </figure>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae vero molestias odit voluptatem eum sit, laboriosam tempora officiis, ullam eaque modi beatae voluptate incidunt consequatur assumenda perferendis unde natus hic!</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-10 col-lg-8">
        <div class="tag-cloud">
          <a href="">Design</a>
          <a href="">Development</a>
          <a href="">Travel</a>
          <a href="">Web Design</a>
          <a href="">Marketing</a>
          <a href="">Research</a>
          <a href="">Managment</a>
        </div>
      </div>
    </div>
  </div> -->
  
</main>

<section>
  <div class="container">
      <!-- Social -->
      <div class="row align-items-center py-3 my-5 border-top border-bottom">
      <div class="col">

      <p class="mb-0 text-xs text-uppercase">
      Compartir este post:
      </p>

      </div>
      <div class="col-auto">
      <a href="#!" id="whastapp" class="text-lg text-nounderline mx-2">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.0037 0H14.9963C6.72563 0 0 6.7275 0 15C0 18.2812 1.0575 21.3225 2.85563 23.7919L0.98625 29.3644L6.75188 27.5213C9.12375 29.0925 11.9531 30 15.0037 30C23.2744 30 30 23.2706 30 15C30 6.72938 23.2744 0 15.0037 0ZM23.7319 21.1819C23.37 22.2037 21.9337 23.0512 20.7881 23.2987C20.0044 23.4656 18.9806 23.5988 15.5344 22.17C11.1262 20.3438 8.2875 15.8644 8.06625 15.5737C7.85438 15.2831 6.285 13.2019 6.285 11.0494C6.285 8.89688 7.37813 7.84875 7.81875 7.39875C8.18063 7.02938 8.77875 6.86062 9.3525 6.86062C9.53812 6.86062 9.705 6.87 9.855 6.8775C10.2956 6.89625 10.5169 6.9225 10.8075 7.61813C11.1694 8.49 12.0506 10.6425 12.1556 10.8638C12.2625 11.085 12.3694 11.385 12.2194 11.6756C12.0788 11.9756 11.955 12.1087 11.7337 12.3637C11.5125 12.6187 11.3025 12.8138 11.0812 13.0875C10.8787 13.3256 10.65 13.5806 10.905 14.0213C11.16 14.4525 12.0412 15.8906 13.3387 17.0456C15.0131 18.5362 16.3706 19.0125 16.8562 19.215C17.2181 19.365 17.6494 19.3294 17.9137 19.0481C18.2494 18.6863 18.6637 18.0863 19.0856 17.4956C19.3856 17.0719 19.7644 17.0194 20.1619 17.1694C20.5669 17.31 22.71 18.3694 23.1506 18.5887C23.5913 18.81 23.8819 18.915 23.9887 19.1006C24.0937 19.2863 24.0937 20.1581 23.7319 21.1819Z" fill="#8ED825"/>
          </svg>
          
      </a>
      <a href="#!" id="twitter" class="text-lg text-nounderline mx-2">
        <svg width="37" height="30" viewBox="0 0 37 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M36.9231 3.55154C35.55 4.15385 34.0869 4.55308 32.5615 4.74692C34.1308 3.81 35.3285 2.33769 35.8915 0.563077C34.4285 1.43538 32.8131 2.05154 31.0915 2.39538C29.7023 0.916154 27.7223 0 25.5623 0C21.3715 0 17.9977 3.40154 17.9977 7.57154C17.9977 8.17154 18.0485 8.74846 18.1731 9.29769C11.88 8.99077 6.31154 5.97462 2.57077 1.38C1.91769 2.51308 1.53462 3.81 1.53462 5.20615C1.53462 7.82769 2.88462 10.1515 4.89692 11.4969C3.68077 11.4738 2.48769 11.1208 1.47692 10.5646C1.47692 10.5877 1.47692 10.6177 1.47692 10.6477C1.47692 14.3262 4.10077 17.3815 7.54154 18.0854C6.92538 18.2538 6.25385 18.3346 5.55692 18.3346C5.07231 18.3346 4.58308 18.3069 4.12385 18.2054C5.10462 21.2031 7.88769 23.4069 11.1969 23.4785C8.62154 25.4931 5.35154 26.7069 1.81154 26.7069C1.19077 26.7069 0.595385 26.6792 0 26.6031C3.35308 28.7654 7.32692 30 11.6123 30C25.5415 30 33.1569 18.4615 33.1569 8.46C33.1569 8.12538 33.1454 7.80231 33.1292 7.48154C34.6315 6.41538 35.8938 5.08385 36.9231 3.55154Z" fill="#8ED825"/>
          </svg>
          
      </a>
      <a href="#!" id="facebook" class="text-lg text-nounderline mx-2">
        <svg width="16" height="30" viewBox="0 0 16 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.2884 4.98125H15.0271V0.21125C14.5546 0.14625 12.9296 0 11.0371 0C7.08838 0 4.38338 2.48375 4.38338 7.04875V11.25H0.0258789V16.5825H4.38338V30H9.72588V16.5838H13.9071L14.5709 11.2513H9.72463V7.5775C9.72588 6.03625 10.1409 4.98125 12.2884 4.98125V4.98125Z" fill="#8ED825"/>
          </svg>
      </a>
      </div>
      </div>
  </div>
</section>


<section class="bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <span class="eyebrow mb-1 text-primary">Quieres conocer de nuestros productos & servicios</span>
        <h2>¡Dejanos tus datos,<br>Te escribiremos!</h2>
      </div>
    </div>
    <div class="row">
      <div class="col" id="contacted" >
        @if(session('message'))
        <div class="alert alert-success" role="alert">
          {{session('message')}}
        </div>
        @else
          <div class="alert alert-danger" id="error_container" style="display: none;"></div>
          <form action="{{route('contacto.send')}}" id="form" method="POST">
            @csrf
            <div class="form-row mb-1">
              <div class="col">
                <input type="text" class="form-control form-control-minimal" id="name" name="name"  placeholder="Nombre">
              </div>
              <div class="col">
                <input type="text" class="form-control form-control-minimal" id="email" name="email" placeholder="Correo">
              </div>
              <div class="col">
                <input type="text" class="form-control form-control-minimal" id="phone" name="phone" placeholder="Telefono">
              </div>
            </div>
            <div class="form-row mb-1">
              <div class="col">
                <textarea class="form-control form-control-minimal" name="message" id="message" id="exampleFormControlTextarea1" rows="3" placeholder="Cuentanos de tu proyecto."></textarea>
              </div>
            </div>
            <div class="form-row mt-3">
              <div class="col">
                <button class="btn btn-primary px-5" id="button_submit">Enviar</button>
              </div>
            </div>
          </form>
        @endif
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
  let submitButton = document.getElementById('button_submit'),
      form = document.getElementById('form'),
      error_container = document.getElementById('error_container'),
      input_name = document.getElementById('name'),
      input_email = document.getElementById('email'),
      input_phone = document.getElementById('phone'),
      input_message = document.getElementById('message');


    submitButton.addEventListener('click', e => {
      e.preventDefault()
      let errors = [];

      error_container.innerHTML = ''
      error_container.style.display = 'none'

      if(input_name.value == '')
      {
        errors.push('Debes colocar un nombre')
      }if(input_email.value == '')
      {
        errors.push('Debes colocar un email')
      } if(input_phone.value == '')
      {
        errors.push('Debes colocar un número telefonico')
      } if(input_message.value == '')
      {
        errors.push('Debes colocar un mensaje')
      }

      if(errors.length > 0)
      {
        let main = document.createElement('ul')
        errors.forEach(error =>{
          main.innerHTML +=
          `
            <li>${error}</li>
          `
        })

        error_container.appendChild(main)
        error_container.style.display = 'block'
      }else {
        form.submit();
      }

    }); 
</script>

<!-- news -->
<section class="bg-light separator-top">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Ultimos articulos</h2>
      </div>
    </div>
    <div class="row gutter-2">
      @foreach($recientes as $reciente)
      <div class="col-md-6 col-lg-4">
        <article class="tile">
          <div class="tile-image" style="background-image: url({{asset('storage/'.$reciente->image)}})"></div>
          <a href="{{route('blog.show', $reciente->slug)}}" class="tile-content">
            <div class="tile-header">
              <span class="eyebrow mb-1">{{$reciente->title}}</span>
              <h3 class="h5">{{$reciente->description}}</h3>
            </div>
            <div class="tile-footer">
              <button class="btn btn-ico btn-outline-white btn-rounded">
                <i class="icon-arrow-right2 fs-20"></i>
              </button>
            </div>
          </a>
        </article>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- / news -->



<script type="text/javascript">
  //-------- COMPARTIR CON REDES SOCIALES ------------
    const facebook = document.getElementById('facebook'),
        twitter = document.getElementById('twitter'),
        whastapp = document.getElementById('whastapp'),
        linkedin = document.getElementById('linkedin')

    let dir = window.location;
    let dir2 = encodeURIComponent(dir);
    let tit = window.document.title;
    let tit2 = encodeURIComponent(tit);

    facebook.addEventListener('click', (e) => {
      e.preventDefault()
      url = `http://www.facebook.com/share.php?u=${dir2}&t=${tit2}`
      window.open(url, '','width=600,height=400,left=50,top=50')
    })

    twitter.addEventListener('click', (e) => {
      e.preventDefault();
      url= `http://twitter.com/?status=${tit2}%20${dir}`
      window.open(url, '', 'width=600,height=400,left=50,top=50')
    })

    whastapp.addEventListener('click', (e) => {
    e.preventDefault();
    location.href = `https://wa.me/?text=${encodeURIComponent(window.location)}`
  })


  </script>

@endsection