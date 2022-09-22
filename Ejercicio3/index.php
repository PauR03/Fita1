<?php
$fragata = [[1,7]];
$submarin = [[2,3],[2,4]];
$destructor = [[13,1],[12,1],[11,1]];
$portaviones = [[5,1],[5,2],[5,3],[5,4]];

$filas = 15;
$columnas = 15;
echo "<table style='border: black solid 1px'>\n";
for($i = 0;$i < $filas; $i++){
    echo "  <tr>\n";
    for($j = 0;$j < $columnas; $j++){
        $confirmante = true;
        //Fragata
        for($f = 0; $f < count($fragata); $f++){
            if ($fragata[$f][0] == $i && $fragata[$f][1] == $j){

                $salida = "F";
                $confirmante = false;
            }
        }
        //Submarin
        for($s = 0; $s < count($submarin); $s++){
            if ($submarin[$s][0] == $i && $submarin[$s][1] == $j){

                $salida = "S";
                $confirmante = false;
            }
        }
        //Destructor
        for($d = 0; $d < count($destructor); $d++){
            if ($destructor[$d][0] == $i && $destructor[$d][1] == $j){

                $salida = "D";
                $confirmante = false;
            }
        }
        //Portaviones
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