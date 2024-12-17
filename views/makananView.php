<style>
  body {
    background-color: #ffe4e1; /* Background warna pink soft */
    font-family: 'Poppins', sans-serif; /* Font yang lebih modern */
    color: #333;
  }

  /* Card Styling */
  .card {
    border-radius: 10px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  }

  .card-header {
    background: linear-gradient(to right, #ff7eb3, #ff758c); /* Gradasi warna pink */
    color: white;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    padding: 15px;
    animation: move-text 2s infinite ease-in-out; /* Animasi bergerak */
    border-radius: 10px 10px 0 0;
  }

  .card-body {
    background-color: #fff; /* Latar belakang putih agar lebih kontras */
    padding: 20px;
    border-radius: 0 0 10px 10px;
  }

  .btn {
    transition: transform 0.3s ease, background-color 0.3s ease;
  }

  .btn:hover {
    transform: scale(1.05);
    background-color: #ff69b4; /* Warna tombol berubah saat hover */
  }

  /* Styling untuk tombol-tombol dalam card */
  .btn-success {
    background-color: #4caf50;
    color: white;
  }

  .btn-warning {
    background-color: #ff9800;
    color: white;
  }

  .btn-danger {
    background-color: #f44336;
    color: white;
  }

  .text-end {
    margin-bottom: 20px;
  }

  /* Tabel Styling */
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th, td {
    padding: 12px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #ff7eb3;
    color: white;
  }

  td img {
    border-radius: 5px;
  }

  /* Animasi untuk teks card-header */
  @keyframes move-text {
    0% {
      transform: translateX(0);
    }
    50% {
      transform: translateX(10px);
    }
    100% {
      transform: translateX(0);
    }
  }

  /* Responsiveness */
  @media (max-width: 768px) {
    .card-header {
      font-size: 1.2rem;
    }

    th, td {
      font-size: 0.9rem;
      padding: 8px;
    }
  }
</style>

<div class="card border-info">
  <div class="card-header text-center fw-bold bg-info">
    Daftar Makanan Tradisional
  </div>
  <div class="card-body">
    <!-- Tombol Tambah Makanan -->
    <div class="mb-3 text-end">
      <a href="?page=minumanAdd" class="btn btn-sm btn-success">
        Tambah Makanan
      </a>
    </div>

    <!-- Tabel Data Makanan -->
    <table id="example" class="display">
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
            <img src="assets/images/cendol.jpg" alt="<?= htmlspecialchars($val['nama_minuman']); ?>" width="75" height="75">
          </td>
          <td><?= htmlspecialchars($val['keterangan']); ?></td>
          <td class="text-center">
            <a href="?page=minumanUpdate&id=<?= urlencode($val['id_minuman']); ?>" class="btn btn-sm btn-warning">
              Update
            </a>
            <a href="?page=minumanDelete&id=<?= urlencode($val['id_minuman']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?');">
              Hapus
            </a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
