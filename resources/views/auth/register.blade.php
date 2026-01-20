{{-- resources/views/auth/register.blade.php --}}
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- EMPRESA --}}
        <div class="text-lg font-semibold mb-2">Empresa</div>

        <div>
            <x-input-label for="empresa_name" :value="__('Nombre empresa')" />
            <x-text-input id="empresa_name" class="block mt-1 w-full" type="text" name="empresa_name" value="{{ old('empresa_name') }}" required autofocus />
            <x-input-error :messages="$errors->get('empresa_name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="empresa_cif" :value="__('CIF')" />
            <x-text-input id="empresa_cif" class="block mt-1 w-full" type="text" name="empresa_cif" value="{{ old('empresa_cif') }}" />
            <x-input-error :messages="$errors->get('empresa_cif')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="empresa_email" :value="__('Email empresa')" />
            <x-text-input id="empresa_email" class="block mt-1 w-full" type="email" name="empresa_email" value="{{ old('empresa_email') }}" />
            <x-input-error :messages="$errors->get('empresa_email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="empresa_telefono" :value="__('Teléfono')" />
            <x-text-input id="empresa_telefono" class="block mt-1 w-full" type="text" name="empresa_telefono" value="{{ old('empresa_telefono') }}" />
            <x-input-error :messages="$errors->get('empresa_telefono')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="empresa_direccion" :value="__('Dirección')" />
            <x-text-input id="empresa_direccion" class="block mt-1 w-full" type="text" name="empresa_direccion" value="{{ old('empresa_direccion') }}" />
            <x-input-error :messages="$errors->get('empresa_direccion')" class="mt-2" />
        </div>

        <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <x-input-label for="empresa_ciudad" :value="__('Ciudad')" />
                <x-text-input id="empresa_ciudad" class="block mt-1 w-full" type="text" name="empresa_ciudad" value="{{ old('empresa_ciudad') }}" />
                <x-input-error :messages="$errors->get('empresa_ciudad')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="empresa_provincia" :value="__('Provincia')" />
                <x-text-input id="empresa_provincia" class="block mt-1 w-full" type="text" name="empresa_provincia" value="{{ old('empresa_provincia') }}" />
                <x-input-error :messages="$errors->get('empresa_provincia')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="empresa_cp" :value="__('CP')" />
                <x-text-input id="empresa_cp" class="block mt-1 w-full" type="text" name="empresa_cp" value="{{ old('empresa_cp') }}" />
                <x-input-error :messages="$errors->get('empresa_cp')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="empresa_pais" :value="__('País')" />
                <x-text-input id="empresa_pais" class="block mt-1 w-full" type="text" name="empresa_pais" value="{{ old('empresa_pais') }}" />
                <x-input-error :messages="$errors->get('empresa_pais')" class="mt-2" />
            </div>
        </div>

        {{-- USUARIO --}}
        <div class="text-lg font-semibold mt-8 mb-2">Usuario</div>

        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ old('name') }}" required />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ old('email') }}" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-6">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
               href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
