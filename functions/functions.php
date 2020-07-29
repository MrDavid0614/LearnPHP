<?php

// Funciones en PHP
// Funciones en PHP son iguales que en JavaScript

// Funciones recursivas son aquellas que se llaman dentro de ellas mismas, ejemplo

function recursiva($valor){

    if ($valor<=10){
        echo "$valor \n";
        recursiva(++$valor);
    }

}

recursiva(0);

?>