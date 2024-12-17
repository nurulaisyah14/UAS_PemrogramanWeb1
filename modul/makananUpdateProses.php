<?php
// Fungsi untuk membersihkan input
function inputData($data) {
    $data = trim($data);                // Menghapus spasi di awal/akhir
    $data = stripslashes($data);        // Menghapus backslashes
    $data = htmlspecialchars($data);    // Menghindari XSS
    return $data;
}

// Proses Update
if (isset($_POST['update'])) {
    // Ambil nilai input
    $id = $_POST['id'];
    $input_nama_makanan = inputData($_POST['nama_makanan']);
    $input_daerah_makanan = inputData($_POST['daerah_makanan']);

    // Escape input untuk menghindari SQL Injection
    $nama_makanan = mysqli_real_escape_string($conn, $input_nama_makanan);
    $daerah_makanan = mysqli_real_escape_string($conn, $input_daerah_makanan);

    // Validasi Input
    if (empty($nama_makanan)) {
        echo "<script>alert('Nama makanan harus diisi!'); window.location='?page=makanan';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_makanan)) {
        echo "<script>alert('Nama makanan hanya boleh berisi huruf dan spasi!'); window.location='?page=makanan';</script>";
    } elseif (empty($daerah_makanan)) {
        echo "<script>alert('Daerah makanan harus diisi!'); window.location='?page=makanan';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_makanan)) {
        echo "<script>alert('Daerah makanan hanya boleh berisi huruf dan spasi!'); window.location='?page=makanan';</script>";
    } else {
        // Query Update
        $query = "UPDATE tbl_makanan SET nama_makanan='$nama_makanan', daerah_makanan='$daerah_makanan' WHERE id_makanan='$id'";
        $sql = mysqli_query($conn, $query);

        // Cek apakah proses update berhasil
        if ($sql) {
            echo "<script>alert('Data berhasil diupdate!'); window.location='?page=makanan';</script>";
        } else {
            echo "<script>alert('Gagal mengupdate data!'); window.location='?page=makanan';</script>";
        }
    }
}
?>
