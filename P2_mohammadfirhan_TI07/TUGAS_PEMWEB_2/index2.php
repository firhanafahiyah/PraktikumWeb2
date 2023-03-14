<?php

if(isset($_GET['submit'])) {

    $_nama = $_GET['nama'];
    $_matkul = $_GET['matkul'];
    $_uts = $_GET['uts'];
    $_uas = $_GET['uas'];
    $_tugas =$_GET['tugas'];


    if ($nilai_rata <= 35) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS  : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/praktikum : $tugas <br>";
        echo "Nilai Rata-rata : " . round($nilai_rata ,2) . "<br>";
        echo "Grade Nilai : E <br>";
        echo "Predikat Nilai : Sangat Kurang";
    } elseif ($nilai_rata <= 55) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/praktikum : $tugas <br>";
        echo "Nilai Rata-rata : " . round($nilai_rata ,2) . "<br>";
        echo "Grade Nilai : D <br>";
        echo "Predikat Nilai : Kurang";
    } elseif ($nilai_rata <= 69) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/praktikum : $tugas <br>";
        echo "Nilai Rata-rata : " . round($nilai_rata ,2) . "<br>";
        echo "Grade Nilai : C <br>";
        echo "Predikat Nilai : Cukup";
    } elseif ($nilai_rata <= 84) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/praktikum : $tugas <br>";
        echo "Nilai Rata-rata : " . round($nilai_rata ,2) . "<br>";
        echo "Grade Nilai : B <br>";
        echo "Predikat Nilai : Memuaskan";
    } elseif ($nilai_rata <= 100) {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/praktikum : $tugas <br>";
        echo "Nilai Rata-rata : " . round($nilai_rata ,2) . "<br>";
        echo "Grade Nilai : A <br>";
        echo "Predikat Nilai : Sangat Memuaskan";
    } else {
        echo "Nama : $nama <br>";
        echo "Mata Kuliah : $matkul <br>";
        echo "Nilai UTS : $uts <br>";
        echo "Nilai UAS : $uas <br>";
        echo "Nilai Tugas/praktikum : $tugas <br>";
        echo "Nilai Rata-rata : " . round($nilai_rata ,2) . "<br>";
        echo "Grade Nilai : I <br>";
        echo "Predikat Nilai : Tidak Ada";
    }
}