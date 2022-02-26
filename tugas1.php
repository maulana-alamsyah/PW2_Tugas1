#!/usr/bin/php

<?php

function cetak($nama, $nim, $kelas){
    echo "Nama: $nama\n";
    echo "NIM: $nim\n";
    echo "Kelas: $kelas\n";

};
$nama = $argv[1];
$nim = $argv[2];
$kelas = $argv[3];

cetak($nama, $nim, $kelas);
?>