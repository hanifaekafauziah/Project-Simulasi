<?php

include '../config/koneksi.php';

$user_id = $_POST['user_id'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$sekolah = $_POST['sekolah_asal'];
$jurusan = $_POST['jurusan'];

$cek = mysqli_query($conn,
"SELECT * FROM pendaftaran
WHERE user_id='$user_id'");

if(mysqli_num_rows($cek) > 0){

mysqli_query($conn,

"UPDATE pendaftaran SET
nik='$nik',
alamat='$alamat',
sekolah_asal='$sekolah',
jurusan='$jurusan'
WHERE user_id='$user_id'

");

}else{

mysqli_query($conn,

"INSERT INTO pendaftaran(
user_id,
nik,
alamat,
sekolah_asal,
jurusan
)

VALUES(
'$user_id',
'$nik',
'$alamat',
'$sekolah',
'$jurusan'
)

");

}

header("Location: ../mahasiswa/dashboard.php");

?>