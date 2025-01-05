<?php
include "includes/config.php";
// Ambil id dari query string
$id = $_GET['id'];
// Buat query hapus
$query = "DELETE FROM tbl_minuman WHERE id_minuman=$id";
$sql = mysqli_query($conn, $query);
// Apakah query hapus berhasil?
if ($sql) {
    echo "<div class='container mt-4'>
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Data berhasil dihapus!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <script>
                setTimeout(function() {
                    window.location = '?page=minuman';
                }, 2000);
            </script>
          </div>";
} else {
    echo "<div class='container mt-4'>
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Data gagal dihapus!</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            <script>
                setTimeout(function() {
                    window.location = '?page=minuman';
                }, 2000);
            </script>
          </div>";
}
?>
<!-- Link ke Bootstrap 5.3 JS (jika belum ada) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
