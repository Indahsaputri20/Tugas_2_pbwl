<h2>Tambah Data Golongan</h2>

<form action="<?php echo URL; ?>/golongan/simpan" method="post">
    <table>
        <tr>
            <td>Kode</td>
            <td><input type="text" name="gol_kode" class="input-data"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="gol_nama" class="input-data"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn_simpan" value="SIMPAN">
                <input type="button" name="btn_batal" value="BATAL" onclick="history.go(-1);" >
            </td>
        </tr>
    </table>
</form>