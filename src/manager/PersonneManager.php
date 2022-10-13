<?php

use Faker\Factory;

class PersonneManager extends Personne
{
    public function Create()
    {
        $faker = Faker\Factory::create();
    }
}