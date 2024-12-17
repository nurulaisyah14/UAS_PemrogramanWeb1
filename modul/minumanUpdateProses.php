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
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);

    // Escape input untuk menghindari SQL Injection
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // Validasi Input
    if (empty($nama_minuman)) {
        echo "<script>alert('Nama minuman harus diisi!'); window.location='?page=minuman';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) {
        echo "<script>alert('Nama minuman hanya boleh berisi huruf dan spasi!'); window.location='?page=minuman';</script>";
    } elseif (empty($daerah_minuman)) {
        echo "<script>alert('Daerah minuman harus diisi!'); window.location='?page=minuman';</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) {
        echo "<script>alert('Daerah minuman hanya boleh berisi huruf dan spasi!'); window.location='?page=minuman';</script>";
    } else {
        // Query Update
        $query = "UPDATE tbl_minuman SET nama_minuman='$nama_minuman', daerah_minuman='$daerah_minuman' WHERE id_minuman='$id'";
        $sql = mysqli_query($conn, $query);

        // Cek apakah proses update berhasil
        if ($sql) {
            echo "<script>alert('Data berhasil diupdate!'); window.location='?page=minuman';</script>";
        } else {
            echo "<script>alert('Gagal mengupdate data!'); window.location='?page=minuman';</script>";
        }
    }
}
?>
