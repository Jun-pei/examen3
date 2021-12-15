<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Productos\ProductosIndex;
use App\Http\Livewire\Productos\ProductosCreate;
use App\Http\Livewire\Productos\ProductosDelete;
use App\Http\Livewire\Productos\ProductosEdit;
use App\Http\Livewire\Productos\ProductosMostrar;
use App\Http\Livewire\Usuarios\UsuariosIndex;
use App\Http\Livewire\Usuarios\UsuariosCreate;
use App\Http\Livewire\Usuarios\UsuariosDelete;
use App\Http\Livewire\Usuarios\UsuariosEdit;
use App\Http\Livewire\Usuarios\UsuariosMostrar;
use App\Http\Livewire\Login\Login;
use App\Http\Livewire\Ventas\VentasIndex;
use App\Http\Livewire\Ventas\VentasCreate;

Route::get('/login', Login::class)->name('login');

// Route::group(['middleware'=>'auth'],function(){
    Route::get('/productos', ProductosIndex::class)->name('productos.index');
    Route::get('/productos/create', ProductosCreate::class)->name('productos.create');
    Route::get('/productos/{curso}/mostrar', ProductosMostrar::class)->name('productos.mostrar');
    Route::get('/productos/{curso}/edit', ProductosEdit::class)->name('productos.edit');
    Route::get('/productos/{curso}/delete', ProductosDelete::class)->name('productos.delete');

    Route::get('/usuarios', UsuariosIndex::class)->name('usuarios.index');
    Route::get('/usuarios/create', UsuariosCreate::class)->name('usuarios.create');
    Route::get('/usuarios/{usuario}/mostrar', UsuariosMostrar::class)->name('usuarios.mostrar');
    Route::get('/usuarios/{usuario}/edit', UsuariosEdit::class)->name('usuarios.edit');
    Route::get('/usuarios/{usuario}/delete', UsuariosDelete::class)->name('usuarios.delete');

    Route::get('/ventas', VentasIndex::class)->name('ventas.index');
    Route::get('/ventas/create', VentasCreate::class)->name('ventas.create');
// });