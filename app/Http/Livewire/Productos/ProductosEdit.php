<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductosEdit extends Component
{
    use WithFileUploads;
    public Producto $producto;
    public $foto;
    public function render()
    {
        return view('livewire.productos.productos-edit');
    }
    public function editar()
    {
        $this->validate();
        if ($this->foto != null) {
            if ($this->producto->foto != null) {
                Storage::disk('public')->delete($this->producto->foto);
            }
            $this->producto->foto = Storage::disk('public')->put('images/productos', $this->foto);
        }
        $this->producto->save();
        return redirect(route('productos.index'));
    }
    protected function rules()
    {
        return RulesProducto::Reglas();
    }
}