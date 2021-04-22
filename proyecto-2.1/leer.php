<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ARCH=fopen("datos.txt","a");
        
        $ra = range(1,100); 
        shuffle($ra); 
        $ma=array(); 
        $variablecon=0;
        

        
        foreach($ra as $val)
        {
            
            if($variablecon<14){
                array_push($ma,$val); 
                fwrite($ARCH,"$val  \n"); 
                $variablecon++; 

            } else{
                break;
            }
            
            
        }

        
        $alm=0;
        $con=0;
        foreach($ma as $val2)
        {
            $almacenaje=$alm+=$val2; 
            echo"$val2 \n <br>"; 
            $con++;
            
        }
        
        $vmax=intval(max($ma)); 
        $vmin=intval(min($ma));
        $vlol=intval(max($ma)); 
        
        $promedio=intval($alm/=$con); 
        echo("<br>PROMEDIO: $promedio"); 
        
        
        
        $v1=$vmax-=$promedio;
        $v2=$promedio-=$vmin;
        
        if(($v1)>($v2)){
            echo("<br> VALOR MAS ALEJADO : $vlol");
         }else{
             echo("<br>VALOR MAS ALEJADO 2 : $vmin");
         }

        
        fclose($ARCH); 
    ?>
</body>
</html>