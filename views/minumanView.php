<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Minuman</title>

    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #ffe4e1; /* Background warna pink soft */
            font-family: 'Poppins', sans-serif; /* Font yang lebih modern */
            color: #333;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background: linear-gradient(to right, #ff7eb3, #ff758c); /* Gradasi warna pink */
            color: white;
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            padding: 15px;
            animation: move-text 2s infinite ease-in-out; /* Animasi bergerak */
            border-radius: 10px 10px 0 0;
        }

        .card-body {
            background-color: #fff; /* Latar belakang putih agar lebih kontras */
            padding: 20px;
            border-radius: 0 0 10px 10px;
        }

        .btn {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.05);
            background-color: #ff69b4; /* Warna tombol berubah saat hover */
        }

        /* Styling untuk tombol-tombol dalam card */
        .btn-success {
            background-color: #4caf50;
            color: white;
        }

        .btn-warning {
            background-color: #ff9800;
            color: white;
        }

        .btn-danger {
            background-color: #f44336;
            color: white;
        }

        .text-end {
            margin-bottom: 20px;
        }

        /* Tabel Styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ff7eb3;
            color: white;
        }

        td img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
            object-fit: cover;
        }

        td p {
            font-size: 1rem;
            color: #555;
            margin-top: 10px;
        }

        /* Animasi untuk teks card-header */
        @keyframes move-text {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(10px);
            }
            100% {
                transform: translateX(0);
            }
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .card-header {
                font-size: 1.2rem;
            }

            th, td {
                font-size: 0.9rem;
                padding: 8px;
            }

            td img {
                width: 80px;
                height: 80px;
            }
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h2 class="text-center mb-4">Data Minuman</h2>
    
    <!-- Tautan untuk menambah data baru -->
    <div class="mb-4 text-end">
        <a href="?page=minumanAdd" class="btn btn-primary">[+] Tambah Data Baru</a>
    </div>

    <!-- Tabel Daftar Minuman -->
    <div class="card">
        <div class="card-header">
            Daftar Minuman
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Minuman</th>
                        <th>Daerah Minuman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "includes/config.php";
                    $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
                    $sql = mysqli_query($conn, $query);
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= $data["nama_minuman"] ?></td>
                            <td><?= $data["daerah_minuman"] ?></td>
                            <td>
                                <p><?= $data["keterangan"] ?></p>
                            </td>
                            <td>
                                <a href="?page=minumanUpdate&id=<?= $data['id_minuman']; ?>" class="btn btn-warning btn-sm">Edit</a> |
                                <a href="?page=minumanDelete&id=<?= $data['id_minuman']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <!-- Total Data -->
            <p>Total: <?= mysqli_num_rows($sql) ?></p>
        </div>
    </div>
</div>

<!-- Bootstrap 5.3 JS and dependencies (Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
