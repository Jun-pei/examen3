<div class="row">


    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Loading...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>



    <div class="col-4">

        @if ($foto != null)
            <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
        @else
            <img style="width: 230px;height:230px;"
                src="{{ $producto->foto != null ? Storage::disk('public')->url($producto->foto) : Storage::disk('public')->url('images/productos/default.png') }}"
                alt="">
        @endif

        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Subir imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                @error('foto') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </form>
    </div>

    <div class="mx-auto col-6">
        <div class="form-group">
            <label>Producto</label>
            <input wire:model.defer="producto.producto" type="text" class="form-control">
            @error('producto.producto') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Categoria</label>
            <input wire:model.defer="producto.categoria" type="text" class="form-control">
            @error('producto.categoria') <span class="text-danger">{{ $message }}</span>@enderror

        </div>


        <div class="form-group">
            <label>Precio</label>
            <input wire:model="producto.precio" type="text" class="form-control">
            @error('producto.precio') <span class="text-danger">{{ $message }}</span>@enderror
        </div>


    </div>



</div>