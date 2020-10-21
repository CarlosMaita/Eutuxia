@extends('cms.index')


@section('content')
<section>

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Crear Articulo</h1>
    <div class="btn-group mr-2">
      <a href="{{route('blog.article')}}" type="button" class="btn btn-sm btn-outline-success px-4">Volver</a>
    </div>
  </div>
    

  <div class="">
    @if(session('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
    </div>
    @endif

    <div>
        <ul style="display: none;" class="alert alert-danger" id="alert_container">
        </ul>
    </div>

    <form action="{{route('blog.article.store')}}" id="form" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-12 mb-4">
          <h5>Titulo</h5>
          <input class="form-control" id="input_title" type="text" name="title" placeholder="Titulo" maxlength="191">
        </div>
        <div class="col-12 mb-4">
          <h5>Descripción corta</h5>
          <input class="form-control" id="description" maxlength="100" type="text" placeholder="Descripción corta" name="description">
        </div>
        <div class="col-12 mb-4">
          <h5>Contenido</h5>
          <textarea class="ckeditor" id="content" name="content" placeholder="Contenido"></textarea>
        </div>
        <div class="col-12 mb-4">
          <h5>Categorias</h5>
          <select class="form-control" name="category_id" id="category">
            <option value="0">Selecciona una categoria</option>
            @foreach($categorias as $category)
              <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
          </select>
        </div>
        <div class="col-12 mb-4">
          <h5>Imagen</h5>
          <input type="file" id="input_file" name="image">
        </div>
        <div class="col-12 mb-5">
          <a href="{{route('blog.article')}}" type="button" class="btn btn-outline-danger px-4 mr-4">Cancelar</a>
          <input type="button" id="submit_button" class="btn btn-success px-5" value="Crear Articulo">
        </div>
      </div>
    </form>
  </div>
</section>

<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
  let inputTitle = document.getElementById('input_title'),
      inputFile = document.getElementById('input_file'),
      submitButton = document.getElementById('submit_button'),
      description = document.getElementById('description'),
      categoria = document.getElementById('category'),
      contenido = document.getElementById('content'),
      formularioSubmit = document.getElementById('form');


  submitButton.addEventListener('click', (e) => {
    e.preventDefault();
    
    if(!validar()){
      return ;
    }

    formularioSubmit.submit();

  });





  const validar = () => {
        let arrayValidate = [];

        if(inputTitle.value == ''){
          arrayValidate.push('Debe agregar un titulo')
        } if(inputFile.files.length <= 0){
          arrayValidate.push('Debe agregar una imagen')
        }if(description.value == '')
        {
          arrayValidate.push('Debe agregar una descripción')
        }if(CKEDITOR.instances.content.getData() == '')
        {
          arrayValidate.push('Debe agregar un contenido')
        }if(categoria.selectedIndex == 0)
        {
          arrayValidate.push('Debe agregar una categoria')
        }

        if(arrayValidate.length > 0){
          let container = document.getElementById('alert_container')
          container.innerHTML = '';

          arrayValidate.forEach(alert => {
            container.innerHTML += `

              <li>${alert}</li>

            `
          });

          container.style.display = 'block';

          return false;
        } else {
          return true;
        }
      }


</script>


@endsection
