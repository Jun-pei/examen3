<?php

namespace App\Http\Livewire\Login;

use Livewire\Component;
use Illuminate\support\Facades\Auth;

class Logout extends Component
{
    public function render()
    {
        return view('livewire.login.logout');
    }
    
    public function logout()
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
