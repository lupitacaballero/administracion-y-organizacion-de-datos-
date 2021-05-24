<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="./estilos.css">
    <title>INICIO</title>
</head>
<body>
        <?php
            $RutaArchivo='./archivos.json';
            if(file_exists($RutaArchivo)){
                $Abrir=fopen($RutaArchivo,'r') or die ("NO se puede abrir el archivo");
                $size=filesize($RutaArchivo);

                $ContenidoArchivo= fread($Abrir,$size);
                fclose($Abrir);
                //Variables con datos guardados
                $DatosVuelos= json_decode($ContenidoArchivo,true);

                //Variable con el total de elementos del array.
                $NumVuelos= count($DatosVuelos);

            

        ?>
        <div class="container">
            <h1 class="titulo">FLIGHTS</h1>
            <div class="table-responsive">
                <table  class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">origin</th>
                            <th scope="col">destination</th>
                            <th scope="col">duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for($recorrido=0; $recorrido<$NumVuelos; $recorrido++){
                                echo('<tr>');

                                echo('<td>'. $DatosVuelos[$recorrido]['id'] . '</td>');
                                echo('<td>'. $DatosVuelos[$recorrido]['origin'] . '</td>');
                                echo('<td>'. $DatosVuelos[$recorrido]['destination'] . '</td>');
                                echo('<td>'. $DatosVuelos[$recorrido]['duration'] . '</td>');

                                echo('</tr>');
                            }
                        ?>
                    </tbody>
                </table>
            </div>

        </div>

    <?php
        }
    ?>

</body>
</html>