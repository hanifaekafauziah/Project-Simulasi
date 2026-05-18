<?php
include '../config/session.php';
include '../config/koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Mahasiswa</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="../assets/css/style.css">

<style>

body{
    background:#f5f7fb;
}

.dashboard-title{
    font-weight:700;
    color:#0B1F4D;
}

.card{
    transition:0.3s;
    border:none;
}

.card:hover{
    transform:translateY(-8px);
}

.icon-box{
    width:80px;
    height:80px;
    margin:auto;
    border-radius:20px;
    display:flex;
    justify-content:center;
    align-items:center;
}

.bg-primary-soft{
    background:rgba(13,110,253,0.1);
}

.bg-success-soft{
    background:rgba(25,135,84,0.1);
}

.bg-warning-soft{
    background:rgba(255,193,7,0.1);
}

.bg-danger-soft{
    background:rgba(220,53,69,0.1);
}

.bg-dark-soft{
    background:rgba(33,37,41,0.1);
}

.bg-info-soft{
    background:rgba(13,202,240,0.1);
}

.hero-box{
    background:linear-gradient(
    135deg,
    #0B1F4D,
    #123A8F
    );

    border-radius:30px;
    color:white;
    padding:50px;
}

</style>

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

<div class="container">

<a class="navbar-brand fw-bold">
<i class="fa-solid fa-graduation-cap"></i>
Gerbang Kampus
</a>

<div>

<a href="../logout.php"
class="btn btn-danger rounded-pill px-4">

Logout

</a>

</div>

</div>

</nav>

<!-- Content -->

<div class="container py-5">

<!-- Hero -->

<div class="hero-box mb-5">

<div class="row align-items-center">

<div class="col-lg-8">

<h1 class="fw-bold mb-3">

Selamat Datang,
<?= $_SESSION['nama']; ?> 👋

</h1>

<p class="mb-0">

Sistem informasi penerimaan mahasiswa baru modern
untuk mempermudah proses pendaftaran,
upload berkas, pengumuman,
hingga daftar ulang mahasiswa.

</p>

</div>

<div class="col-lg-4 text-center">

<i class="fa-solid fa-user-graduate"
style="font-size:120px;"></i>

</div>

</div>

</div>

<!-- Menu Dashboard -->

<div class="row g-4">

<!-- Profile -->

<div class="col-lg-4 col-md-6">

<div class="card shadow rounded-4 p-4 text-center h-100">

<div class="icon-box bg-dark-soft mb-4">

<i class="fa-solid fa-user
fa-2x text-dark"></i>

</div>

<h5 class="fw-bold">
Profile
</h5>

<p class="text-secondary">

Kelola data profile mahasiswa.

</p>

<a href="profile.php"
class="btn btn-dark rounded-pill mt-2">

Buka Profile

</a>

</div>

</div>

<!-- Pendaftaran -->

<div class="col-lg-4 col-md-6">

<div class="card shadow rounded-4 p-4 text-center h-100">

<div class="icon-box bg-primary-soft mb-4">

<i class="fa-solid fa-file-lines
fa-2x text-primary"></i>

</div>

<h5 class="fw-bold">
Pendaftaran
</h5>

<p class="text-secondary">

Lengkapi data formulir pendaftaran mahasiswa.

</p>

<a href="pendaftaran.php"
class="btn btn-primary rounded-pill mt-2">

Isi Form

</a>

</div>

</div>

<!-- Upload -->

<div class="col-lg-4 col-md-6">

<div class="card shadow rounded-4 p-4 text-center h-100">

<div class="icon-box bg-success-soft mb-4">

<i class="fa-solid fa-upload
fa-2x text-success"></i>

</div>

<h5 class="fw-bold">
Upload Berkas
</h5>

<p class="text-secondary">

Upload dokumen persyaratan pendaftaran.

</p>

<a href="upload_berkas.php"
class="btn btn-success rounded-pill mt-2">

Upload

</a>

</div>

</div>

<!-- Hasil -->

<div class="col-lg-4 col-md-6">

<div class="card shadow rounded-4 p-4 text-center h-100">

<div class="icon-box bg-warning-soft mb-4">

<i class="fa-solid fa-bullhorn
fa-2x text-warning"></i>

</div>

<h5 class="fw-bold">
Hasil Seleksi
</h5>

<p class="text-secondary">

Lihat hasil seleksi penerimaan mahasiswa.

</p>

<a href="hasil.php"
class="btn btn-warning rounded-pill mt-2">

Lihat Hasil

</a>

</div>

</div>

<!-- Daftar Ulang -->

<div class="col-lg-4 col-md-6">

<div class="card shadow rounded-4 p-4 text-center h-100">

<div class="icon-box bg-info-soft mb-4">

<i class="fa-solid fa-money-bill-wave
fa-2x text-info"></i>

</div>

<h5 class="fw-bold">
Daftar Ulang
</h5>

<p class="text-secondary">

Upload bukti pembayaran daftar ulang.

</p>

<a href="daftar_ulang.php"
class="btn btn-info rounded-pill mt-2">

Daftar Ulang

</a>

</div>

</div>

<!-- Ospek -->

<div class="col-lg-4 col-md-6">

<div class="card shadow rounded-4 p-4 text-center h-100">

<div class="icon-box bg-danger-soft mb-4">

<i class="fa-solid fa-users
fa-2x text-danger"></i>

</div>

<h5 class="fw-bold">
Ospek
</h5>

<p class="text-secondary">

Informasi orientasi mahasiswa baru.

</p>

<a href="ospek.php"
class="btn btn-danger rounded-pill mt-2">

Lihat Info

</a>

</div>

</div>

</div>

</div>

</body>
</html>