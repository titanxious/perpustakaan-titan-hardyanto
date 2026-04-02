<?php
session_start();
include 'koneksi.php';

// proteksi user
if($_SESSION['role'] != 'user'){
    header("location:login.php");
}

// ambil data buku
$data = mysqli_query($koneksi, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }
        .navbar {
            background: #0d6efd;
        }
        .navbar a {
            color: white !important;
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar px-3">
    <span class="navbar-brand text-white">📚 Perpustakaan</span>
    <div class="ms-auto">
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-4">

    <h3 class="mb-3">📖 Daftar Buku</h3>

    <!-- CARD LIST -->
    <div class="row">
        <?php while($d = mysqli_fetch_assoc($data)){ ?>
            
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm p-3">
                    
                    <h5><?= $d['judul']; ?></h5>
                    <p class="mb-1"><b>Penulis:</b> <?= $d['penulis']; ?></p>
                    <p class="mb-1"><b>Tahun:</b> <?= $d['tahun']; ?></p>

                </div>
            </div>

        <?php } ?>
    </div>

</div>

</body>
</html>