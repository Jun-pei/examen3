<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img class="card-img-top" src="{{ $producto->foto != null ? Storage::disk('public')->url($producto->foto) : Storage::disk('public')->url('images/productos/default.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{$producto->producto}}</h5>
          <p class="card-text">{{$producto->categoria}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('productos.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>