<?php

namespace App\Livewire\Forms;

use App\Models\Ejemplo;
use Livewire\Form;

class EjemploForm extends Form
{
    public ?Ejemplo $ejemploModel;
    
    public $nombre = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
        ];
    }

    public function setEjemploModel(Ejemplo $ejemploModel): void
    {
        $this->ejemploModel = $ejemploModel;
        
        $this->nombre = $this->ejemploModel->nombre;
    }

    public function store(): void
    {
        $this->ejemploModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->ejemploModel->update($this->validate());

        $this->reset();
    }
}
