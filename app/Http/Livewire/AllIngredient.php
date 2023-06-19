<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingredient;
use Livewire\WithPagination;

class AllIngredient extends Component
{
    public string $search = '';
    public $isModalOpen = false;

    use WithPagination;

    public function render()
    {
        return view('livewire.all-ingredient', [
            'ingredients' => Ingredient::where('name', 'LIKE', "%{$this->search}%")->get(),
            'ingredients' => Ingredient::paginate(10),
        ]);
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }
}
