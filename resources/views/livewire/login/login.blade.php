<div>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <img class="mx-auto d-block" style="width: 140px; height: 140px;" src="{{ Storage::disk('public')->url('images/usuarios/default.png')}}" alt="">

            <form wire:submit.prevent="login">
                <div class="mb-3">
                    <label class="form-label">Correo electronico</label>
                    <input wire:model="email" type="email" class="form-control" placeholder="Ejemplo@gmail.com">
                    @error('email') <b class="text-danger">{{$message}}</b> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input wire:model="password" type="password" class="form-control" placeholder="********">
                    @error('password') <b class="text-danger">{{$message}}</b> @enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label" for="exampleCheck1">Recuerdame</label>
                </div>
                <button type="submit" class="btn btn-primary">Acceder</button>
            </form>
        </div>
    </div>
</div>
