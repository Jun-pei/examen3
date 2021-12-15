<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function Reglas($id = null)
    {
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return
            [
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'required|string|unique:usuarios,email,' . $id,
                'password' => $validarPassword,
                'confirmar_contraseña'=>'same:password',
                'foto'=>'nullable|image'
            ];
    }
}