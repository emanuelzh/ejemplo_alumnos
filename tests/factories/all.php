<?php

$factory('App\Alumno',function($faker){

    return [
        'nombre' => $faker->name,
        'carrera' => 'Economia',
        'semestre' => rand(1,3)
    ];

});