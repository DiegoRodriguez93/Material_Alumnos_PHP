<?php

function imprimir_fecha_de_nacimiento($tipo)
{

    switch ($tipo) {
        case 'dia':
            $desde = 1;
            $hasta = 31;
            break;
        case 'mes':
            $desde = 1;
            $hasta = 12;
            break;
        case 'ano':
            $desde = 1900;
            $hasta = 2021;
            break;
    }

    $retorno = '';

    for ($i = $desde; $i <= $hasta; $i++) {
        $retorno .= '<option value="' . $i . '">' . $i . '</option>';
    }

    return $retorno;
}

function devolver_error_largo($parametro, $largo, $nombre){

    if(strlen($parametro) < $largo){
        die("<h1 style='color:red'>El largo del $nombre no es correcto debe de 
        ser de al menos $largo caracteres</h1>");
    }

    return null;
}


function devolver_error($parametro, $largo, $nombre){


    try{

        if(strlen($parametro) < $largo){

            $err = "<h1 style='color:red'>El largo del $nombre no es correcto debe de 
            ser de al menos $largo caracteres</h1>";
    
            throw new Exception($err);
        }

    }catch ( Exception $e){

        die("<h1 style='color:red'>No se puede procesar su solicitud</h1>");

    }

}

function solo_numeros($string){

    $caracteres_validos = "/^[[:digit:]]+$/"; 

    if(!preg_match($caracteres_validos, $string)){

        die('Solo debe contener numeros');

    }

}

function is_only_numbers($string)
{
    $caracteres_validos = "/^[[:digit:]]+$/"; 

    if(!preg_match($caracteres_validos, $string)){

        return false;

    }else{

        return true;

    }
}