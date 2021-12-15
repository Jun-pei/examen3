<?php

namespace App\Http\Livewire\Login;

use Livewire\Component;
use Illuminate\support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login.login');
    }

    public function login(){

        $datos = $this->validate();
        dd($datos);

        if(Auth::attempt($datos)){
            return redirect(route('usuarios.index'));
        }else {
            $this->emit('alerta','Verificar correo o contraseña');
            $this->password=null;
        }
    }
    
    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'min:8|string|required'
        ];
    }
}
