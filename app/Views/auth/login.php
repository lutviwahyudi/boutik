<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 500px;">
<h3 class="text-center mb-4">Login</h3>


<?php if(session()->getFlashdata('error')): ?>
<div class="alert alert-danger"> <?= session()->getFlashdata('error') ?> </div>
<?php endif; ?>


<form action="/loginPost" method="post">
<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>


<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>


<button class="btn btn-primary w-100">Login</button>
</form>


<p class="text-center mt-3">Belum punya akun? <a href="/register">Register</a></p>
</div>
</body>
</html>