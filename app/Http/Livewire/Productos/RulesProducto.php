<?php

namespace App\Http\Livewire\Producto;

class RulesProducto
{

    public static function Reglas()
    {
        return
            [
                'producto.producto' => 'required|string',
                'producto.categoria' => 'required|string',
                'producto.precio' => 'numeric|required',
                'foto'=>'nullable|image'
            ];
    }
}