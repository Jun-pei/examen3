<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width: 150px;height:150px;" class="mx-auto mt-3 card-img-top"
            src="{{ $producto->foto != null ? Storage::disk('public')->url($producto->foto) : Storage::disk('public')->url('images/productos/default.png') }}" alt="Card image cap">
        <div class="text-center card-body">
            <h5 class="card-title">{{ $producto->producto }}</h5>
            <span class="card-text">Categoria: {{ $producto->categoria }}</span><br>
            <small class="card-text">Precio: {{ $producto->precio }}</small>
            <a href="{{route('productos.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>