<?php

include '../config/koneksi.php';

$user_id = $_POST['user_id'];

$foto = $_FILES['foto']['name'];
$tmpFoto = $_FILES['foto']['tmp_name'];

$ijazah = $_FILES['ijazah']['name'];
$tmpIjazah = $_FILES['ijazah']['tmp_name'];

$rapor = $_FILES['rapor']['name'];
$tmpRapor = $_FILES['rapor']['tmp_name'];

$ktp = $_FILES['ktp']['name'];
$tmpKtp = $_FILES['ktp']['tmp_name'];

move_uploaded_file($tmpFoto,
"../assets/uploads/foto/".$foto);

move_uploaded_file($tmpIjazah,
"../assets/uploads/ijazah/".$ijazah);

move_uploaded_file($tmpRapor,
"../assets/uploads/rapor/".$rapor);

move_uploaded_file($tmpKtp,
"../assets/uploads/ktp/".$ktp);

$cek = mysqli_query($conn,
"SELECT * FROM berkas
WHERE user_id='$user_id'");

if(mysqli_num_rows($cek) > 0){

mysqli_query($conn,

"UPDATE berkas SET
foto='$foto',
ijazah='$ijazah',
rapor='$rapor',
ktp='$ktp'
WHERE user_id='$user_id'

");

}else{

mysqli_query($conn,

"INSERT INTO berkas(
user_id,
foto,
ijazah,
rapor,
ktp
)

VALUES(
'$user_id',
'$foto',
'$ijazah',
'$rapor',
'$ktp'
)

");

}

header("Location: ../mahasiswa/dashboard.php");

?>