<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingredient;
// use Livewire\WithPagination;

class AllIngredient extends Component
{
    public string $search = '';
    public string $orderField = 'name';
    public string $orderDirection = 'ASC';
    public $isOpen = false;
    public $isDeleteOpen = false;
    public $deleteId;
    public string $selectIngredient;

    public $name,$type,$degree,$status,$ingredient_id;

    protected $queryString = [
        'search' => ['except' =>'']
    ];

    public function render()
    {
        return view('ingredient.index', [
            'ingredients' => Ingredient::where('name', 'LIKE', "%{$this->search}%")
            ->orderBY($this->orderField, $this->orderDirection)
            ->get()
        ])->layout('layouts.app');
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function openModalDelete()
    {
        $this->isDeleteOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function closeModalDelete()
    {
        $this->isDeleteOpen = false;
    }

    public function setOrderField(string $name) {
        if ($name == $this->orderField) {
            $this->orderDirection = $this->orderDirection == 'ASC' ? 'DESC' : 'ASC';
        } else {
            $this->orderField = $name;
            $this->reset('orderDirection');
            // $this->orderDirection = 'ASC';
        }
    }

    public function resetInputs()
    {
        $this->name =null;
        $this->type =null;
        $this->degree=null;
        $this->status= null;
        $this->ingredient_id = null;
    }

    public function create()
    {
        $this->resetInputs();
        $this->openModal();
    }

    public function update(Ingredient $ingredient)
    {
        $this->name = $ingredient->name;
        $this->type = $ingredient->type;
        $this->degree = $ingredient->degree;
        $this->status = $ingredient->status;
        $this->ingredient_id = $ingredient->id;

        $this->openModal();


    }

    public function store()
    {
        $validated = $this->validate([
            'name' => 'required|max:255',
            'type' => 'required',
            'degree' => 'required',
            'status' => 'required|boolean'
        ]);

        Ingredient::updateOrCreate(['id' => $this->ingredient_id], $validated);
        $this->closeModal();
    }

    public function deleteId ($id)
    {
        $this->deleteId = $id;
        $this->openModalDelete();
    }


    public function delete ()
    {
        Ingredient::find($this->deleteId)->delete();
        $this->closeModalDelete();
    }
}


