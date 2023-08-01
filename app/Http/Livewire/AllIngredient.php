<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ingredient;
// use Livewire\WithPagination;

class AllIngredient extends Component
{
/**
 * Déclaration des variables
 * avec protection sur la variable $queryString pour la recherche
 */
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
/**
 * On retourne sur la vue ingredient.index en utilisant le app.layout, avec la variable ingredient qui est le resultat de la requete
 */
    public function render()
    {
        return view('ingredient.index', [
            'ingredients' => Ingredient::where('name', 'LIKE', "%{$this->search}%")
            ->orWhere('degree', 'LIKE', "%{$this->search}%")
            ->orderBY($this->orderField, $this->orderDirection)
            ->get()
        ])->layout('layouts.app');
    }
/**
 * Fonction openModal, pour ouvrir cette derniere
 */
    public function openModal()
    {
        $this->isOpen = true;
    }
/**
 * Fonction openModaldelete, pour ouvrir la modal delete
 */
    public function openModalDelete()
    {
        $this->isDeleteOpen = true;
    }
/**
 * Fonction closeModal et closeModalDelete
 */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function closeModalDelete()
    {
        $this->isDeleteOpen = false;
    }
/**
 * Fonction setOrderField, pour faire un tri croissant ou decroissant sur les colonne.
 * Si $name est égal a ma variable $orderField ( definie au début)
 * Si orderField est déjà croissant, alors on tri en decroissant, sinon croisssant.
 * Si $name est différent de $orderField, alors $orderField prend le nouveau $name (colonne)
 */
    public function setOrderField(string $name) {
        if ($name == $this->orderField) {
            $this->orderDirection = $this->orderDirection == 'ASC' ? 'DESC' : 'ASC';
        } else {
            $this->orderField = $name;
            $this->reset('orderDirection');
            // $this->orderDirection = 'ASC';
        }
    }

/**
 * Fonction pour reset tous les input du formulaire
 */
    public function resetInputs()
    {
        $this->name =null;
        $this->type =null;
        $this->degree=null;
        $this->status= null;
        $this->ingredient_id = null;
    }

/**
 * Quand on va creer un ingredient, on utilise la fonction resetInputs, et on ouvre la Modal avec la fonction, openModal
 */
    public function create()
    {
        $this->resetInputs();
        $this->openModal();
    }
/**
 * On met a jour les données du formulaire
 */
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


