<?php

include '../funciones_ayuda.php'; 

$nombre                     = $_POST['nombre'];
$apellido                   = $_POST['apellido'];
$dia_de_nacimiento          = $_POST['dia_de_nacimiento'];
$mes_de_nacimiento          = $_POST['mes_de_nacimiento'];
$ano_de_nacimiento          = $_POST['ano_de_nacimiento'];
$genero                     = $_POST['genero'];
$numero_telefono_celular    = $_POST['numero_telefono_celular'];
$numero_telefono_fijo       = $_POST['numero_telefono_fijo'];
$tipo_de_documento          = $_POST['tipo_de_documento'];
$numero_de_documento        = $_POST['numero_de_documento'];
$tipo_de_suscripcion        = $_POST['tipo_de_suscripcion'];

devolver_error_largo($nombre, 2, 'nombre');
devolver_error_largo($apellido, 2, 'apellido');

if( $genero != 'hombre' AND $genero != 'mujer' ){
    die('El genero no es correcto');
}

if($tipo_de_documento == 'ci'){

    // solo_numeros($numero_de_documento);

    if(is_only_numbers($numero_de_documento) 
    AND ( strlen($numero_de_documento) < 7 
    OR strlen($numero_de_documento) > 8 )  ){
        die('La cedula no es correcta');
    }

}elseif($tipo_de_documento == 'otro'){

    devolver_error_largo($numero_de_documento, 6, 'numero de documento');

}else{

    die('El tipo de documento ingresado no es correcto');

}

// un

// agregar una condicion para cedula y tipo

// preg_match("^\([0-9]{9}\$", "099123456"); devuelve verdadero o falso

echo '<h1 style="color:green">su formulario se ha enviado correctamente<h1>';