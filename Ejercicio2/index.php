<?php
$submarino = [[4,2],[5,2]];

$filas = 15;
$columnas = 15;
echo "<table style='border: black solid 1px'>\n";
for($i = 0;$i < $filas; $i++){
    echo "  <tr>\n";
    for($j = 0;$j < $columnas; $j++){
        $confirmante = true;
        for($d = 0; $d < count($submarino); $d++){
            if ($submarino[$d][0] == $i && $submarino[$d][1] == $j){

                $salida = "S";
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
        //Salida
        echo "      <td style='border: black solid 1px; width: 20px; text-align: center;'>$salida</td>\n";
        
    }
    echo "  </tr>\n";
}
echo "</table>";
?>
