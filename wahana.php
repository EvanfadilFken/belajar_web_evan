<?php
echo "<h2>Pengecekan Wahana Roller Coaster</h2>";

$umur = 16;
$tinggi_cm = 169;


if ($umur  >= 12 && $tinggi_cm  >= 145) {
    echo "<h3 style='color: green;'>Selamat, Anda Boleh Naik Wahana! (Umur: $umur tahun, Tinggi: $tinggi_cm cm)</h3>";
} else {
    echo "<h3 style='color: red;'>Maaf, Anda belum boleh naik wahana. (Umur: $umur tahun, Tinggi: $tinggi_cm cm)</h3>";
}
?>
