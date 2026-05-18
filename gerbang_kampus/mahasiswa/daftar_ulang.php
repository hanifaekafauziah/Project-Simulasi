<?php
include '../config/session.php';
include '../config/koneksi.php';

$id = $_SESSION['id'];

$data = mysqli_query($conn,

"SELECT * FROM hasil_seleksi
WHERE user_id='$id'

");

$hasil = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Daftar Ulang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<div class="col-lg-7 mx-auto">

<div class="card shadow border-0 rounded-4 p-5">

<h2 class="mb-4">
Daftar Ulang Mahasiswa
</h2>

<?php if($hasil && $hasil['hasil'] == 'lulus') : ?>

<div class="alert alert-success">

Anda dinyatakan lulus.
Silakan lakukan daftar ulang.

</div>

<form action="../proses/daftar-ulang-proses.php"
method="POST"
enctype="multipart/form-data">

<input type="hidden"
name="user_id"
value="<?= $_SESSION['id']; ?>">

<div class="mb-3">

<label>Upload Bukti Pembayaran</label>

<input type="file"
name="bukti"
class="form-control"
required>

</div>

<button type="submit"
class="btn btn-primary">

Kirim Bukti Pembayaran

</button>

</form>

<?php else : ?>

<div class="alert alert-danger">

Anda belum bisa melakukan daftar ulang.

</div>

<?php endif; ?>

</div>

</div>

</div>

</body>
</html>