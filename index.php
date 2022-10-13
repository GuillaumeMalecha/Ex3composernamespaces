<?php

require_once 'vendor/autoload.php';
include_once PersonneManager::class;

$faker = PersonneManager::create();

echo $faker->name();