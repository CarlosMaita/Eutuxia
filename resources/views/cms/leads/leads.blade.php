@extends('cms.index')


@section('content')
<section>


  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Leads</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
  </div>

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Email</th>
          <th>Funnel</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($leads as $lead)
          <tr>
            <td>{{$lead->id}}</td>
            <td>{{$lead->name}}</td>
            <td>{{$lead->email}}</td>
            <td>{{$lead->funnel}}</td>
            <td class="d-flex ">
              
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {{$leads->links()}}
  </div>
</section>

@endsection
