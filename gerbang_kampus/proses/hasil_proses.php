<?php

include '../config/koneksi.php';

$user_id = $_POST['user_id'];
$hasil = $_POST['hasil'];

$cek = mysqli_query($conn,

"SELECT * FROM hasil_seleksi
WHERE user_id='$user_id'

");

if(mysqli_num_rows($cek) > 0){

mysqli_query($conn,

"UPDATE hasil_seleksi SET
hasil='$hasil'
WHERE user_id='$user_id'

");

}else{

mysqli_query($conn,

"INSERT INTO hasil_seleksi(
user_id,
hasil
)

VALUES(
'$user_id',
'$hasil'
)

");

}

header("Location: ../admin/pengumuman.php");

?>