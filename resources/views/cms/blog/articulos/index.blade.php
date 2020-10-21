@extends('cms.index')


@section('content')
<section>


  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Blog Articulos</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{route('blog.article.create')}}" type="button" class="btn btn-sm btn-outline-success">Agregar Articulo</a>
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Imagen</th>
          <th>Titulo</th>
          <th>Descripción</th>
          <th>Categoria</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($articulos as $articulo)
          <tr>
            <td>{{$articulo->id}}</td>
            <td>
              <img src="{{asset('storage/'. $articulo->image)}}" width="50">
            </td>
            <td>{{$articulo->title}}</td>
            <td>{{$articulo->description}}</td>
            <td>{{$articulo->category->title}}</td>
            <td class="d-flex ">
              <a href="{{route('blog.article.show', $articulo->id)}}"  class="btn btn-sm btn-outline-success mr-2 editar">Editar</a>
              <form action="{{route('blog.article.destroy', $articulo->id)}}" method="POST">
                @csrf
                <input type="submit" value="Eliminar" type="button" class="btn btn-sm btn-outline-danger">
              </form>
              <a href="{{route('blog.show', $articulo->slug)}}" target="_black" class="btn btn-sm btn-outline-info mx-2">Ver articulo</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</section>

@endsection