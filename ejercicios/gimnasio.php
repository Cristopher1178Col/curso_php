<?php

echo "RUTINA DEL GYM: ";

$rutina = array(
    'Lunes' => 'Pecho, Espalda, Hombros',
    'Martes'=> 'Piernas, Gluteos',
    'Miercoles'=> 'Biceps, Espalda, Hombros',
    'Jueves'=> 'Triceps, Biceps',
    'Viernes'=> 'Piernas, Pantorrillas',
);

foreach($rutina as $dia => $ejercicios){
    echo "Rutina del dia $dia: $ejercicios";
}