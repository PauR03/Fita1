<?php
//Valores del campo
$filas = 15;
$columnas = 15;

$cantidad_fragatas = 4;
$cantidad_submarinos = 3;
$cantidad_destructores = 2;
$cantidad_portaviones = 1;

$barcos = [$cantidad_fragatas,$cantidad_submarinos,$cantidad_destructores,$cantidad_portaviones];

$fragatas = [];
$submarins = [];
$destructors = [];
$portaviones = [];



for($i = 0; $i < count($barcos);$i++){
    for($c = 0; $c < $barcos[$i]; $c++){
        if ($i == 0){

            $randomf = rand(1,$filas-1);
            $randomc = rand(1,$columnas-1);

            array_push($fragatas,[$randomf,$randomc]);
        }
        else if ($i == 1){

            array_push($submarins,[]);

            $randomf = rand(1,$filas-1);
            $randomc = rand(1,$columnas-1);
            $continuidad = rand(1,4);
            
            for($s = 0;$s < 2;$s++){
                if($s != 0){
                    if($continuidad == 1){
                        $randomc -= 1;
                    }
                    else if($continuidad == 2){
                        $randomf += 1;
                    }
                    else if($continuidad == 3){
                        $randomc += 1;
                    }
                    else if($continuidad == 4){
                        $randomf -= 1;
                    }
                }

                array_push($submarins[$c],[$randomf,$randomc]);
            } 
        }
        else if($i == 2){
            
            array_push($destructors,[]);

            $randomf = rand(1,$filas-1);
            $randomc = rand(1,$columnas-1);
            $continuidad = rand(1,4);
            
            for($s = 0;$s < 3;$s++){
                if($s != 0){
                    if($continuidad == 1){
                        $randomc -= 1;
                    }
                    else if($continuidad == 2){
                        $randomf += 1;
                    }
                    else if($continuidad == 3){
                        $randomc += 1;
                    }
                    else if($continuidad == 4){
                        $randomf -= 1;
                    }
                }

                array_push($destructors[$c],[$randomf,$randomc]);
            } 
            
        }
        else if($i == 3){

            array_push($portaviones);

            $randomf = rand(1,$filas-1);
            $randomc = rand(1,$columnas-1);
            $continuidad = rand(1,4);
            
            for($s = 0;$s < 4;$s++){
                if($s != 0){
                    if($continuidad == 1){
                        $randomc -= 1;
                    }
                    else if($continuidad == 2){
                        $randomf += 1;
                    }
                    else if($continuidad == 3){
                        $randomc += 1;
                    }
                    else if($continuidad == 4){
                        $randomf -= 1;
                    }
                }

                array_push($portaviones,[$randomf,$randomc]);
            } 
        } 
    }
        
}



echo "<table style='border: black solid 1px'>\n";
for($i = 0;$i < $filas; $i++){
    echo "  <tr>\n";
    for($j = 0;$j < $columnas; $j++){
        $confirmante = true;
        foreach($fragatas as $fragata){
            if ($fragata[0] == $i && $fragata[1] == $j){
                $salida = "F";
                $confirmante = false;
            }
        }
        
        foreach($submarins as $submarino){
            foreach($submarino as $sub){
                if($sub[0] == $i && $sub[1] == $j){
                    $salida = "S";
                    $confirmante = false;
                }
            }
        }
        foreach($destructors as $destrctor){
            foreach($destrctor as $des){
                if($des[0] == $i && $des[1] == $j){
                    $salida = "D";
                    $confirmante = false;
                }
            }
        }

        

        for($d = 0; $d < count($portaviones); $d++){
            if ($portaviones[$d][0] == $i && $portaviones[$d][1] == $j){

                $salida = "P";
                $confirmante = false;
            }
        }
        if($i == 0 && $j >= 1){

            $salida = $j;
        }
        else if ($i >= 1 && $j == 0){

            $salida = chr(65+$i-1);
        }
        else if($confirmante){
            $salida = "";
        }
        /*********************/
        echo "      <td style='border: black solid 1px; width: 20px; text-align: center;'>$salida</td>\n";
        
    }
    echo "  </tr>\n";
}
echo "</table>";


?>