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
            padding-bottom: 3rem;
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
        }
        .oxas-logo {
            position: absolute;
            top: 20px;
            right: 20px;
            left: auto;
            transform: none;
            height: 5rem;
            max-height: 5rem;
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
            <svg class="logo-sm oxas-logo" width="234" height="258" viewBox="0 0 234 258" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M103.705 216.835C97.6706 216.835 91.8978 215.418 86.7117 211.623C76.013 203.791 74.2646 189.903 73.1089 180.713C73.0797 180.48 73.0504 180.246 73.0204 180.012C55.143 185.517 37.529 191.974 20.2238 199.374C16.6668 200.903 12.5331 199.246 11.0079 195.679C9.48196 192.112 11.1373 187.986 14.7027 186.463C33.196 178.553 52.0395 171.692 71.168 165.892C66.7248 133.272 61.1322 100.543 54.5086 68.3968C54.2677 67.2327 54.0282 66.0324 53.7865 64.8052C51.9972 55.8111 49.9685 45.6152 45.2859 39.5244C40.3069 33.0487 32.5131 33.2781 26.8742 35.6487C20.7088 38.2463 15.6597 44.3748 15.1316 49.9059C14.4664 56.8843 15.3856 65.7044 17.6553 74.1019L40.6248 159.116C41.6357 162.859 39.4222 166.715 35.6782 167.726C31.9264 168.732 28.0807 166.523 27.0675 162.779L4.09797 77.7659C1.3671 67.6585 0.320786 57.2901 1.15075 48.5732C2.16549 37.9407 10.5021 27.3044 21.424 22.7065C34.5741 17.1731 48.3062 20.416 56.4172 30.9622C63.1031 39.6568 65.5738 52.0824 67.5586 62.0689C67.7958 63.26 68.029 64.4295 68.2608 65.562C74.8112 97.3501 80.3623 129.694 84.8031 161.953C119.658 152.372 155.419 146.277 191.728 143.756C211.841 142.355 219.332 149.962 222.074 156.582C225.309 164.388 222.508 174.302 215.262 180.691C209.573 185.706 202.381 188.002 196.603 189.848L124.939 212.717C117.851 214.981 110.608 216.835 103.705 216.835ZM86.6678 176.009C86.7941 176.994 86.9188 177.976 87.042 178.961C88.1745 187.958 89.6343 196.36 95.0059 200.291C101.056 204.719 110.917 202.45 120.668 199.342L192.331 176.472C197.327 174.874 202.495 173.225 205.975 170.157C208.654 167.796 210.028 164.195 209.101 161.959C207.163 157.281 196.989 157.472 192.701 157.765C156.679 160.266 121.216 166.377 86.6678 176.009Z" fill="white"></path>
                <path d="M208.139 133.341C207.678 133.341 207.214 133.296 206.745 133.202C202.944 132.436 200.482 128.735 201.246 124.932C203.268 114.892 205.701 104.701 208.054 94.8486C210.378 85.1154 212.782 75.0511 214.751 65.2548C215.172 63.1668 215.664 60.9387 216.178 58.6189C218.458 48.3037 221.294 35.4654 219.009 27.1288C216.755 18.9177 214.837 17.4564 203.217 15.1013C199.158 14.269 194.061 16.6965 191.107 20.854C188.17 24.9854 186.069 33.0887 184.536 39.0078C184.239 40.1457 183.958 41.239 183.682 42.2637C180.034 55.8095 177.817 70.1037 175.671 83.9297C174.856 89.1805 174.049 94.3905 173.171 99.5251C172.82 101.578 171.577 103.369 169.773 104.416C167.973 105.462 165.801 105.652 163.844 104.938C143.313 97.4486 118.404 101.155 100.385 114.38C97.2641 116.673 92.8663 115.998 90.5689 112.871C88.2746 109.745 88.9506 105.35 92.0779 103.056C111.807 88.5831 137.396 83.5933 160.616 89.3022C161.014 86.8046 161.403 84.2947 161.793 81.7771C163.995 67.5784 166.274 52.8985 170.12 38.6113C170.386 37.6265 170.659 36.5764 170.94 35.4846C172.849 28.1197 175.223 18.957 179.661 12.7168C185.875 3.97528 196.46 -0.603386 206.006 1.33602C218.71 3.91214 228.047 7.00411 232.55 23.414C235.757 35.1005 232.503 49.8219 229.89 61.6501C229.395 63.8797 228.923 66.0193 228.52 68.0257C226.498 78.0661 224.067 88.2559 221.712 98.1084C219.387 107.842 216.984 117.907 215.015 127.702C214.344 131.037 211.413 133.341 208.139 133.341Z" fill="white"></path>
                <path d="M116.299 257.137C110.144 257.137 103.782 256.618 97.0692 255.483C69.9829 250.89 47.6293 231.582 42.7081 208.527C41.8989 204.735 44.3164 201.003 48.1098 200.193C51.9039 199.382 55.6326 201.801 56.4417 205.596C60.192 223.162 77.8637 237.981 99.4166 241.635C121.629 245.4 139.232 241.583 160.438 234.205C171.022 230.524 184.811 224.384 191.765 218.966C197.925 214.168 202.372 208.628 204.289 203.374C205.617 199.73 209.653 197.854 213.291 199.184C216.935 200.513 218.81 204.544 217.482 208.186C213.882 218.052 206.204 225.518 200.398 230.043C189.073 238.866 168.969 246.107 165.052 247.468C148.453 253.242 133.154 257.137 116.299 257.137Z" fill="white"></path>
            </svg>
            
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
                        @if($cotizacion->nombre_cliente)
                            <p class="mb-0">Cliente: <strong>{{$cotizacion->nombre_cliente}}</strong></p>
                        @endif
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