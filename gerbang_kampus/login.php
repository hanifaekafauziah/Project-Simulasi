<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = md5($_POST['password']);

$cek = mysqli_query($conn,

"SELECT * FROM users
WHERE email='$email'
AND password='$password'

");

if(mysqli_num_rows($cek) > 0){

$data = mysqli_fetch_assoc($cek);

$_SESSION['login'] = true;
$_SESSION['id'] = $data['id'];
$_SESSION['nama'] = $data['nama'];
$_SESSION['role'] = $data['role'];

if($data['role'] == 'admin'){

header("Location: admin/dashboard.php");

}else{

header("Location: mahasiswa/dashboard.php");

}

}else{

echo "
<script>
alert('Login gagal');
</script>
";

}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="container">

<div class="row justify-content-center align-items-center vh-100">

<div class="col-lg-4">

<div class="card shadow border-0 rounded-4 p-4">

<h2 class="text-center mb-4">
Login
</h2>

<form method="POST">

<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control"
required>

</div>

<div class="mb-3">

<label>Password</label>

<input type="password"
name="password"
class="form-control"
required>

</div>

<button type="submit"
name="login"
class="btn btn-primary w-100">

Login

</button>

</form>

<div class="text-center mt-3">

Belum punya akun?
<a href="register.php">
Register
</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>