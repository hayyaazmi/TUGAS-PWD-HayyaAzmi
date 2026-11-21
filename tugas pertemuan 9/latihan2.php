<?php

$mahasiswa = [
    ["npm" => "001", "nama" => "Hayya", "nilai" => 80],
    ["npm" => "002", "nama" => "Azmi", "nilai" => 75],
    ["npm" => "003", "nama" => "Septya", "nilai" => 50],
    ["npm" => "004", "nama" => "Noor", "nilai" => 90],
];

function cekLulus($nilai){
    if($nilai <= 50){
        return "Tidak Lulus";
    } else{
        return "Lulus";
    }
}