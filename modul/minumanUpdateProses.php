<?php
// Skrip Proses Update untuk Minuman
// Cek apakah tombol update sudah diklik atau belum
if (isset($_POST['update'])) {
    // Ambil data dari form
    $id = $_POST['id'];
    $input_nama_minuman = inputData($_POST['nama_minuman']);
    $input_daerah_minuman = inputData($_POST['daerah_minuman']);
    
    // Menggunakan mysqli_real_escape_string untuk menghindari SQL Injection
    $nama_minuman = mysqli_real_escape_string($conn, $input_nama_minuman);
    $daerah_minuman = mysqli_real_escape_string($conn, $input_daerah_minuman);

    // Validasi field nama minuman
    if (empty($nama_minuman) || strlen($nama_minuman) == 0) {
        echo "<script>
                window.alert('Field nama minuman wajib diisi');
                window.location='?page=minuman';
              </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) {
        echo "<script>
                window.alert('Hanya huruf dan spasi yang diperbolehkan pada nama minuman');
                window.location='?page=minuman';
              </script>";
    // Validasi field daerah minuman
    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        echo "<script>
                window.alert('Field daerah minuman wajib diisi');
                window.location='?page=minuman';
              </script>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) {
        echo "<script>
                window.alert('Hanya huruf dan spasi yang diperbolehkan pada daerah minuman');
                window.location='?page=minuman';
              </script>";
    } else {
        // Query untuk update data minuman
        $query = "UPDATE tbl_minuman 
                  SET nama_minuman='$nama_minuman', daerah_minuman='$daerah_minuman' 
                  WHERE id_minuman='$id'";

        $sql = mysqli_query($conn, $query);

        // Cek apakah proses update berhasil
        if ($sql) {
            echo "<script>
                    window.alert('Data berhasil diupdate!');
                    window.location='?page=minuman';
                  </script>";
        } else {
            echo "<script>
                    window.alert('Gagal update data!');
                    window.location='?page=minuman';
                  </script>";
        }
    }
}
?>
