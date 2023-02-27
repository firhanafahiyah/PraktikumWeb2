<?php
$jam = 23;

echo "saat ini pukul: $jam <br>";

$hasil = $jam < 12;

if($hasil){
    echo "selamat pagi!";
}elseif ($jam < 18) {
    echo "selamat sore!";
}else {
    echo "selamat malam!";
}