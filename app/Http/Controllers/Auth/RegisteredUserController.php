<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Empresa;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function create(): View
    {
        return view('auth.register');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            // Empresa
            'empresa_name' => ['required', 'string', 'max:255'],
            'empresa_cif' => ['nullable', 'string', 'max:50'],
            'empresa_email' => ['nullable', 'email', 'max:255'],
            'empresa_telefono' => ['nullable', 'string', 'max:50'],
            'empresa_direccion' => ['nullable', 'string', 'max:255'],
            'empresa_ciudad' => ['nullable', 'string', 'max:255'],
            'empresa_provincia' => ['nullable', 'string', 'max:255'],
            'empresa_cp' => ['nullable', 'string', 'max:30'],
            'empresa_pais' => ['nullable', 'string', 'max:255'],

            // Usuario
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = DB::transaction(function () use ($request) {
            $empresa = Empresa::create([
                'name' => (string) $request->input('empresa_name'),
                'cif' => $request->filled('empresa_cif') ? (string) $request->input('empresa_cif') : null,
                'email' => $request->filled('empresa_email') ? (string) $request->input('empresa_email') : null,
                'telefono' => $request->filled('empresa_telefono') ? (string) $request->input('empresa_telefono') : null,
                'direccion' => $request->filled('empresa_direccion') ? (string) $request->input('empresa_direccion') : null,
                'ciudad' => $request->filled('empresa_ciudad') ? (string) $request->input('empresa_ciudad') : null,
                'provincia' => $request->filled('empresa_provincia') ? (string) $request->input('empresa_provincia') : null,
                'cp' => $request->filled('empresa_cp') ? (string) $request->input('empresa_cp') : null,
                'pais' => $request->filled('empresa_pais') ? (string) $request->input('empresa_pais') : null,
            ]);

            $user = User::create([
                'empresa_id' => $empresa->id,
                'name' => (string) $request->input('name'),
                'email' => (string) $request->input('email'),
                'password' => (string) $request->input('password'),
            ]);

            event(new Registered($user));

            return $user;
        });

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
