<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Viaje {{ $viaje->referencia ?? ('#'.$viaje->id) }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color: #111; }
        .title { font-size: 18px; font-weight: bold; margin: 0 0 6px 0; }
        .muted { color: #666; font-size: 11px; margin: 0 0 12px 0; }
        .box { border: 1px solid #ddd; padding: 10px; margin-bottom: 10px; }
        .box h3 { margin: 0 0 8px 0; font-size: 13px; }
        table { width: 100%; border-collapse: collapse; }
        td { padding: 4px 6px; vertical-align: top; }
        .label { width: 170px; color: #555; }
    </style>
</head>
<body>

<p class="title">Viaje {{ $viaje->referencia ?? ('#'.$viaje->id) }}</p>
<p class="muted">
    ID: {{ $viaje->id }} |
    Empresa: {{ $viaje->empresa_id }} |
    Creado: {{ $viaje->created_at }}
</p>

<div class="box">
    <h3>Cliente</h3>
    <table>
        <tr><td class="label">Cliente</td><td>{{ $data['cliente'] ?? '' }}</td></tr>
        <tr><td class="label">Contacto</td><td>{{ $data['name_con_cli'] ?? '' }}</td></tr>
        <tr><td class="label">Teléfono</td><td>{{ $data['tel_con_cli'] ?? '' }}</td></tr>
        <tr><td class="label">Email</td><td>{{ $data['mail_con_cli'] ?? '' }}</td></tr>
        <tr><td class="label">Ref. facturación</td><td>{{ $data['ref_fact_cli'] ?? '' }}</td></tr>
    </table>
</div>

<div class="box">
    <h3>Proveedor</h3>
    <table>
        <tr><td class="label">Proveedor</td><td>{{ $data['proveedor'] ?? '' }}</td></tr>
        <tr><td class="label">Contacto</td><td>{{ $data['name_con_pro'] ?? '' }}</td></tr>
        <tr><td class="label">Teléfono</td><td>{{ $data['tel_con_pro'] ?? '' }}</td></tr>
        <tr><td class="label">Email</td><td>{{ $data['mail_con_pro'] ?? '' }}</td></tr>
        <tr><td class="label">Ref. facturación</td><td>{{ $data['ref_fact_pro'] ?? '' }}</td></tr>
    </table>
</div>

<div class="box">
    <h3>Datos económicos</h3>
    <table>
        <tr><td class="label">PVP</td><td>{{ $data['pvp'] ?? '' }}</td></tr>
        <tr><td class="label">Coste orden</td><td>{{ $data['costeorden'] ?? '' }}</td></tr>
        <tr><td class="label">Coste</td><td>{{ $data['coste'] ?? '' }}</td></tr>
        <tr><td class="label">IVA</td><td>{{ $data['iva'] ?? '' }}</td></tr>
        <tr><td class="label">Facturable</td><td>{{ $data['facturable'] ?? '' }}</td></tr>
        <tr><td class="label">Comentarios</td><td>{{ $data['commenteco'] ?? '' }}</td></tr>
    </table>
</div>

@php
    $remitente = $data['remitente'][0] ?? '';
    $direccioncar = $data['direccioncar'][0] ?? '';
    $poblacioncar = $data['poblacioncar'][0] ?? '';
    $provinciacar = $data['provinciacar'][0] ?? '';
    $paiscar = $data['paiscar'][0] ?? '';
    $fechacar = $data['fechacar'][0] ?? '';
    $horariocar = $data['horariocar'][0] ?? '';

    $destinatario = $data['destinatario'][0] ?? '';
    $direcciondes = $data['direcciondes'][0] ?? '';
    $poblaciondes = $data['poblaciondes'][0] ?? '';
    $provinciades = $data['provinciades'][0] ?? '';
    $paisdes = $data['paisdes'][0] ?? '';
    $fechades = $data['fechades'][0] ?? '';
    $horariodes = $data['horariodes'][0] ?? '';
@endphp

<div class="box">
    <h3>Remitente (carga)</h3>
    <table>
        <tr><td class="label">Remitente</td><td>{{ $remitente }}</td></tr>
        <tr><td class="label">Dirección</td><td>{{ $direccioncar }}</td></tr>
        <tr><td class="label">Población</td><td>{{ $poblacioncar }}</td></tr>
        <tr><td class="label">Provincia</td><td>{{ $provinciacar }}</td></tr>
        <tr><td class="label">País</td><td>{{ $paiscar }}</td></tr>
        <tr><td class="label">Fecha / Horario</td><td>{{ $fechacar }} — {{ $horariocar }}</td></tr>
    </table>
</div>

<div class="box">
    <h3>Destinatario (descarga)</h3>
    <table>
        <tr><td class="label">Destinatario</td><td>{{ $destinatario }}</td></tr>
        <tr><td class="label">Dirección</td><td>{{ $direcciondes }}</td></tr>
        <tr><td class="label">Población</td><td>{{ $poblaciondes }}</td></tr>
        <tr><td class="label">Provincia</td><td>{{ $provinciades }}</td></tr>
        <tr><td class="label">País</td><td>{{ $paisdes }}</td></tr>
        <tr><td class="label">Fecha / Horario</td><td>{{ $fechades }} — {{ $horariodes }}</td></tr>
    </table>
</div>

</body>
</html>
