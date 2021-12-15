<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Livewire\Component;

class ProductosMostrar extends Component
{
    public Producto $producto;
    public function render()
    {
        return view('livewire.productos.productos-mostrar');
    }
}