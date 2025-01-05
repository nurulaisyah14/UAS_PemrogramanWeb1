<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
    die("data tidak ditemukan...");
}
?>
<!-- Tambahkan link ke Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <u>Update Data Daftar Makanan</u>
        </div>
        <div class="card-body">
            <form method="post" action="?page=makananUpdateProses">
                <!-- menampung nilai id yang akan di edit -->
                <input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
                
                <div class="mb-3 row">
                    <label for="nama_makanan" class="col-sm-3 col-form-label">Nama Makanan</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_makanan" id="nama_makanan" class="form-control" 
                               value="<?= $data['nama_makanan'] ?>" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="daerah_makanan" class="col-sm-3 col-form-label">Daerah Makanan</label>
                    <div class="col-sm-9">
                        <input type="text" name="daerah_makanan" id="daerah_makanan" class="form-control" 
                               value="<?= $data['daerah_makanan'] ?>" required>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-secondary" onClick="document.location='?page=makanan'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tambahkan link ke Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
