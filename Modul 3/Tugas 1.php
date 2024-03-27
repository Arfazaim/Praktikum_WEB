<?php
$saldoAwal = 2000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal+($saldoAwal * $bunga * $bulan);
$bulanan = $saldoAwal*$bunga;
echo "Bunga Bulanan Adalah : $bulanan<br>";
$totalbunga = ($saldoAwal*$bunga)*$bulan;
echo "Jadi Total Bunga Adalah : $totalbunga<br>";
echo "Saldo akhir setelah ".$bulan." bulan adalah : Rp. ".
$saldoAkhir. ",-";
?>