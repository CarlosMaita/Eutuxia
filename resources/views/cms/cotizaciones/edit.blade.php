@extends('cms.index')

@section('content')
<section>

  @if(session('error'))
        <div class="alert alert-danger my-3" role="alert">
          {{session('error')}}
        </div>
  @endif

  @if($errors->any())
    <div class="alert alert-danger my-3" role="alert">
      <ul class="mb-0">
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Editar Cotización: {{$cotizacion->nombre}}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <a href="{{route('cotizacion.home')}}" class="btn btn-sm btn-outline-secondary">Volver</a>
      </div>
    </div>
  </div>

  <form action="{{route('cotizacion.update', $cotizacion->id)}}" method="POST">
    @csrf
    
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="nombre">Nombre de la Cotización *</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre', $cotizacion->nombre)}}" required maxlength="191">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="creador">Creador *</label>
          <input type="text" class="form-control" id="creador" name="creador" value="{{old('creador', $cotizacion->creador)}}" required maxlength="191">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="fecha">Fecha *</label>
          <input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha', $cotizacion->fecha->format('Y-m-d'))}}" required>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="estatus">Estatus *</label>
          <select class="form-control" id="estatus" name="estatus" required>
            <option value="Vencida" {{old('estatus', $cotizacion->estatus) == 'Vencida' ? 'selected' : ''}}>Vencida</option>
            <option value="Aprobada" {{old('estatus', $cotizacion->estatus) == 'Aprobada' ? 'selected' : ''}}>Aprobada</option>
            <option value="Rechazada" {{old('estatus', $cotizacion->estatus) == 'Rechazada' ? 'selected' : ''}}>Rechazada</option>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="propuesta">Propuesta *</label>
      <textarea class="form-control" id="propuesta" name="propuesta" rows="4" required>{{old('propuesta', $cotizacion->propuesta)}}</textarea>
    </div>

    <div class="form-group">
      <label for="descripcion">Descripción *</label>
      <textarea class="form-control" id="descripcion" name="descripcion" rows="4" required>{{old('descripcion', $cotizacion->descripcion)}}</textarea>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="incluye">Qué incluye</label>
          <textarea class="form-control" id="incluye" name="incluye" rows="3">{{old('incluye', $cotizacion->incluye)}}</textarea>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="no_incluye">Qué NO incluye</label>
          <textarea class="form-control" id="no_incluye" name="no_incluye" rows="3">{{old('no_incluye', $cotizacion->no_incluye)}}</textarea>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="tiempo_construccion">Tiempo de Construcción</label>
      <input type="text" class="form-control" id="tiempo_construccion" name="tiempo_construccion" value="{{old('tiempo_construccion', $cotizacion->tiempo_construccion)}}">
    </div>

    <!-- Items Section -->
    <div class="form-group">
      <label>Ítems</label>
      <div id="items-container">
        @if($cotizacion->items && count($cotizacion->items) > 0)
          @foreach($cotizacion->items as $index => $item)
          <div class="row item-row {{$index > 0 ? 'mt-2' : ''}}">
            <div class="col-md-6">
              <input type="text" class="form-control" name="item_nombres[]" placeholder="Nombre del ítem" value="{{$item->nombre}}">
            </div>
            <div class="col-md-4">
              <input type="number" step="0.01" class="form-control item-precio" name="item_precios[]" placeholder="Precio" value="{{$item->precio}}">
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-danger remove-item" style="{{count($cotizacion->items) <= 1 ? 'display:none;' : ''}}">Eliminar</button>
            </div>
          </div>
          @endforeach
        @else
          <div class="row item-row">
            <div class="col-md-6">
              <input type="text" class="form-control" name="item_nombres[]" placeholder="Nombre del ítem">
            </div>
            <div class="col-md-4">
              <input type="number" step="0.01" class="form-control item-precio" name="item_precios[]" placeholder="Precio">
            </div>
            <div class="col-md-2">
              <button type="button" class="btn btn-danger remove-item" style="display:none;">Eliminar</button>
            </div>
          </div>
        @endif
      </div>
      <button type="button" id="add-item" class="btn btn-sm btn-outline-primary mt-2">Agregar Ítem</button>
      <div class="mt-2">
        <strong>Total Calculado: $<span id="calculated-total">{{number_format($cotizacion->total, 2)}}</span></strong>
      </div>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-success">Actualizar Cotización</button>
      <a href="{{route('cotizacion.home')}}" class="btn btn-secondary">Cancelar</a>
    </div>
  </form>

</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    let itemCounter = 1;
    
    // Add item functionality
    document.getElementById('add-item').addEventListener('click', function() {
        const container = document.getElementById('items-container');
        const newRow = document.createElement('div');
        newRow.className = 'row item-row mt-2';
        newRow.innerHTML = `
            <div class="col-md-6">
                <input type="text" class="form-control" name="item_nombres[]" placeholder="Nombre del ítem">
            </div>
            <div class="col-md-4">
                <input type="number" step="0.01" class="form-control item-precio" name="item_precios[]" placeholder="Precio">
            </div>
            <div class="col-md-2">
                <button type="button" class="btn btn-danger remove-item">Eliminar</button>
            </div>
        `;
        container.appendChild(newRow);
        updateRemoveButtons();
        attachPriceChangeEvent();
    });
    
    // Remove item functionality
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('remove-item')) {
            e.target.closest('.item-row').remove();
            updateRemoveButtons();
            calculateTotal();
        }
    });
    
    // Update remove button visibility
    function updateRemoveButtons() {
        const itemRows = document.querySelectorAll('.item-row');
        const removeButtons = document.querySelectorAll('.remove-item');
        
        removeButtons.forEach(button => {
            button.style.display = itemRows.length > 1 ? 'inline-block' : 'none';
        });
    }
    
    // Calculate total
    function calculateTotal() {
        const precios = document.querySelectorAll('.item-precio');
        let total = 0;
        
        precios.forEach(precio => {
            const value = parseFloat(precio.value) || 0;
            total += value;
        });
        
        document.getElementById('calculated-total').textContent = total.toFixed(2);
    }
    
    // Attach price change event to all price inputs
    function attachPriceChangeEvent() {
        const precios = document.querySelectorAll('.item-precio');
        precios.forEach(precio => {
            precio.removeEventListener('input', calculateTotal); // Remove existing listener
            precio.addEventListener('input', calculateTotal); // Add new listener
        });
    }
    
    // Initialize
    attachPriceChangeEvent();
    calculateTotal();
});
</script>

@endsection