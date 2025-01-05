<!-- Tambahkan link ke Bootstrap 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center">
            <u>Tambah Data Daftar Minuman</u>
        </div>
        <div class="card-body">
            <form method="post" action="?page=minumanAddProses">
                <div class="mb-3 row">
                    <label for="nama_minuman" class="col-sm-3 col-form-label">Nama Minuman</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_minuman" id="nama_minuman" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="daerah_minuman" class="col-sm-3 col-form-label">Daerah Minuman</label>
                    <div class="col-sm-9">
                        <input type="text" name="daerah_minuman" id="daerah_minuman" class="form-control" required>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-danger" onClick="document.location='?page=minuman'">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tambahkan link ke Bootstrap 5.3 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
