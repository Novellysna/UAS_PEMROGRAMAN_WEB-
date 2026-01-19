<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SIM Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        /* CSS Utama untuk menengahkan konten */
        body {
            background: #f0f2f5;
            height: 100vh; /* Mengambil 100% tinggi layar */
            display: flex;
            align-items: center; /* Tengah secara vertikal */
            justify-content: center; /* Tengah secara horizontal */
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .card-login {
            border: none;
            border-radius: 20px;
            width: 100%;
            max-width: 400px; /* Lebar maksimal kotak login */
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            overflow: hidden;
            background: #fff;
        }

        .login-header {
            background: #0d6efd;
            padding: 30px;
            color: white;
            text-align: center;
        }

        .btn-login {
            border-radius: 10px;
            padding: 12px;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3);
        }

        .input-group-text {
            border-right: none;
            background-color: #f8f9fa;
        }

        .form-control {
            border-left: none;
            background-color: #f8f9fa;
        }

        .form-control:focus {
            box-shadow: none;
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card card-login">
        <div class="login-header">
            <i class="fas fa-user-shield fa-3x mb-3"></i>
            <h4 class="fw-bold mb-0">Admin Panel</h4>
            <small class="opacity-75">Sistem Informasi Mahasiswa</small>
        </div>

        <div class="card-body p-4">
            <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "<div class='alert alert-danger text-center small py-2 border-0 mb-3'>Username/Password Salah!</div>";
                } else if($_GET['pesan'] == "logout"){
                    echo "<div class='alert alert-success text-center small py-2 border-0 mb-3'>Berhasil Logout.</div>";
                } else if($_GET['pesan'] == "belum_login"){
                    echo "<div class='alert alert-warning text-center small py-2 border-0 mb-3'>Silakan Login Terlebih Dahulu.</div>";
                }
            }
            ?>

            <form action="controller/auth_login.php" method="POST">
                <div class="mb-3">
                    <label class="form-label small fw-bold text-muted">USERNAME</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-user text-primary"></i></span>
                        <input type="text" name="username" class="form-control" placeholder="admin" required>
                    </div>
                </div>
                
                <div class="mb-4">
                    <label class="form-label small fw-bold text-muted">PASSWORD</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-lock text-primary"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-login">
                        LOGIN <i class="fas fa-arrow-right ms-2"></i>
                    </button>
                </div>
            </form>
            
            <div class="text-center mt-4">
                <small class="text-muted">UAS Pemrograman Web &copy; 2026</small>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>