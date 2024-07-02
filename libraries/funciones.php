<?php

function recortar_palabras(string $texto,  int $cantidad) : string{

    $palabras = explode(" ", $texto);

    if(count($palabras) <= $cantidad){
        return $texto;
    }

    return implode(" ", array_slice($palabras, 0 , $cantidad)) . "..." ;









}
?>