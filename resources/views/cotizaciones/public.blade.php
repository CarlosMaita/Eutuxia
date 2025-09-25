<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="noindex, nofollow">
    <title>Cotización - {{$cotizacion->nombre}}</title>
    
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Sintony', sans-serif;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: 'Montserrat', sans-serif;
        }
        .quote-container {
            max-width: 900px;
            margin: 2rem auto;
            background: white;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            border-radius: 0.375rem;
        }
        .quote-header {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 2rem;
            border-radius: 0.375rem 0.375rem 0 0;
            position: relative;
            overflow: hidden;
        }
        .quote-header::before {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 50px;
            background-image: url('{{asset('imagen/oxas/curva_blanca.svg')}}');
            background-position: bottom;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .oxas-logo {
            position: absolute;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            height: 30%;
            max-height: 60px;
        }
        .quote-header-content {
            margin-top: 60px;
        }
        .dynamic-wave {
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 100%;
            height: 50px;
            overflow: hidden;
        }
        .dynamic-wave svg {
            width: 100%;
            height: 100%;
        }
        .quote-content {
            padding: 2rem;
        }
        .section-title {
            color: #28a745;
            border-bottom: 2px solid #28a745;
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
        .btn-floating {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.3);
            transition: all 0.3s ease;
        }
        .btn-floating:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(40, 167, 69, 0.4);
        }
        .currency-note {
            background-color: #e9ecef;
            border-left: 4px solid #28a745;
            padding: 1rem;
            margin-top: 2rem;
            border-radius: 0 0.375rem 0.375rem 0;
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
                text-align: center;
            }
            .btn-floating {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            .oxas-logo {
                height: 25%;
                max-height: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="quote-container">
        <!-- Header -->
        <div class="quote-header">
            <!-- Oxas Logo -->
            <img src="{{asset('imagen/oxas/logo_light.svg')}}" alt="Oxas" class="oxas-logo">
            
            <!-- Dynamic Wave Animation -->
            <div class="dynamic-wave">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 40" preserveAspectRatio="none">  
                    <path d="" fill="white">
                        <animate 
                            attributeName="d" 
                            begin="0s" 
                            dur="5s"
                            repeatCount="indefinite"
                            values="
                            M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;
                            M0,40 C200,40 400,0 600,0 C800,0 800,40 1000,40 L1000,50 L0,50 L0,40 Z;
                            M0,30 C200,30 200,0 400,0 C600,0 800,40 1000,40 L1000,50 L0,50 L0,30 Z;
                            M0,0 C200,7.11236625e-15 200,40 400,40 C600,40 800,0 1000,0 L1000,50 L0,50 L0,0 Z;">
                        </animate>
                    </path>
                </svg>
            </div>
            
            <div class="quote-header-content">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="mb-2">{{$cotizacion->nombre}}</h1>
                        <p class="mb-0">Creada por: <strong>{{$cotizacion->creador}}</strong></p>
                        <p class="mb-0">Fecha de vencimiento: <strong>{{$cotizacion->fecha->format('d/m/Y')}}</strong></p>
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
                                <small>Tiempo de implementación: {{$cotizacion->tiempo_construccion}}</small>
                            </div>
                        @endif
                    </div>
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
            
            <!-- Currency Note -->
            <div class="currency-note">
                <p class="mb-0"><i class="fas fa-info-circle mr-2"></i><strong>Nota:</strong> Los precios mostrados en esta cotización están expresados en Dólares Americanos (USD).</p>
            </div>
        </div>
    </div>

    <!-- PDF Download Button (Floating) -->
    <div class="pdf-download">
        <a href="{{route('cotizacion.pdf', $cotizacion->token_publico)}}" class="btn btn-success btn-floating shadow" title="Descargar PDF">
            <i class="fas fa-download"></i>
        </a>
    </div>

    <script src="{{asset('vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>