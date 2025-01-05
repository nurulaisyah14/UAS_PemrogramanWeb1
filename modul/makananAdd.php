<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Daftar Makanan</title>
    <!-- Link ke Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJhoFiLL0D6EdD7nKAXis8ZrsrldOQ5h2v1nnm4+FLJbkkMb5Rb8l7MkJg/j" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h3 class="text-center mb-4"><u>Tambah Data Daftar Makanan</u></h3>
        <form method="post" action="?page=makananAddProses">
            <div class="mb-3 row">
                <label for="nama_makanan" class="col-sm-2 col-form-label">Nama Makanan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="daerah_makanan" class="col-sm-2 col-form-label">Daerah Makanan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="daerah_makanan" name="daerah_makanan" required>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="button" class="btn btn-danger" onClick="document.location='?page=makananAdd'">Cancel</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Link ke Bootstrap 5 JavaScript (Opsional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0BzF4coQLEvKh/RxGpXHjF5g3j6xr7SBo9ShCT/lpzuJ8L20" crossorigin="anonymous"></script>
</body>
</html>
