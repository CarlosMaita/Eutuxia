@extends('cms.index')

@section('content')
<section>

  @if(session('message'))
        <div class="alert alert-success my-3" role="alert">
          {{session('message')}}
        </div>
  @endif

  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Cotizaciones</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{route('cotizacion.create')}}" class="btn btn-sm btn-outline-success">Crear Cotización</a>
        @if(request()->routeIs('cotizacion.home'))
          <a href="{{route('cotizacion.archived')}}" class="btn btn-sm btn-outline-secondary">Ver Archivadas</a>
        @else
          <a href="{{route('cotizacion.home')}}" class="btn btn-sm btn-outline-primary">Ver Activas</a>
        @endif
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Creador</th>
          <th>Fecha</th>
          <th>Total</th>
          <th>Estatus</th>
          <th>Estado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($cotizaciones as $cotizacion)
        <tr>
          <td>{{$cotizacion->id}}</td>
          <td>{{$cotizacion->nombre}}</td>
          <td>{{$cotizacion->creador}}</td>
          <td>{{$cotizacion->fecha->format('d/m/Y')}}</td>
          <td>${{number_format($cotizacion->total, 2)}}</td>
          <td>
            <span class="badge 
              @if($cotizacion->estatus == 'Aprobada') badge-success
              @elseif($cotizacion->estatus == 'Rechazada') badge-danger
              @else badge-warning
              @endif">
              {{$cotizacion->estatus}}
            </span>
          </td>
          <td>
            @if($cotizacion->archivada)
              <span class="badge badge-secondary">Archivada</span>
            @else
              <span class="badge badge-primary">Activa</span>
            @endif
            @if($cotizacion->publicada)
              <span class="badge badge-info">Publicada</span>
            @endif
          </td>
          <td>
            <div class="btn-group" role="group">
              <a href="{{route('cotizacion.edit', $cotizacion->id)}}" class="btn btn-sm btn-outline-primary">Editar</a>
              
              @if($cotizacion->archivada)
                <form action="{{route('cotizacion.unarchive', $cotizacion->id)}}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-outline-info">Desarchivar</button>
                </form>
              @else
                <form action="{{route('cotizacion.archive', $cotizacion->id)}}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-outline-secondary">Archivar</button>
                </form>
              @endif

              @if($cotizacion->publicada)
                <form action="{{route('cotizacion.unpublish', $cotizacion->id)}}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-outline-warning">Despublicar</button>
                </form>
                @if($cotizacion->token_publico)
                  <a href="{{route('cotizacion.public', $cotizacion->token_publico)}}" target="_blank" class="btn btn-sm btn-outline-success">Ver Pública</a>
                @endif
              @else
                <form action="{{route('cotizacion.publish', $cotizacion->id)}}" method="POST" class="d-inline">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-outline-success">Publicar</button>
                </form>
              @endif

              <button type="button" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#deleteModal{{$cotizacion->id}}">Eliminar</button>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</section>

<!-- Delete Confirmation Modals -->
@foreach($cotizaciones as $cotizacion)
<div class="modal fade" id="deleteModal{{$cotizacion->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$cotizacion->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel{{$cotizacion->id}}">Confirmar Eliminación</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ¿Está seguro de que desea eliminar la cotización <strong>{{$cotizacion->nombre}}</strong>? Esta acción no se puede deshacer.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="{{route('cotizacion.delete', $cotizacion->id)}}" method="POST" class="d-inline">
          @csrf
          <button type="submit" class="btn btn-danger">Eliminar Cotización</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection