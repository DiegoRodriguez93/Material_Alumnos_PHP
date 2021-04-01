  <?php
  /* OPERADORES DE COMPARACION */
  // "2" == 2 // true
  // 2 === 2 // true 
  // "2" === 2 // false
  // "2" !== 2 // true
  // "2" != 2 // false
  // 4 != 2  // true
  // 'cualquier_valor' = 'cualquier_otro_valor' // con un solo igual siempre va a devolver true 

   $array = [2 , "4", ["a", 4]]; // diferentes tipos valores un array
   echo $array[1]; //ingresando a un valor por indice del array

   $sexo = "otro";
   $precio = 0;

  // condicional if elseif con el operador  == 

   if($sexo == 'hombre'){
       $precio = 1000;
   }elseif($sexo == 'mujer'){
       $precio = 800;
   }elseif($sexo == 'otro'){
        $precio = 600;
   }

   // condicional if elseif con el operador  != 

   if($sexo != 'hombre'){
       $precio = 700;
       $datos_medicos = true;
   }elseif($sexo != 'otro'){
       $precio = 600;
   }

   $precio = $sexo != 'hombre' ? 600 : 1000; 
   // ejemplo con ternarios esto equivale a
   if($sexo != 'hombre'){
       $precio = 600;
   }else{
       $precio = 1000;
   }

 
$horarios = ['10:00 a 20:00hs', '12:00 a 20:00hs'];
strlen('10:00 a 20:00hs'); // mide el largo del string
$largo_del_array = count($horarios); // mide el largo del array
echo $horarios[0]; // ingresa al primer valor del array
echo $horarios[1]; // ingresa al segundo valor del array


/* EJEMPLO DE FOR RECORRIENDO UN ARRAY DE DATOS */
for($i = 0; $i < $largo_del_array; $i++){
    echo $horarios[$i];
} 
