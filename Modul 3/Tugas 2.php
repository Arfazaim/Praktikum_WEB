<?php
/**
 * Calculate the area of a cone (alas, and surface area)
 *
 * @param float $r - Radius of the cone base
 * @param float $s - Slant height of the cone
 *
 * @return void
 */

// Constants
define("PI", 3.14159);

// User input
$r = 5; // Radius
$s = 10; // Slant height

// Calculate the area of the base
$luasAlas = PI * pow($r, 2);
echo "Luas alas kerucut adalah : " . $luasAlas . PHP_EOL;

// Calculate the total surface area
$luasPermukaan = PI * pow($r, 2) + PI * $r * $s;
echo "Luas permukaan kerucut adalah : " . $luasPermukaan;
?>