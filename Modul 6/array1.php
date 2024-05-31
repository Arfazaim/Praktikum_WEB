<?php
    $kelompok1 =
    array("Budi","Ari","Aroyan","Dewi","Erna");
    echo "Nama Kelompok 1 :<br/>";
    for ($i=0; $i<=4; $i++){
        echo " + ",$kelompok1[$i],"<br/>";
    }

    echo"<br/><br/>";

    $kelompok2[] = "Ratih";
    $kelompok2[] = "Budi";
    $kelompok2[] = "Hery";
    $kelompok2[] = "Intan";
    $kelompok2[] = "Lani";

    echo "Nama Kelompok 2 :<br/>";
    for ($i=0; $i<=4; $i++){
        echo " + ",$kelompok2[$i],"<br/>";
    }