<?php
include '../config/session.php';
include '../config/koneksi.php';

$id = $_SESSION['id'];

$data = mysqli_query($conn,

"SELECT * FROM hasil_seleksi
WHERE user_id='$id'

");

$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Hasil Seleksi</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<div class="col-lg-6 mx-auto">

<div class="card shadow border-0 rounded-4 p-5 text-center">

<h2 class="mb-4">
Hasil Seleksi
</h2>

<?php if($row) : ?>

<?php if($row['hasil'] == 'lulus') : ?>

<div class="alert alert-success">

<h3>
Selamat Anda Lulus 🎉
</h3>

</div>

<?php elseif($row['hasil'] == 'cadangan') : ?>

<div class="alert alert-warning">

<h3>
Anda Masuk Cadangan
</h3>

</div>

<?php else : ?>

<div class="alert alert-danger">

<h3>
Maaf Anda Tidak Lulus
</h3>

</div>

<?php endif; ?>

<?php else : ?>

<div class="alert alert-secondary">

Hasil seleksi belum tersedia

</div>

<?php endif; ?>

</div>

</div>

</div>

</body>
</html>