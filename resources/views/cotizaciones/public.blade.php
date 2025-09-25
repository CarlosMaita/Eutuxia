<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
    <title>Cotización - {{$cotizacion->nombre}}</title>
    
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .quote-container {
            max-width: 900px;
            margin: 2rem auto;
            background: white;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border-radius: 0.375rem;
        }
        .quote-header {
            background: linear-gradient(135deg, #6f42c1, #007bff);
            color: white;
            padding: 2rem;
            border-radius: 0.375rem 0.375rem 0 0;
        }
        .quote-content {
            padding: 2rem;
        }
        .section-title {
            color: #6f42c1;
            border-bottom: 2px solid #6f42c1;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .items-table {
            background: #f8f9fa;
            border-radius: 0.375rem;
            padding: 1rem;
            margin: 1rem 0;
        }
        .total-amount {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 1rem;
            border-radius: 0.375rem;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
        }
        .status-badge {
            font-size: 1rem;
            padding: 0.5rem 1rem;
        }
        .pdf-download {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            z-index: 1000;
        }
        @media (max-width: 768px) {
            .quote-container {
                margin: 1rem;
                border-radius: 0;
            }
            .quote-header {
                padding: 1.5rem;
                border-radius: 0;
            }
            .quote-content {
                padding: 1.5rem;
            }
            .pdf-download {
                position: static;
                margin-top: 1rem;
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="quote-container">
        <!-- Header -->
        <div class="quote-header">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <h1 class="mb-2">{{$cotizacion->nombre}}</h1>
                    <p class="mb-0">Creada por: <strong>{{$cotizacion->creador}}</strong></p>
                    <p class="mb-0">Fecha: <strong>{{$cotizacion->fecha->format('d/m/Y')}}</strong></p>
                </div>
                <div class="col-md-4 text-md-right">
                    <span class="badge status-badge
                        @if($cotizacion->estatus == 'Aprobada') badge-success
                        @elseif($cotizacion->estatus == 'Rechazada') badge-danger
                        @else badge-warning
                        @endif">
                        {{$cotizacion->estatus}}
                    </span>
                    @if($cotizacion->tiempo_construccion)
                        <div class="mt-2">
                            <small>Tiempo: {{$cotizacion->tiempo_construccion}}</small>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="quote-content">
            <!-- Propuesta -->
            <div class="mb-4">
                <h3 class="section-title">Propuesta</h3>
                <p>{{$cotizacion->propuesta}}</p>
            </div>

            <!-- Descripción -->
            <div class="mb-4">
                <h3 class="section-title">Descripción</h3>
                <p>{{$cotizacion->descripcion}}</p>
            </div>

            <!-- Incluye / No incluye -->
            @if($cotizacion->incluye || $cotizacion->no_incluye)
            <div class="row mb-4">
                @if($cotizacion->incluye)
                <div class="col-md-6">
                    <h4 class="section-title text-success">Qué incluye</h4>
                    <div class="alert alert-success" role="alert">
                        {!! nl2br(e($cotizacion->incluye)) !!}
                    </div>
                </div>
                @endif
                @if($cotizacion->no_incluye)
                <div class="col-md-6">
                    <h4 class="section-title text-danger">Qué NO incluye</h4>
                    <div class="alert alert-danger" role="alert">
                        {!! nl2br(e($cotizacion->no_incluye)) !!}
                    </div>
                </div>
                @endif
            </div>
            @endif

            <!-- Items -->
            @if($cotizacion->items && count($cotizacion->items) > 0)
            <div class="mb-4">
                <h3 class="section-title">Desglose de Items</h3>
                <div class="items-table">
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Ítem</th>
                                    <th class="text-right">Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cotizacion->items as $item)
                                <tr>
                                    <td>{{$item->nombre}}</td>
                                    <td class="text-right">${{number_format($item->precio, 2)}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @endif

            <!-- Total -->
            <div class="total-amount">
                <div>Total: ${{number_format($cotizacion->total, 2)}}</div>
            </div>

            <!-- Footer info -->
            <div class="text-center text-muted mt-4">
                <p><small>Esta cotización es válida y fue generada por Eutuxia Group</small></p>
                <p><small>Fecha de generación: {{$cotizacion->updated_at->format('d/m/Y H:i')}}</small></p>
            </div>
        </div>
    </div>

    <!-- PDF Download Button -->
    <div class="pdf-download">
        <a href="{{route('cotizacion.pdf', $cotizacion->token_publico)}}" class="btn btn-lg btn-success shadow">
            <i class="fas fa-download"></i> Descargar PDF
        </a>
    </div>

    <script src="{{asset('vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>