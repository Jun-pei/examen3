<div wire:init="cargando">

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>


        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
                <a href="{{ route('productos.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-plus-circle"></i> Crear nuevo</a>
            </div>
        </div>
    </div>


    @if (count($productos) > 0)
        <table class="table text-center table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th>Imagen</th>
                    <th scope="col">producto</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($productos as $producto)
                    <tr>
                        <th scope="row">{{ $producto->id }}</th>
                        <th>
                            <img style="width: 40px;height:40px;"src="{{ $producto->foto != null ? Storage::disk('public')->url($producto->foto) : Storage::disk('public')->url('images/productos/default.png') }}"
                                alt="">
                        </th>
                        <td>{{ $producto->producto }}</td>
                        <td>{{ $producto->categoria }}</td>
                        <td>{{ $producto->precio }}</td>
                        <td>
                            <a href="{{ route('productos.mostrar', $producto) }}" title="Mostrar más"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('productos.edit', $producto) }}" title="Editar producto"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="{{ route('productos.delete', $producto) }}" title="Eliminar producto seleccionado más"
                                class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    @else
        <img class="mx-auto d-block" style="width: 300px;height:300px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
    @endif

    {{ $cargado == true ? $productos->links() : null }}
</div>