<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Categorias') }}
            </h2>   

            <x-button target="_blank" href="https://github.com/jampibryan/CellphoneStore" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>

        </div>

    </x-slot>

    <div class="container mt-4">
        <form action="{{ route('categorias.store') }}" method="post">
            @csrf

            <div class="mb-3 w-60">
                <label for="codigoc" class="form-label">Código</label>
                <input id="codigoc" name="codigoc" type="number" class="text-black" tabindex="1" maxlength="4"
                    value="{{ old('codigoc') }}">
                @error('codigoc')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="nombre" class="form-label">Nombre</label>
                <input id="nombre" name="nombre" type="text" class="text-black" tabindex="1"
                    value="{{ old('nombre') }}">
                @error('nombre')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <a href="{{ route('categorias.index') }}" class="bg-blue-800 p-2 text-white ml-20">Cancelar</a>
            <button type="submit" class="bg-red-600 p-2 text-white">Crear</button>
        </form>

    </div>

</x-app-layout>
