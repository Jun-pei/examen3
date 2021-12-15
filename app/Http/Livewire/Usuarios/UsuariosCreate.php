<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Usuarios\RulesUsuario;
use Illuminate\Support\Facades\Hash;

class UsuariosCreate extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $password;
    public $foto;
    public $confirmar_contraseña;

    public function mount()
    {
        $this->usuario = new usuario();
    }

    public function render()
    {
        return view('livewire.usuarios.usuarios-create');
    }

    public function crear()
    {
        $this->validate();
        $this->usuario->password = Hash::make($this->password);
        if ($this->foto != null) {
            $this->usuario->foto = Storage::disk('public')->put('images/usuarios', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuarios.index'));

    }

    protected function rules()
    {
        return RulesUsuario::Reglas();
    }
}