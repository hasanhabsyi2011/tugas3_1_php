<?php 

$jarak = 360;
$kec = 90;
$waktuJam = ($jarak/$kec);
$waktuMenit = ($waktuJam)*60;

echo "Jarak kota A - Z = ", $jarak, " Km <br>";
echo "Kecepatan motor = ", $kec, "<br>";
echo "Waktu tempuh = ? <br>";
echo "Jawaban: ", $waktuMenit, " Menit <br>";

 ?>