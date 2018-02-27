<html>
 <head>
 
   <title>Ejemplo de uso " switch"</title>
 
 </head>
 <body>
 	Ejemplo de un Ciclo 
 	<BR></BR>
 

<?php
  $dia = 12;

  switch($dia){
   case 1:    // Bloque 1
      echo "El dia es Lunes"; 
        break;
        case 2: // Bloque 2
        echo "El dia es Martes";
        break;
        case 3: // Bloque 3
        echo "El dia es Miercoles";
        break;
        case 4: // Bloque 4
        echo "El dia es Jueves";
        break;
        case 5: // Bloque 5
        echo "El dia es Viernes";
        break;

        case 6: // Bloque 6
        echo "El dia es Sabado";
        break;

        case 7: // Bloque 7
        echo "El dia es Domingo";
        break; 

        case 8: // Bloque 8
        echo "La variable contiene otro valor";
        echo "distinto a los dias de la semana";

  }
 ?>

</body> 

 </html> 