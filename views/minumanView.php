<style>
  /* Mengatur background halaman dengan warna pink */
  body {
    background-color: #ffb6c1; /* Background warna pink muda */
    font-family: 'Poppins', sans-serif; /* Font modern */
    margin: 0;
    padding: 0;
  }

  /* Styling untuk card */
  .card {
    background-color: #fce8e6; /* Warna pink lembut untuk card */
    border-color: #f5c6cb; /* Border card dengan warna pink lebih gelap */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Efek bayangan ringan */
  }

  /* Styling card header */
  .card-header {
    background-color: #ff69b4; /* Warna pink cerah untuk header */
    color: white; /* Warna teks putih */
    text-align: center;
    font-weight: bold;
  }

  /* Styling card body */
  .card-body {
    background-color: #fff0f5; /* Latar belakang card-body dengan pink muda */
    padding: 20px;
  }

  /* Tombol Tambah Minuman */
  .btn-success {
    background-color: #28a745; /* Warna hijau untuk tombol tambah */
    border-color: #28a745;
  }

  /* Styling tombol kecil */
  .btn-sm {
    font-size: 0.875rem; /* Ukuran font tombol lebih kecil */
  }

  /* Styling tabel */
  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    padding: 10px;
    text-align: center;
    border: 1px solid #f5c6cb; /* Border tabel dengan warna pink */
  }

  th {
    background-color: #ffb6c1; /* Warna pink muda untuk header tabel */
    color: #721c24; /* Warna teks header tabel */
  }

  td {
    background-color: #fff; /* Latar belakang putih untuk data tabel */
  }

  /* Tombol update dan delete */
  .btn-warning {
    background-color: #ffc107; /* Warna kuning untuk tombol update */
    border-color: #ffc107;
  }

  .btn-danger {
    background-color: #dc3545; /* Warna merah untuk tombol delete */
    border-color: #dc3545;
  }

  .btn:hover {
    opacity: 0.8; /* Efek hover untuk tombol */
  }
</style>

<div class="card border-info">
  <div class="card-header text-center fw-bold">
    Daftar Minuman Tradisional
  </div>
  <div class="card-body">
    <!-- Tombol Tambah Minuman -->
    <div class="mb-3 text-end">
      <a href="?page=minumanAdd" class="btn btn-sm btn-success">
        Tambah Minuman
      </a>
    </div>

    <!-- Tabel Data Minuman -->
    <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th class="text-center">No.</th>
          <th>Nama Minuman</th>
          <th>Asal Daerah</th>
          <th class="text-center">Foto</th>
          <th>Keterangan</th>
          <th class="text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM tbl_minuman ORDER BY id_minuman ASC";
        $sql = mysqli_query($conn, $query);
        $nomor = 1;
        foreach ($sql as $val) { ?>
        <tr>
          <td class="text-center"><?= htmlspecialchars($nomor++); ?></td>
          <td><?= htmlspecialchars($val['nama_minuman']); ?></td>
          <td><?= htmlspecialchars($val['daerah_minuman']); ?></td>
          <td class="text-center">
            <img src="assets/images/cendol.jpg" alt="<?= htmlspecialchars($val['nama_minuman']); ?>" width="75"
              height="75">
          </td>
          <td><?= htmlspecialchars($val['keterangan']); ?></td>
          <td class="text-center">
            <a href="?page=minumanUpdate&id=<?= urlencode($val['id_minuman']); ?>" class="btn btn-sm btn-warning">
              Update
            </a>
            <a href="?page=minumanDelete&id=<?= urlencode($val['id_minuman']); ?>" class="btn btn-sm btn-danger"
              onclick="return confirm('Yakin ingin menghapus data ini?');">
              Hapus
            </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
