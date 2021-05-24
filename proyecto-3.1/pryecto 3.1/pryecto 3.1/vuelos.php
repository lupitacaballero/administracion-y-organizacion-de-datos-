<?php
    require_once('./Clasevuelos.php');

    $Vuelo1= new Vuelos("1","Nueva York","London","415");
    $Vuelo2= new Vuelos("2","Shangai","Paris","760");
    $Vuelo3= new Vuelos("3","Istanbul","Tokyo","700");
    $Vuelo4= new Vuelos("4","Nueva York","Paris","435");
    $Vuelo5= new Vuelos("5","Moscow","Paris","245");
    $Vuelo6= new Vuelos("6","Lima","Nueva York","455");

    $ArregloVuelos= array();

    $ArregloVuelos[0]= $Vuelo1;
    $ArregloVuelos[1]= $Vuelo2;
    $ArregloVuelos[2]= $Vuelo3;
    $ArregloVuelos[3]= $Vuelo4;
    $ArregloVuelos[4]= $Vuelo5;
    $ArregloVuelos[5]= $Vuelo6;    

    $json_texto= json_encode($ArregloVuelos);

    $AbrirArchivo='./archivos.json';

    $InsertarDatos= fopen($AbrirArchivo,'w+');

    if($InsertarDatos==false){
        echo ("No pude abrir el archivo");
        exit();
    }

    fwrite($InsertarDatos,$json_texto);

    fclose($InsertarDatos);

    echo ('<h2>LOS DATOS ESTAN LISTOS.</h2>');

    header("refresh:5; url=mostrar.php");

?>