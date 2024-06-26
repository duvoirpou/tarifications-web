<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Type;
use App\Models\TypesFunctionality;
use Livewire\Component;

class CreateProject extends Component
{
    public $categorie_id;
    public $type_id;

    public $categories;
    public $types;
    public $types_functionalities;
    public $typePrice=0;
    public $get_type;
    public $get_categorie;

    public $continent_code;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function updatedCategorieId()
    {
        //dd($this->categorie_id);
        if ($this->categorie_id) {
            $this->types = Type::where('category_id', $this->categorie_id)->get();

            $this->get_categorie = Category::where('id', $this->categorie_id)->first();
        } else {
            $this->types = [];
        }
    }

    public function updatedTypeId()
    {
        if ($this->type_id) {

            $this->types_functionalities = TypesFunctionality::where('type_id', $this->type_id)->get();
            $this->get_type = Type::where('id', $this->type_id)->first();
            $prix = Type::where('id', $this->type_id)->first();
            //dd($prix);
            //dd($prix->price);
            if ($prix) {
                // Récupérer l'adresse IP de l'utilisateur
                $ip = $_SERVER['REMOTE_ADDR'];

                // Récupérer la localisation de l'adresse IP
                $location = json_decode(file_get_contents('http://www.geoplugin.net/json.gp?ip=' . $ip));

                // Vérifier si l'utilisateur est en dehors de l'Afrique
                if (isset($location->geoplugin_continentCode) && $location->geoplugin_continentCode == 'AF') {
                    // Diviser typePrice par deux
                    $this->typePrice = $prix->price / 2;
                    // Afficher un message d'erreur dd($this->typePrice);

                    $this->continent_code = $location->geoplugin_continentCode;

                } else {
                    $this->typePrice = $prix->price;
                }
            } else {
                $this->typePrice = 0;
            }
        } else {
            $this->typePrice = 0;
            $this->types_functionality = [];
        }
    }

    public function render()
    {
        return view('livewire.create-project');
    }


}

