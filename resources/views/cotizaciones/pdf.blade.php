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
        }
        .header {
            background-color: #6f42c1;
            color: white;
            padding: 20px;
            text-align: center;
            margin-bottom: 30px;
        }
        .section {
            margin-bottom: 25px;
        }
        .section-title {
            color: #6f42c1;
            border-bottom: 2px solid #6f42c1;
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
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .total-box {
            background-color: #28a745;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
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
        .info-row {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
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
    <div class="header">
        <h1>{{$cotizacion->nombre}}</h1>
        <p>Creada por: {{$cotizacion->creador}} | Fecha: {{$cotizacion->fecha->format('d/m/Y')}}</p>
        <span class="status-badge status-{{strtolower($cotizacion->estatus)}}">{{$cotizacion->estatus}}</span>
    </div>

    <!-- Propuesta -->
    <div class="section">
        <h2 class="section-title">Propuesta</h2>
        <p>{{$cotizacion->propuesta}}</p>
    </div>

    <!-- Descripción -->
    <div class="section">
        <h2 class="section-title">Descripción</h2>
        <p>{{$cotizacion->descripcion}}</p>
    </div>

    <!-- Incluye / No incluye -->
    @if($cotizacion->incluye || $cotizacion->no_incluye)
    <div class="section">
        @if($cotizacion->incluye)
        <h3>Qué incluye</h3>
        <div class="alert alert-success">
            {!! nl2br(e($cotizacion->incluye)) !!}
        </div>
        @endif
        @if($cotizacion->no_incluye)
        <h3>Qué NO incluye</h3>
        <div class="alert alert-danger">
            {!! nl2br(e($cotizacion->no_incluye)) !!}
        </div>
        @endif
    </div>
    @endif

    <!-- Items -->
    @if($cotizacion->items && count($cotizacion->items) > 0)
    <div class="section">
        <h2 class="section-title">Desglose de Items</h2>
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
        <h2 class="section-title">Tiempo de Construcción</h2>
        <p>{{$cotizacion->tiempo_construccion}}</p>
    </div>
    @endif

    <!-- Total -->
    <div class="total-box">
        Total: ${{number_format($cotizacion->total, 2)}}
    </div>

    <!-- Footer -->
    <div style="text-align: center; color: #666; margin-top: 40px; font-size: 12px;">
        <p>Esta cotización fue generada por Eutuxia Group</p>
        <p>Fecha de generación: {{$cotizacion->updated_at->format('d/m/Y H:i')}}</p>
    </div>
</body>
</html>