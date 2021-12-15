<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\Productos\RulesProducto;

class ProductosCreate extends Component
{

    use WithFileUploads;
    public Producto $producto;
    public $foto;

    public function mount()
    {
        $this->producto = new Producto();
    }

    public function render()
    {
        return view('livewire.productos.productos-create');
    }

    public function crear()
    {
        $this->validate();
        if ($this->foto != null) {
            $this->producto->foto = Storage::disk('public')->put('images/productos',
            $this->foto);
        }
        $this->producto->save();
        return redirect(route('productos.index'));
    }

    protected function rules()
    {
        return RulesProducto::Reglas();
    }
}