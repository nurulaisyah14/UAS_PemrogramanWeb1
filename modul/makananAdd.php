<table>
    <tr>
        <th colspan="3"><u>Tambah Data Daftar Makanan</u></th>
    </tr>
    <form method="post" action="?page=makananAddProses">
        <tr>
            <td style="width: 8em;">Nama Makanan</td>
            <td>:</td>
            <td><input type="text" name="nama_makanan" style="width: 20em;" required></td>
        </tr>
        <tr>
            <td style="width: 8em;">Daerah Makanan</td>
            <td>:</td>
            <td><input type="text" name="daerah_makanan" style="width: 20em;" required></td>
        </tr>
        <tr style="margin-top: 1em;">
            <td></td>
            <td></td>
            <td colspan="3" style="padding: 0.5em;">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value="Reset">
                <input type="button" value="Cancel" onClick="document.location='?page=makananAdd'">
            </td>
        </tr>
    </form>
</table>
