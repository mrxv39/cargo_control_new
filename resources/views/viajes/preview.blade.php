<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight m-0">
                Vista PDF — {{ $viaje->referencia ?? ('Viaje #' . $viaje->id) }}
            </h2>

            <div class="d-flex gap-2">
                <a href="{{ route('viajes.create') }}" class="btn btn-secondary btn-sm">
                    Nuevo viaje
                </a>
                <a href="{{ route('viajes.index') }}" class="btn btn-outline-secondary btn-sm">
                    Volver al listado
                </a>
                <a href="{{ route('viajes.pdf', $viaje->id) }}" target="_blank" class="btn btn-primary btn-sm text-dark">
                    Abrir PDF en nueva pestaña
                </a>
            </div>
        </div>
    </x-slot>

    {{-- Bootstrap CSS SOLO para esta vista (igual que en create) --}}
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous"
    >

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-3">

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                        <strong>ID:</strong> {{ $viaje->id }}
                        <span class="mx-2">|</span>
                        <strong>Creado:</strong> {{ $viaje->created_at }}
                    </div>

                    <div class="text-muted">
                        (Preview embebido)
                    </div>
                </div>

                <object
                    type="application/pdf"
                    data="{{ route('viajes.pdf', $viaje->id) }}"
                    width="100%"
                    style="height: 85vh;"
                >
                    No Support
                </object>

            </div>
        </div>
    </div>
</x-app-layout>
