<?php
// Cek apakah tombol simpan sudah diklik atau belum
if (isset($_POST['submit'])) {
    // Mendapatkan dan membersihkan input
    $input_nama_makanan = inputData($_POST['nama_makanan']);
    $input_daerah_makanan = inputData($_POST['daerah_makanan']);
    
    // Menggunakan mysqli_real_escape_string untuk menghindari SQL Injection
    $nama_makanan = mysqli_real_escape_string($conn, $input_nama_makanan);
    $daerah_makanan = mysqli_real_escape_string($conn, $input_daerah_makanan);

    // Validasi field nama makanan
    if (empty($nama_makanan) || strlen($nama_makanan) == 0) {
        echo "<script>window.alert('Field nama makanan wajib diisi');window.location='?page=makananAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_makanan)) {
        echo "<script>window.alert('Hanya huruf dan spasi yang diperbolehkan pada nama makanan');window.location='?page=makananAdd'</script>";
    
    // Validasi field daerah makanan
    } elseif (empty($daerah_makanan) || strlen($daerah_makanan) == 0) {
        echo "<script>window.alert('Field daerah makanan wajib diisi');window.location='?page=makananAdd'</script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_makanan)) {
        echo "<script>window.alert('Hanya huruf dan spasi yang diperbolehkan pada daerah makanan');window.location='?page=makananAdd'</script>";
    } else {
        // Validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_makanan FROM tbl_makanan WHERE nama_makanan='$nama_makanan'"));
        if ($cek > 0) {
            echo "<script>window.alert('Data sudah tersedia');window.location='?page=makananAdd'</script>";
        } else {
            // Membuat query untuk memasukkan data
            $query = "INSERT INTO tbl_makanan (nama_makanan, daerah_makanan) VALUES ('$nama_makanan', '$daerah_makanan')";
            $sql = mysqli_query($conn, $query);

            // Mengecek apakah proses simpan berhasil
            if ($sql) {
                echo "<script>window.alert('Data berhasil ditambah!');window.location='?page=makanan';</script>";
            } else {
                echo "<script>window.alert('Gagal menambah data!');window.location='?page=makanan';</script>";
            }
        }
    }
}
?>
