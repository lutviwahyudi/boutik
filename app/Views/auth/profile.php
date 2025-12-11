<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5" style="max-width: 600px;">
<h3 class="text-center mb-4">Profile</h3>


<div class="card p-4 shadow-sm">
<p><strong>Nama:</strong> <?= $user['name'] ?></p>
<p><strong>Email:</strong> <?= $user['email'] ?></p>


<a href="/logout" class="btn btn-danger w-100 mt-3">Logout</a>
</div>
</div>
</body>
</html>