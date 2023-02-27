<?php

// array index
$animals = ["macan", "kucing", "beruang", "ayam"];

// menambahkan data ke array
array_push($animals, "kambing");

// mengakses array index
var_dump $animals[2];

// Array assosiatif
$animal = [
    "nama" => $animals[1],
    "jenis" => "karnivora",
    "usia" => " 4 bulan"
];

// mengakses array assosiatif
echo $animal["jenis"];