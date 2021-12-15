<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Livewire\Component;

class ProductosDelete extends Component
{
    public Producto $producto;
    public function render()
    {
        return view('livewire.productos.productos-delete');
    }

    public function delete()
    {
        $this->producto->delete();
        return redirect(route('productos.index'));
    }
}