<?php
$nilai = 85; // example score

if ($nilai >= 90 && $nilai <= 100) {
    $keterangan = "Baik Sekali";
} elseif ($nilai >= 76 && $nilai <= 89) {
    $keterangan = "Baik";
} elseif ($nilai >= 60 && $nilai <= 75) {
    $keterangan = "Cukup";
} elseif ($nilai >= 50 && $nilai <= 59) {
    $keterangan = "Hampir Cukup";
} else {
    $keterangan = "Kurang";
}

echo "Nilai: $nilai, Keterangan: $keterangan";
?>