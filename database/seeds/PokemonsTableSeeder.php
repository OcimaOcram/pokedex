<?php

use Illuminate\Database\Seeder;
use App\Pokemon;
class PokemonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $valore_pokemon= [
        [
            "name" => "Pikachu",
            "description" => "topo giallo che spara fulmini",
            "weight" => "6kg",
        ],
        [
            "name" => "Bulbasaur",
            "description" => "Dinosauro pianta che spara foglie",
            "weight" => "7kg",
        ]
        ];
    public function run()
    {
        foreach($this->valore_pokemon as $pokemon) {
            Pokemon::create($pokemon);
        }
    }
}

