<?php
include "config/database.php";

$jmlBuku = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM buku"));
$jmlKategori = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kategori"));
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Library Management System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="manifest" href="manifest.json">
</head>

<body>

<div class="container py-5">

    <div class="card dashboard-card">

        <div class="card-body p-5">

            <!-- Judul -->
            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    <i class="bi bi-book-half text-pink"></i>
                    Library Management System
                </h2>

                <p class="text-muted">
                    Selamat datang di Dashboard Perpustakaan
                </p>

            </div>

            <!-- Card Statistik -->
            <div class="row g-4">

                <!-- Jumlah Buku -->
                <div class="col-md-6">

                    <div class="card stat-card">

                        <div class="card-body text-center">

                            <div class="icon-circle mb-3">

                                <i class="bi bi-book fs-2"></i>

                            </div>

                            <h1><?= $jmlBuku ?></h1>

                            <p class="mb-0">
                                Jumlah Buku
                            </p>

                        </div>

                    </div>

                </div>

                <!-- Jumlah Kategori -->
                <div class="col-md-6">

                    <div class="card stat-card">

                        <div class="card-body text-center">

                            <div class="icon-circle mb-3">

                                <i class="bi bi-grid fs-2"></i>

                            </div>

                            <h1><?= $jmlKategori ?></h1>

                            <p class="mb-0">
                                Jumlah Kategori
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Tombol -->
            <div class="text-center mt-5">

                <a href="pages/buku.php" class="btn btn-pink">

                    <i class="bi bi-arrow-right-circle"></i>

                    Kelola Buku

                </a>

            </div>

        </div>

    </div>

</div>

<script src="sw-register.js"></script>
<script src="assets/js/notif.js"></script>

</body>

</html>