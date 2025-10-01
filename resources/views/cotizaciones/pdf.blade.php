<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Cotización - {{$cotizacion->nombre}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f8f9fa;
        }
        .header {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 24px;
            text-align: center;
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            color: #28a745;
            border-bottom: 2px solid #28a745;
            padding-bottom: 5px;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
        }
        .items-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        .items-table th,
        .items-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .items-table th {
            background-color: #eef7f0;
            font-weight: bold;
        }
        .total-box {
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 16px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            margin: 24px 0;
            border-radius: 6px;
        }
        .status-badge {
            padding: 5px 10px;
            border-radius: 3px;
            color: white;
            display: inline-block;
        }
        .status-aprobada { background-color: #28a745; }
        .status-rechazada { background-color: #dc3545; }
        .status-vencida { background-color: #ffc107; color: #333; }
        .status-borrador { background-color: #6c757d; }
        .status-pendiente { background-color: #007bff; }
        .info-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }
        .pdf-logo {
            position: absolute;
            top: 12px;
            right: 16px;
            width: 60px;
            height: auto;
        }
        .alert {
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }
        .alert-danger {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header" style="position: relative;">
        <!-- Logo -->
        <svg class="pdf-logo" width="234" height="258" viewBox="0 0 234 258" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M103.705 216.835C97.6706 216.835 91.8978 215.418 86.7117 211.623C76.013 203.791 74.2646 189.903 73.1089 180.713C73.0797 180.48 73.0504 180.246 73.0204 180.012C55.143 185.517 37.529 191.974 20.2238 199.374C16.6668 200.903 12.5331 199.246 11.0079 195.679C9.48196 192.112 11.1373 187.986 14.7027 186.463C33.196 178.553 52.0395 171.692 71.168 165.892C66.7248 133.272 61.1322 100.543 54.5086 68.3968C54.2677 67.2327 54.0282 66.0324 53.7865 64.8052C51.9972 55.8111 49.9685 45.6152 45.2859 39.5244C40.3069 33.0487 32.5131 33.2781 26.8742 35.6487C20.7088 38.2463 15.6597 44.3748 15.1316 49.9059C14.4664 56.8843 15.3856 65.7044 17.6553 74.1019L40.6248 159.116C41.6357 162.859 39.4222 166.715 35.6782 167.726C31.9264 168.732 28.0807 166.523 27.0675 162.779L4.09797 77.7659C1.3671 67.6585 0.320786 57.2901 1.15075 48.5732C2.16549 37.9407 10.5021 27.3044 21.424 22.7065C34.5741 17.1731 48.3062 20.416 56.4172 30.9622C63.1031 39.6568 65.5738 52.0824 67.5586 62.0689C67.7958 63.26 68.029 64.4295 68.2608 65.562C74.8112 97.3501 80.3623 129.694 84.8031 161.953C119.658 152.372 155.419 146.277 191.728 143.756C211.841 142.355 219.332 149.962 222.074 156.582C225.309 164.388 222.508 174.302 215.262 180.691C209.573 185.706 202.381 188.002 196.603 189.848L124.939 212.717C117.851 214.981 110.608 216.835 103.705 216.835ZM86.6678 176.009C86.7941 176.994 86.9188 177.976 87.042 178.961C88.1745 187.958 89.6343 196.36 95.0059 200.291C101.056 204.719 110.917 202.45 120.668 199.342L192.331 176.472C197.327 174.874 202.495 173.225 205.975 170.157C208.654 167.796 210.028 164.195 209.101 161.959C207.163 157.281 196.989 157.472 192.701 157.765C156.679 160.266 121.216 166.377 86.6678 176.009Z" fill="white"></path>
            <path d="M208.139 133.341C207.678 133.341 207.214 133.296 206.745 133.202C202.944 132.436 200.482 128.735 201.246 124.932C203.268 114.892 205.701 104.701 208.054 94.8486C210.378 85.1154 212.782 75.0511 214.751 65.2548C215.172 63.1668 215.664 60.9387 216.178 58.6189C218.458 48.3037 221.294 35.4654 219.009 27.1288C216.755 18.9177 214.837 17.4564 203.217 15.1013C199.158 14.269 194.061 16.6965 191.107 20.854C188.17 24.9854 186.069 33.0887 184.536 39.0078C184.239 40.1457 183.958 41.239 183.682 42.2637C180.034 55.8095 177.817 70.1037 175.671 83.9297C174.856 89.1805 174.049 94.3905 173.171 99.5251C172.82 101.578 171.577 103.369 169.773 104.416C167.973 105.462 165.801 105.652 163.844 104.938C143.313 97.4486 118.404 101.155 100.385 114.38C97.2641 116.673 92.8663 115.998 90.5689 112.871C88.2746 109.745 88.9506 105.35 92.0779 103.056C111.807 88.5831 137.396 83.5933 160.616 89.3022C161.014 86.8046 161.403 84.2947 161.793 81.7771C163.995 67.5784 166.274 52.8985 170.12 38.6113C170.386 37.6265 170.659 36.5764 170.94 35.4846C172.849 28.1197 175.223 18.957 179.661 12.7168C185.875 3.97528 196.46 -0.603386 206.006 1.33602C218.71 3.91214 228.047 7.00411 232.55 23.414C235.757 35.1005 232.503 49.8219 229.89 61.6501C229.395 63.8797 228.923 66.0193 228.52 68.0257C226.498 78.0661 224.067 88.2559 221.712 98.1084C219.387 107.842 216.984 117.907 215.015 127.702C214.344 131.037 211.413 133.341 208.139 133.341Z" fill="white"></path>
            <path d="M116.299 257.137C110.144 257.137 103.782 256.618 97.0692 255.483C69.9829 250.89 47.6293 231.582 42.7081 208.527C41.8989 204.735 44.3164 201.003 48.1098 200.193C51.9039 199.382 55.6326 201.801 56.4417 205.596C60.192 223.162 77.8637 237.981 99.4166 241.635C121.629 245.4 139.232 241.583 160.438 234.205C171.022 230.524 184.811 224.384 191.765 218.966C197.925 214.168 202.372 208.628 204.289 203.374C205.617 199.73 209.653 197.854 213.291 199.184C216.935 200.513 218.81 204.544 217.482 208.186C213.882 218.052 206.204 225.518 200.398 230.043C189.073 238.866 168.969 246.107 165.052 247.468C148.453 253.242 133.154 257.137 116.299 257.137Z" fill="white"></path>
        </svg>
        <h1>{{$cotizacion->nombre}}</h1>
        <p>Creada por: {{$cotizacion->creador}} | Fecha de vencimiento: {{$cotizacion->fecha->format('d/m/Y')}}</p>
        @if($cotizacion->nombre_cliente)
            <p>Cliente: {{$cotizacion->nombre_cliente}}</p>
        @endif
        <span class="status-badge status-{{strtolower($cotizacion->estatus)}}">{{$cotizacion->estatus}}</span>
    </div>

    <!-- Propuesta -->
    <div class="section">
        <h2 class="section-title">Propuesta</h2>
        <div>{!! $cotizacion->propuesta !!}</div>
    </div>

    <!-- Descripción -->
    <div class="section">
        <h2 class="section-title">Descripción</h2>
        <div>{!! $cotizacion->descripcion !!}</div>
    </div>

    <!-- Incluye / No incluye -->
    @if($cotizacion->incluye)
    <div class="section">
        <h2 class="section-title">Qué incluye</h2>
        <div>{!! $cotizacion->incluye !!}</div>
    </div>
    @endif
    @if($cotizacion->no_incluye)
    <div class="section">
        <h2 class="section-title">Qué NO incluye</h2>
        <div>{!! $cotizacion->no_incluye !!}</div>
    </div>
    @endif

    <!-- Items -->
    @if($cotizacion->items && count($cotizacion->items) > 0)
    <div class="section">
    <h2 class="section-title">Detalle de cotización</h2>
        <table class="items-table">
            <thead>
                <tr>
                    <th>Ítem</th>
                    <th style="text-align: right;">Precio</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cotizacion->items as $item)
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td style="text-align: right;">${{number_format($item->precio, 2)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif

    <!-- Tiempo de construcción -->
    @if($cotizacion->tiempo_construccion)
    <div class="section">
        <h2 class="section-title">Tiempo de implementación</h2>
        <p>{{$cotizacion->tiempo_construccion}}</p>
    </div>
    @endif

    <!-- Total -->
    <div class="total-box">
        Total: ${{number_format($cotizacion->total, 2)}} USD
    </div>

    <!-- Footer -->
    <div style="text-align: center; color: #666; margin-top: 40px; font-size: 12px;">
        <p>Esta cotización fue generada por Eutuxia Group</p>
        <p>Fecha de generación: {{$cotizacion->updated_at->format('d/m/Y H:i')}}</p>
        <p><strong>Nota:</strong> Los precios mostrados están expresados en Dólares Americanos (USD).</p>
    </div>
</body>
</html>