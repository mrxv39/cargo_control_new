{{-- resources/views/viajes/partials/form_crear.blade.php --}}

<form method="POST" action="{{ route('viaje.save') }}" enctype="multipart/form-data">
    @csrf

    {{-- CLIENTE + PROVEEDOR --}}
    <div class="row justify-content-center">
        @include('viajes.partials.cliente')
        @include('viajes.partials.proveedor')
    </div>

    <div class="clearfix"><br></div>

    {{-- ECONÓMICOS --}}
    @include('viajes.partials.economicos')

    <div class="clearfix"><br></div>

    {{-- REMITENTE / DESTINATARIO (aquí pegar tu bloque legacy real) --}}
    @include('viajes.partials.remitente')
    @include('viajes.partials.destinatario')

    {{-- FOOTER (submit + scripts legacy de momento) --}}
    @include('viajes.partials.footer')
</form>
