<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "gerbang_kampus"
);

if(!$conn){
    die("Koneksi database gagal");
}

?>