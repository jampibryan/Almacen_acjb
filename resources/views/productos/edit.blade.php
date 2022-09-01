<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ __('Productos') }}
            </h2>

            <x-button target="_blank" href="https://github.com/jampibryan/CellphoneStore" variant="black"
                class="justify-center max-w-xs gap-2">
                <x-icons.github class="w-6 h-6" aria-hidden="true" />
                <span>Star on Github</span>
            </x-button>

        </div>
    </x-slot>

    <div class="container mt-4">

        <form action="{{ route('productos.update', $producto) }}" method="post">
            @csrf

            @method('put')

            <div class="mb-3 w-60">
                <label for="codigoP" class="form-label">Código</label>
                <input id="codigoP" name="codigoP" type="number" class="text-black"
                    value="{{ old('codigoP', $producto->codigoP) }}">
                @error('codigoP')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="descripcion" class="form-label">Descripción</label>
                <input id="descripcion" name="descripcion" type="text" class="text-black"
                    value="{{ old('descripcion', $producto->descripcion) }}">
                @error('descripcion')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="categoria_id" class="form-label">IdCategoria</label>
                <input id="categoria_id" name="categoria_id" type="number" class="text-black"
                    value="{{ old('categoria_id', $producto->categoria_id) }}">
                @error('categoria_id')
                    <small>*{{ $message }}</small>
                @enderror
            </div>


            <div class="mb-3 w-60">
                <label for="precio" class="form-label">Precio</label>
                <input id="precio" name="precio" type="number" class="text-black"
                    value="{{ old('precio', $producto->precio) }}">
                @error('precio')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                <label for="stock" class="form-label">Stock</label>
                <input id="stock" name="stock" type="number" class="text-black"
                    value="{{ old('stock', $producto->stock) }}">
                @error('stock')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 w-60">
                {{-- <label for="atributo" class="form-label">Estado</label> --}}
                <select id="atributo" name="atributo" class="text-black">
                    <option disabled selected>Selecciona el estado</option>
                    <option value="importado">Importado</option>
                    <option value="noImportado">No importado</option>
                </select>
                @error('atributo')
                    <small>*{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3">
                <a href="{{ route('productos.index') }}" class="bg-blue-800 p-2 text-white ml-20">Cancelar</a>
                <button type="submit" class="bg-red-600 p-2 text-white">Actualizar</button>
            </div>
        </form>
    </div>
</x-app-layout>
