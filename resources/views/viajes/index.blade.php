<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('ok'))
                <div class="mb-4 p-3 rounded bg-green-100">
                    {{ session('ok') }}
                </div>
            @endif

            <div class="flex items-center justify-between mb-4">
                <h2 class="text-xl font-semibold">Viajes</h2>
                <a href="{{ route('viajes.create') }}" class="px-4 py-2 rounded bg-black text-white">
                    Crear viaje
                </a>
            </div>

            <div class="bg-white shadow rounded">
                <table class="w-full">
                    <thead>
                        <tr class="border-b">
                            <th class="text-left p-3">Ref</th>
                            <th class="text-left p-3">Salida</th>
                            <th class="text-left p-3">Llegada</th>
                            <th class="text-left p-3">Origen</th>
                            <th class="text-left p-3">Destino</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($viajes as $v)
                            <tr class="border-b">
                                <td class="p-3">{{ $v->referencia }}</td>
                                <td class="p-3">{{ $v->fecha_salida }}</td>
                                <td class="p-3">{{ $v->fecha_llegada }}</td>
                                <td class="p-3">{{ $v->origen }}</td>
                                <td class="p-3">{{ $v->destino }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="p-3" colspan="5">No hay viajes aún.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-4">
                {{ $viajes->links() }}
            </div>

        </div>
    </div>
</x-app-layout>
