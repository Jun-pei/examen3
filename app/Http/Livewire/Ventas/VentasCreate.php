<?php

namespace App\Http\Livewire\Ventas;

use Livewire\Component;
use App\Models\Curso;
use App\Models\Usuario;
use App\Models\Venta;
use App\Http\Livewire\Ventas\RulesVenta;

class VentasCreate extends Component
{
    public Venta $venta;

    public function mount()
    {
        $this->venta = new Venta();
    }
    public function render()
    {
        $cursos = Curso::all();
        $Usuarios = Usuario::all();
        return view('livewire.ventas.ventas-create',compact('cursos', 'usuarios'));
    }
    public function crear(){
        $this->validate();
        $this->venta->save();
    }
    public function rules(){
        return RulesVenta::reglas();
    }
}
