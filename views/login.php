<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BOOTSTRAP 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            height: 100vh;
        }
        .login-card {
            border-radius: 15px;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center">

<div class="card login-card shadow p-4" style="width: 380px;">
    <h3 class="text-center mb-4">Login</h3>

    <form action="../controllers/c_user.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input 
                type="text" 
                name="username"
                class="form-control"
                placeholder="Masukkan username"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input 
                type="password" 
                name="password"
                class="form-control"
                placeholder="Masukkan password"
                required
            >
        </div>

        <button type="submit" name="login" class="btn btn-primary w-100">
            Login
        </button>

        <p class="text-center mt-3">
            Belum punya akun? <a href="#">Daftar</a>
        </p>
    </form>
</div>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>