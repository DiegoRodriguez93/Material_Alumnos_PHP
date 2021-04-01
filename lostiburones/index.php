<html>
<head>
  <title>Los tiburones</title> <!-- TITLE ES EL NOMBRE QUE SE MUESTRA EN LA PESTANA DEL NAVEGADOR -->
  <!-- AGREGO UNA FUENTE PERSONALIZADA INICIO -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
  <style>
    * {
      font-family: 'Kiwi Maru', serif;
    }
  </style>
  <!-- AGREGO UNA FUENTE PERSONALIZADA FIN -->
</head>
<body>

  <?php include 'funciones_ayuda.php';?>

  <h1>Club de natación los tiburones</h1>
  <h2>Horarios del club</h2>

  <table style="width:40%; text-align:center;border:1px solid black">
    <tr>
      <th>Dias</th>
      <th>Horarios</th>
    </tr>

    <?php

    $clases_de_ninos = [
        'lunes' => '10:00 a 20:00 hs',
        'martes' => '10:00 a 20:00 hs',
        'miercoles' => '10:00 a 20:00 hs',
        'jueves' => '10:00 a 20:00 hs',
        'viernes' => '10:00 a 20:00 hs',
        'sabados' => '14:00 a 18:00 hs'
    ];
    
    foreach($clases_de_ninos as $indice => $valor){
    /*     echo " el Indice es igual a $indice y el valor es igual a $valor";
        echo $clases_de_ninos[$indice]; // imprime el valor */
        
        echo "<tr>
        <td>$indice</td>
        <td>$valor</td>
        </tr>";
    
    }
    
        ?>

  </table>

  <h2>Precios del club</h2>

    <!-- LOS PRECIOS DEL CLUB LOS VAMOS A VER CON EL BUCLE WHILE QUE ES EL ULTIMO QUE NOS FALTA VER LA CLASE SIGUIENTE-->

  <h2>Inscribirme a las clases</h2>

  <?php include 'componentes/formulario.html'; ?>

  <form action="servidor/procesar_incripcion_clases.php" method="POST">

    <label>Nombre</label>
    <input name="nombre" type="text">

    <label>Apellido</label>
    <input name="apellido" type="text">
    <br />
    <label>Fecha de nacimiento</label>
    <br />
    <label>Día de nacimiento</label>

    <select name="dia_de_nacimiento">
      <?php echo imprimir_fecha_de_nacimiento('dia'); ?>
    </select>

    <label>Mes de nacimiento</label>
    <select name="mes_de_nacimiento">
      <?php echo imprimir_fecha_de_nacimiento('mes'); ?>
    </select>

    <label>Año de nacimiento</label>
    <select name="ano_de_nacimiento">
      <?php echo imprimir_fecha_de_nacimiento('ano'); ?>
    </select>

    <input type="radio" name="genero" value="hombre">
    <label for="hombre">Hombre</label>
    <input type="radio" name="genero" value="mujer">
    <label for="mujer">Mujer</label><br>

    <br />

    <label for="numero_telefono_celular">Número de teléfono celular:</label>
    <input type="text" name="numero_telefono_celular">

    <label for="numero_telefono_fijo">Número de teléfono fijo:</label>
    <input type="text" name="numero_telefono_fijo"><br /><br />

    <label>Tipo de documento</label><br />
    <input type="radio" name="tipo_de_documento" value="ci">
    <label for="ci">CI:</label>
    <input type="radio" name="tipo_de_documento" value="otro">
    <label for="otro">Otro</label>

    <label for="numero_de_documento">Número de documento:</label>
    <input type="text" name="numero_de_documento">

    <label for="tipo_de_suscripcion">Tipo de suscripción:</label>
    <select type="text" name="tipo_de_suscripcion">
    <?php
/* DEBES RECORRER EL EXCEL Y RELLENAR LAS OPCIONES DEL SELECT
 INDICANDO COMO VALOR DEL LA OPCION EL NOMBRE DE LA OPCION EJ OPCION1: Y EL USUARIO DEBE VER EJ: NINOS ANUAL
 PISTA: DEBES USAR EL BUCLE FOREACH
 */
$tipos_de_suscripcion = [
  'opcion1' => 'Ninos anual',
  'opcion2' => 'Ninos mensual',
  'opcion3' => 'Adolencente mensual',
  'opcion4' => 'Adolecente anual',
  'opcion5' => 'Adulto mensual',
  'opcion6' => 'Adolecente anual',
  'opcion7' => 'Anciano mensual',
  'opcion8' => 'Anciano anual',
];

    ?>  
    <select>

    <br/><br/><br/>

    <button type="submit">Inscribirme</button>
  </form>

</body>

</html>