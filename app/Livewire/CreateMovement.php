<?php

namespace App\Livewire;

use Livewire\Component;
use App\Enums\TypeMovementEnum;

class CreateMovement extends Component
{
    /**
     * Todo lo q termine con _insert viene del formulario
     */
    public $open = true;//Control del modal
    public $date_mov_insert = '';
    public $daytime_insert = true;
    public $type_mov_insert = '';
    public $location_insert = '';
    public $product_insert = '';
    public $employee_insert = '';
    public $stock_location_insert = '';
    public $stock_warehouse_insert = '';
    public $quantity_mov_insert = '';
    public $sales_insert = '';
    public $description_insert = '';
    public $type_movements = '';
    

    public function render()
    {
        return view('livewire.create-movement');
    }

    public function mount()
    {

        $this->date_mov_insert = date('Y-m-d');//Inicio con la fecha actual
        $this->daytime_insert = true;
        $this->type_movements = TypeMovementEnum::class;//Clase enum q me da los tipos de mov validos
        //$this->employees = Employee::orderBy('name')->get();//Comienzo mostrando todos los empleados
        //$this->date_mov_insert = '2023-06-09';
        //if ($this->type_mov_insert <> '') {
            //$this->products = Product::orderBy('name')->get();
            //$this->locations = Location::orderBy('name')->get();
            //$this->sales_insert_dispo = "";
            //$this->stock_location_insert = '0';
            //$this->stock_warehouse_insert = '';
        //}
        //$this->logtmp = 'Vacio';        
    }
}
