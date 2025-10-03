<?php
    $matkul = ["PAW","ALPRO","DPW","STRUKDAT","JARKOM","PTI","PSBF","RPL"];
    $praktikum = ["JARKOM","PAW"];

    for($i = 0; $i < count($matkul);$i++){
        if($matkul[$i] == $praktikum[0]){
            echo "Saya sedang mengambil matkul . $praktikum[0] . termasuk praktikumnya <br>";
        }elseif($matkul[$i] == $praktikum[1]){
            echo "Saya sedang mengambil matkul . $praktikum[1] . termasuk praktikumnya <br>";
        }elseif($i == 6 || $i == 7){
            echo "Saya belum mengambil matkul $matkul[$i] <br>";
        }else{
            echo "Saya sudah mengambil matkul $matkul[$i] semester lalu <br> ";
        }
    }
?>

