<!doctype html>
<html lang="en">

<head>
    <title>Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <h5 class=" font-weight-bold">Lista de productos </h5>
        <table class="table table-bordered mt-5">
            <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>CÓDIGO</th>
                    <th>DESCRIPCIÓN</th>
                    <th>CATEGORIA</th>
                    <th>PRECIO</th>
                    <th>STOCK</th>
                    <th>ATRIBUTO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->codigoP }}</td>
                        <td>{{ $producto->descripcion }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>S/. {{ $producto->precio }}</td>
                        <td>{{ $producto->stock }}</td>
                        <td>{{ $producto->atributo }}</td>
                    </tr>
                    {{-- @empty --}}
                    {{-- @endforelse --}}
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
