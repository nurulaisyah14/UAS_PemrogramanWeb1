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
        echo "<div class='container mt-4'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Field nama minuman wajib diisi!</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                <script>
                    setTimeout(function() {
                        window.location = '?page=minumanAdd';
                    }, 2000);
                </script>
              </div>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $nama_minuman)) {
        echo "<div class='container mt-4'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Hanya huruf dan spasi yang diperbolehkan pada nama minuman!</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                <script>
                    setTimeout(function() {
                        window.location = '?page=minumanAdd';
                    }, 2000);
                </script>
              </div>";

    // Validasi field daerah minuman
    } elseif (empty($daerah_minuman) || strlen($daerah_minuman) == 0) {
        echo "<div class='container mt-4'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Field daerah minuman wajib diisi!</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                <script>
                    setTimeout(function() {
                        window.location = '?page=minumanAdd';
                    }, 2000);
                </script>
              </div>";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $daerah_minuman)) {
        echo "<div class='container mt-4'>
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                    <strong>Hanya huruf dan spasi yang diperbolehkan pada daerah minuman!</strong>
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                <script>
                    setTimeout(function() {
                        window.location = '?page=minumanAdd';
                    }, 2000);
                </script>
              </div>";
    } else {
        // Validasi duplikasi data
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT nama_minuman FROM tbl_minuman WHERE nama_minuman='$nama_minuman'"));
        if ($cek > 0) {
            echo "<div class='container mt-4'>
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong>Data sudah tersedia!</strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>
                    <script>
                        setTimeout(function() {
                            window.location = '?page=minumanAdd';
                        }, 2000);
                    </script>
                  </div>";
        } else {
            // Membuat query untuk memasukkan data
            $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUES ('$nama_minuman', '$daerah_minuman')";
            $sql = mysqli_query($conn, $query);

            // Mengecek apakah proses simpan berhasil
            if ($sql) {
                echo "<div class='container mt-4'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>Data berhasil ditambah!</strong>
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
                            <strong>Gagal menambah data!</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                        <script>
                            setTimeout(function() {
                                window.location = '?page=minuman';
                            }, 2000);
                        </script>
                      </div>";
            }
        }
    }
}
?>
<!-- Link ke Bootstrap 5.3 JS (jika belum ada) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

