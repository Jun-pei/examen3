<?php

namespace App\Http\Livewire\Productos;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class ProductosIndex extends Component
{

    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public $search;
    public $cargado = false;

    public function render()
    {

        $productos = ($this->cargado == true) ? Producto::where('producto', 'LIKE', '%' . $this->search . '%')
            ->orwhere('categoria', 'LIKE', '%' . $this->search . '%')
            ->orwhere('precio', 'LIKE', '%' . $this->search . '%')
            ->paginate(5) : [];
        return view('livewire.productos.productos-index', compact('productos'));
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function cargando()
    {
        $this->cargado = true;
    }
}