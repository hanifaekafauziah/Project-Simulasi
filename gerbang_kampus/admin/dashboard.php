<?php
include '../config/session.php';
include '../config/koneksi.php';

/*
|--------------------------------------------------------------------------
| STATISTIK DASHBOARD
|--------------------------------------------------------------------------
*/

$mahasiswa = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM users
WHERE role='mahasiswa'")
);

$pendaftaran = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM pendaftaran")
);

$berkas = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM berkas")
);

$lulus = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM hasil_seleksi
WHERE hasil='lulus'")
);

$pending = mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM berkas
WHERE status='pending'")
);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet"
href="../assets/css/style.css">

<style>

body{
    background:#f5f7fb;
}

.sidebar{
    width:260px;
    height:100vh;
    position:fixed;
    background:#0B1F4D;
    padding:30px 20px;
    overflow:auto;
}

.sidebar .logo{
    color:white;
    font-size:24px;
    font-weight:700;
    margin-bottom:40px;
}

.sidebar a{
    display:block;
    color:#dbe4ff;
    text-decoration:none;
    padding:14px 18px;
    margin-bottom:10px;
    border-radius:14px;
    transition:0.3s;
}

.sidebar a:hover{
    background:#123A8F;
    color:white;
}

.main-content{
    margin-left:260px;
    padding:40px;
}

.stat-card{
    border:none;
    border-radius:25px;
    overflow:hidden;
    transition:0.3s;
}

.stat-card:hover{
    transform:translateY(-6px);
}

.icon-circle{
    width:70px;
    height:70px;
    border-radius:20px;
    display:flex;
    justify-content:center;
    align-items:center;
    margin-bottom:20px;
}

.bg-soft-primary{
    background:rgba(13,110,253,0.1);
}

.bg-soft-success{
    background:rgba(25,135,84,0.1);
}

.bg-soft-warning{
    background:rgba(255,193,7,0.15);
}

.bg-soft-danger{
    background:rgba(220,53,69,0.1);
}

.bg-soft-dark{
    background:rgba(33,37,41,0.1);
}

.hero-admin{
    background:linear-gradient(
    135deg,
    #0B1F4D,
    #123A8F
    );

    color:white;
    border-radius:30px;
    padding:40px;
}

.table-box{
    background:white;
    border-radius:25px;
    padding:30px;
}

</style>

</head>

<body>

<!-- Sidebar -->

<div class="sidebar">

<div class="logo">

<i class="fa-solid fa-graduation-cap"></i>
Admin Kampus

</div>

<a href="dashboard.php">

<i class="fa-solid fa-chart-line"></i>
Dashboard

</a>

<a href="data-mahasiswa.php">

<i class="fa-solid fa-users"></i>
Data Mahasiswa

</a>

<a href="verifikasi-berkas.php">

<i class="fa-solid fa-file-circle-check"></i>
Verifikasi Berkas

</a>

<a href="pengumuman.php">

<i class="fa-solid fa-bullhorn"></i>
Pengumuman

</a>

<a href="verifikasi-daftar-ulang.php">

<i class="fa-solid fa-money-check"></i>
Daftar Ulang

</a>

<a href="laporan.php">

<i class="fa-solid fa-file-lines"></i>
Laporan

</a>

<a href="../logout.php"
class="bg-danger text-white">

<i class="fa-solid fa-right-from-bracket"></i>
Logout

</a>

</div>

<!-- Main Content -->

<div class="main-content">

<!-- Hero -->

<div class="hero-admin mb-5">

<div class="row align-items-center">

<div class="col-lg-8">

<h1 class="fw-bold mb-3">

Dashboard Admin PMB

</h1>

<p class="mb-0">

Kelola seluruh data penerimaan mahasiswa baru,
verifikasi berkas, pengumuman seleksi,
hingga laporan mahasiswa secara modern
dan terintegrasi.

</p>

</div>

<div class="col-lg-4 text-center">

<i class="fa-solid fa-user-shield"
style="font-size:110px;"></i>

</div>

</div>

</div>

<!-- Statistik -->

<div class="row g-4 mb-5">

<!-- Mahasiswa -->

<div class="col-lg-4 col-md-6">

<div class="card stat-card shadow p-4 h-100">

<div class="icon-circle bg-soft-primary">

<i class="fa-solid fa-users
fa-2x text-primary"></i>

</div>

<h5>Total Mahasiswa</h5>

<h1 class="fw-bold">
<?= $mahasiswa; ?>
</h1>

</div>

</div>

<!-- Pendaftaran -->

<div class="col-lg-4 col-md-6">

<div class="card stat-card shadow p-4 h-100">

<div class="icon-circle bg-soft-success">

<i class="fa-solid fa-file-lines
fa-2x text-success"></i>

</div>

<h5>Total Pendaftaran</h5>

<h1 class="fw-bold">
<?= $pendaftaran; ?>
</h1>

</div>

</div>

<!-- Berkas -->

<div class="col-lg-4 col-md-6">

<div class="card stat-card shadow p-4 h-100">

<div class="icon-circle bg-soft-warning">

<i class="fa-solid fa-upload
fa-2x text-warning"></i>

</div>

<h5>Total Berkas</h5>

<h1 class="fw-bold">
<?= $berkas; ?>
</h1>

</div>

</div>

<!-- Lulus -->

<div class="col-lg-4 col-md-6">

<div class="card stat-card shadow p-4 h-100">

<div class="icon-circle bg-soft-primary">

<i class="fa-solid fa-circle-check
fa-2x text-primary"></i>

</div>

<h5>Mahasiswa Lulus</h5>

<h1 class="fw-bold">
<?= $lulus; ?>
</h1>

</div>

</div>

<!-- Pending -->

<div class="col-lg-4 col-md-6">

<div class="card stat-card shadow p-4 h-100">

<div class="icon-circle bg-soft-danger">

<i class="fa-solid fa-clock
fa-2x text-danger"></i>

</div>

<h5>Berkas Pending</h5>

<h1 class="fw-bold">
<?= $pending; ?>
</h1>

</div>

</div>

<!-- Admin -->

<div class="col-lg-4 col-md-6">

<div class="card stat-card shadow p-4 h-100">

<div class="icon-circle bg-soft-dark">

<i class="fa-solid fa-user-shield
fa-2x text-dark"></i>

</div>

<h5>Status Sistem</h5>

<h4 class="fw-bold text-success">
ACTIVE
</h4>

</div>

</div>

</div>

<!-- Quick Menu -->

<div class="table-box shadow">

<h4 class="fw-bold mb-4">
Quick Access Menu
</h4>

<div class="d-flex flex-wrap gap-3">

<a href="data-mahasiswa.php"
class="btn btn-primary rounded-pill px-4">

Data Mahasiswa

</a>

<a href="verifikasi-berkas.php"
class="btn btn-success rounded-pill px-4">

Verifikasi Berkas

</a>

<a href="pengumuman.php"
class="btn btn-warning rounded-pill px-4">

Pengumuman

</a>

<a href="verifikasi-daftar-ulang.php"
class="btn btn-info rounded-pill px-4">

Daftar Ulang

</a>

<a href="laporan.php"
class="btn btn-dark rounded-pill px-4">

Laporan

</a>

</div>

</div>

</div>

</body>
</html>