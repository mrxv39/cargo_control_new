<?php

namespace App\Http\Controllers;

use App\Models\Viaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class ViajeController extends Controller
{
    public function index()
    {
        $empresaId = Auth::user()->empresa_id;

        $viajes = Viaje::where('empresa_id', $empresaId)
            ->orderByDesc('id')
            ->paginate(20);

        return view('viajes.index', compact('viajes'));
    }

    public function create()
    {
        return view('viajes.create');
    }

    public function store(Request $request)
    {
        $viaje = new Viaje();
        $viaje->empresa_id = Auth::user()->empresa_id;
        $viaje->user_id = Auth::id();

        if (empty($viaje->referencia)) {
            $viaje->referencia = 'VIAJE-' . strtoupper(substr(md5(uniqid('', true)), 0, 8));
        }

        $viaje->fecha_salida  = $request->input('fechacar.0') ?? null;
        $viaje->fecha_llegada = $request->input('fechades.0') ?? null;
        $viaje->origen        = $request->input('poblacioncar.0') ?? null;
        $viaje->destino       = $request->input('poblaciondes.0') ?? null;

        $viaje->notas = $request->except(['_token']);
        $viaje->save();

        // ✅ En vez de abrir el PDF “solo”, vamos a una vista preview que lo embebe
        return redirect()->route('viajes.preview', $viaje->id);
    }

    public function preview(Viaje $viaje)
    {
        if ((int)$viaje->empresa_id !== (int)Auth::user()->empresa_id) {
            abort(403);
        }

        return view('viajes.preview', [
            'viaje' => $viaje,
        ]);
    }

    public function pdf(Viaje $viaje)
    {
        if ((int)$viaje->empresa_id !== (int)Auth::user()->empresa_id) {
            abort(403);
        }

        $data = $viaje->notas ?? [];

        $pdf = Pdf::loadView('viajes.pdf', [
            'viaje' => $viaje,
            'data'  => $data,
        ])->setPaper('a4');

        // inline
        return $pdf->stream("viaje-{$viaje->id}.pdf");
    }
}
