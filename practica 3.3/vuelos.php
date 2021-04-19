<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
    <?php
    //Este arreglo tiene la informacion aguardar en el archivo csv

    $vuelos = array(

    array('id','origen','Destino','Duracion'), 
    array('1','New york', 'London','415'), 
    array('2','Shangai','Paris','760'),
    array('3','lstambul','Tokyo','700'),  
    array('4','New york','Paris','435'), 
    array('5','Moscow','Paris','245'),
    array('6','Lima','New york','455'),
    );
   //Nombre del archivo en el servidor
    $nombreArch ='vuelos2.csv';
   //Abrimos el archivo en modo escritura
    $archivo=fopen($nombreArch,'w')or die("No se puede abrir el archivo:$nombreArch");

   //recorriendo el arreglo 2D foreach
   foreach($vuelos as $vuelo) {

  //escribiendo cada registro (vuelo) en el archivo CSV
  $resp=fputcsv($archivo,$vuelo,',','"', '"');

  //si el resultado de intentar escribir es estrictamente igual a false...
  if($resp===false){die("Error al escribir en CSV");}
  }//fin-foreach

  //cerramos archivo
  fclose($archivo) or die ( "no se puede cerrar el archivo:$nombreArch");

  echo("<h1> Resiva el archivo:$nombreArch</h1>");


?>

</body>