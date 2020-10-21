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
              <h3>{{$reciente->description}}</h3>
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

@endsection