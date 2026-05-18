<?php

include '../config/koneksi.php';

$user_id = $_POST['user_id'];

$bukti = $_FILES['bukti']['name'];
$tmp = $_FILES['bukti']['tmp_name'];

move_uploaded_file(
$tmp,
"../assets/uploads/".$bukti
);

$cek = mysqli_query($conn,

"SELECT * FROM daftar_ulang
WHERE user_id='$user_id'

");

if(mysqli_num_rows($cek) > 0){

mysqli_query($conn,

"UPDATE daftar_ulang SET
bukti_pembayaran='$bukti'
WHERE user_id='$user_id'

");

}else{

mysqli_query($conn,

"INSERT INTO daftar_ulang(
user_id,
bukti_pembayaran
)

VALUES(
'$user_id',
'$bukti'
)

");

}

header("Location: ../mahasiswa/dashboard.php");

?>