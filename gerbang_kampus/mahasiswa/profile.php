<?php
include '../config/session.php';
include '../config/koneksi.php';

$id = $_SESSION['id'];

$data = mysqli_query($conn,

"SELECT * FROM users
WHERE id='$id'

");

$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<div class="col-lg-6 mx-auto">

<div class="card shadow border-0 rounded-4 p-5">

<h2 class="mb-4">
Profile Mahasiswa
</h2>

<form method="POST"
action="../proses/profile-proses.php">

<input type="hidden"
name="id"
value="<?= $row['id']; ?>">

<div class="mb-3">

<label>Nama</label>

<input type="text"
name="nama"
class="form-control"
value="<?= $row['nama']; ?>">

</div>

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control"
value="<?= $row['email']; ?>">

</div>

<div class="mb-3">

<label>Password Baru</label>

<input type="password"
name="password"
class="form-control">

</div>

<button type="submit"
class="btn btn-primary">

Update Profile

</button>

</form>

</div>

</div>

</div>

</body>
</html>