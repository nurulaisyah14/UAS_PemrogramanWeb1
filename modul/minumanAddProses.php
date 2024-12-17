<?php
// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['submit'])) {
    // Mendapatkan dan membersihkan input
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    
    // Menggunakan mysqli_real_escape_string untuk menghindari SQL Injection
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // Validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>window.alert('Field nama minuman wajib diisi');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) {
        echo "<script>window.alert('Hanya huruf dan spasi yang diperbolehkan pada nama minuman');window.location='?page=minumanAdd'</script>";
    
    // Validasi field daerah minuman
    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        echo "<script>window.alert('Field daerah minuman wajib diisi');window.location='?page=minumanAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) {
        echo "<script>window.alert('Hanya huruf dan spasi yang diperbolehkan pada daerah minuman');window.location='?page=minumanAdd'</script>";
    } else {
        // Validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman='$nama_minuman'"));
        if ($cek > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=minumanAdd'</script>";
        } else {
            // Membuat query untuk memasukkan data
            $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUES ('$nama_minuman', '$daerah_minuman')";
            $sql = mysqli_query($conn, $query);

            // Mengecek apakah proses simpan berhasil
            if ($sql) {
                echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=minuman';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!');window.location='?page=minuman';</script>";
            }
        }
    }
}
?>
