<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Module;
use Livewire\WithPagination;

class ModulesController extends Component
{

    use WithPagination;

    public $name, $description, $selected_id, $componentName, $pageTitle, $buscar;
    private $pagination = 5;

    public function mount()
    {
        $this->componentName = 'Módulos';
        $this->pageTitle = 'Listado';
        $this->selected_id = 0;
        $this->buscar = '';
    }

    public function render()
    {
        if(strlen($this->buscar) > 0) 
            $data = Module::where('name', 'like', '%' . $this->buscar . '%')->paginate($this->pagination);
        else 
            $data = Module::orderBy('id', 'desc')->paginate($this->pagination);
        
        return view('livewire.module.modules', ['modules' => $data])
        ->extends('layouts.theme.app')
        ->section('content');
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }
}
