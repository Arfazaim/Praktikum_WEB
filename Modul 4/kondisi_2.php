<?php
$nilai = 80;

    if($nilai >= 90) {
        echo "Nilai Memuaskan";
    } else if($nilai >= 80) {
        echo "Nilai Bagus";
    } else if($nilai >= 70) {
        echo "Nilai Baik";
    } else if($nilai >= 60) {
        echo "Nilai Cukup";
    } else if($nilai >= 50) {
        echo "Nilai Kurang";
    } else {
        echo "Nilai Kurang sekali";
    }
?>