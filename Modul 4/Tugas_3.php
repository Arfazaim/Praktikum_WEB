<?php
$bulan = date('n'); // current month (1-12)

switch ($bulan) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        $jumlah_hari = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $jumlah_hari = 30;
        break;
    case 2:
        $jumlah_hari = (date('L') ? 29 : 28);
        break;
    default:
        $jumlah_hari = -1;
        break;
}

echo "Bulan: $bulan, Jumlah Hari: $jumlah_hari";
?>