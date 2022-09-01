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

    <a href="{{ route('productos.create') }}" class="w-16 bg-blue-600 py-2 px-4 italic text-2xl">REGISTRAR PRODUCTO</a>
    <a href="{{route('productos.pdf') }}" class="w-16 bg-red-600 py-2 px-4 italic text-2xl">PDF</a>

    <div class="container flex justify-center mt-4">
        <table class="bg-blue-800  border-8 border-double border-black-400">
            <thead>
                <tr>
                    {{-- <th class="border text-center px-8 py-2 italic text-2xl">ID</th> --}}
                    <th class="border text-center px-8 py-2 italic text-2xl">CÓDIGO</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">DESCRIPCIÓN</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">CATEGORIA</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">PRECIO</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">STOCK</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">ATRIBUTO</th>
                    <th class="border text-center px-8 py-2 italic text-2xl">ACCIONES</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        {{-- <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $categoria->id }}</td> --}}
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $producto->codigoP }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $producto->descripcion }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $producto->nombre }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">S/. {{ $producto->precio }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $producto->stock }}</td>
                        <td class="border text-center px-4 py-2 italic text-2xl text-white">{{ $producto->atributo }}</td>
                        </td>
                        <td class="border text-center px-4 py-2 italic text-base">
                            <a href="{{ route('productos.edit', $producto) }}" class="bg-blue-500 p-2">Editar</a>
                            <form action="{{ route('productos.destroy', $producto) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="bg-red-600 p-2 text-white mt-4">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>


</x-app-layout>