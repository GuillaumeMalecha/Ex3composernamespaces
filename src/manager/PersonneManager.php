<?php

namespace Guill\Ex3composernamespaces\manager;

use Faker\Factory;
use Guill\Ex3composernamespaces\Entity\Personne;

class PersonneManager extends Personne
{
    public function create(){
        $faker = Factory::create('fr_FR');

        $personnes = [];
        for ($i = 1; $i <= $nombre; $i++) {
            $personnes[] = new Personne(
                $faker->name,
                $faker->address,
            );
        }
        return $personnes;
    }
}