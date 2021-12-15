<div class="row">


    <div wire:loading wire:target="foto" class="align-items-center">
        <strong>Loading...</strong>
        <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
    </div>



    <div class="col-4">



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
            <label>Usuario</label>
            <input wire:model.defer="usuario.nombre_usuario" type="text" class="form-control">
            @error('usuario.nombre_usuario') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input wire:model.defer="usuario.email" type="email" class="form-control">
            @error('usuario.email') <span class="text-danger">{{ $message }}</span>@enderror

        </div>

        <div class="form-group">
            <label>Contraseña</label>
            <input autocomplete="new-password" wire:model="password" type="password" class="form-control">
            @error('password') <span class="text-danger">{{ $message }}</span>@enderror

        </div>

        <div class="form-group">
            <label>Confirmar contraseña</label>
            <input wire:model="confirmar_contraseña" type="password" class="form-control">
            @error('confirmar_contraseña') <span class="text-danger">{{ $message }}</span>@enderror

        </div>


    </div>



</div>