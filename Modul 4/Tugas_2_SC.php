<?php
$nilai = 85; // example score

switch (true) {
    case $nilai >= 90 && $nilai <= 100:
        $keterangan = "Baik Sekali";
        break;
    case $nilai >= 76 && $nilai <= 89:
        $keterangan = "Baik";
        break;
    case $nilai >= 60 && $nilai <= 75:
        $keterangan = "Cukup";
        break;
    case $nilai >= 50 && $nilai <= 59:
        $keterangan = "Hampir Cukup";
        break;
    default:
        $keterangan = "Kurang";
        break;
}

echo "Nilai: $nilai, Keterangan: $keterangan";
?>