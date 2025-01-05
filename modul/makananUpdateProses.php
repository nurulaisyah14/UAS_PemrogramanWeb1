<?php
// Skrip Proses Update
// Cek apakah tombol update sudah diklik atau belum
if (isset($_POST['update'])) {
    // Ambil data dari form
    $id = $_POST['id'];
    $input_nama_makanan = inputData($_POST['nama_makanan']);
    $input_daerah_makanan = inputData($_POST['daerah_makanan']);
    
    // Menggunakan mysqli_real_escape_string untuk menghindari SQL Injection
    $nama_makanan = mysqli_real_escape_string($conn, $input_nama_makanan);
    $daerah_makanan = mysqli_real_escape_string($conn, $input_daerah_makanan);

    // Validasi field nama makanan
    if (empty($nama_makanan) || strlen($nama_makanan) == 0) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Field nama makanan wajib diisi.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_makanan)) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Hanya huruf dan spasi yang diperbolehkan pada nama makanan.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    
    // Validasi field daerah makanan
    } elseif (empty($daerah_makanan) || strlen($daerah_makanan) == 0) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Field daerah makanan wajib diisi.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_makanan)) {
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                Hanya huruf dan spasi yang diperbolehkan pada daerah makanan.
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
    } else {
        // Query untuk update data makanan
        $query = "UPDATE tbl_makanan 
                  SET nama_makanan='$nama_makanan', daerah_makanan='$daerah_makanan' 
                  WHERE id_makanan='$id'";

        $sql = mysqli_query($conn, $query);

        // Cek apakah proses update berhasil
        if ($sql) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                    Data berhasil diupdate!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
            echo "<script>window.location='?page=makanan';</script>";
        } else {
            echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    Gagal update data!
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
            echo "<script>window.location='?page=makanan';</script>";
        }
    }
}
?>

<!-- Tambahkan link ke Bootstrap 5.3 CSS dan JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
