<?php
require "includes/config.php";
//ambil id dari query string
$id = $_GET['id'];
// buat query untuk ambil data dari database
$query = "SELECT * FROM tbl_makanan WHERE id_makanan=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($sql) < 1) {
die("data tidak ditemukan...");
}
?>
<table>
<tr>
<th colspan="3"><u>Update Data Daftar Makanan</u></th>
</tr>
<form method="post" action="?page=makananUpdateProses">
<!-- menampung nilai id yang akan di edit -->
<input type="hidden" name="id" value="<?= $data['id_makanan'] ?>" />
<tr>
<td style="width: 8em;">Nama Makanan</td>
<td>:</td>
<td><input type="text" name="nama_makanan" style="width: 20em;"

value="<?= $data['nama_makanan'] ?>"></td>
</tr>
<tr>
<td style="width: 8em;">Daerah Makanan</td>
<td>:</td>
<td><input type="text" name="daerah_makanan" style="width: 20em;"

value="<?= $data['daerah_makanan'] ?>">

</td>
</tr>
<tr style="margin-top: 1em;">
<td></td>
<td></td>
<td colspan="3" style="padding: 0.5em;">
<input type="submit" name="update" value="Update">
<input type="button" value="Cancel"
onClick="document.location='?page=makanan'">

</td>
</tr>
</form>
</table>