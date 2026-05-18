<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<div class="container">

<div class="row justify-content-center align-items-center vh-100">

<div class="col-lg-5">

<div class="card shadow border-0 rounded-4 p-4">

<h2 class="text-center mb-4">
Register Mahasiswa
</h2>

<form action="proses/register-proses.php" method="POST">

<div class="mb-3">

<label>Nama Lengkap</label>

<input type="text"
name="nama"
class="form-control"
required>

</div>

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
class="btn btn-primary w-100">

Daftar

</button>

</form>

<div class="text-center mt-3">

Sudah punya akun?
<a href="login.php">
Login
</a>

</div>

</div>

</div>

</div>

</div>

</body>
</html>