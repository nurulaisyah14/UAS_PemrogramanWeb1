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
        echo "<script>
                window.alert('Field nama makanan wajib diisi');
                window.location='?page=makanan';
              </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_makanan)) {
        echo "<script>
                window.alert('Hanya huruf dan spasi yang diperbolehkan pada nama makanan');
                window.location='?page=makanan';
              </script>";
    // Validasi field daerah makanan
    } elseif (empty($daerah_makanan) || strlen($daerah_makanan) == 0) {
        echo "<script>
                window.alert('Field daerah makanan wajib diisi');
                window.location='?page=makanan';
              </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_makanan)) {
        echo "<script>
                window.alert('Hanya huruf dan spasi yang diperbolehkan pada daerah makanan');
                window.location='?page=makanan';
              </script>";
    } else {
        // Query untuk update data makanan
        $query = "UPDATE tbl_makanan 
                  SET nama_makanan='$nama_makanan', daerah_makanan='$daerah_makanan' 
                  WHERE id_makanan='$id'";

        $sql = mysqli_query($conn, $query);

        // Cek apakah proses update berhasil
        if ($sql) {
            echo "<script>
                    window.alert('Data berhasil diupdate!');
                    window.location='?page=makanan';
                  </script>";
        } else {
            echo "<script>
                    window.alert('Gagal update data!');
                    window.location='?page=makanan';
                  </script>";
        }
    }
}
?>
