<h2>Edit Data Golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
<input type="hidden" name="gol_id" id="" value="<?php echo $data['gol_id']?>">
    <table>
        <tr>
            <td>Kode</td>
            <td><input type="text" name="gol_kode" class="input-data" value="<?php echo $data['gol_kode']?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="gol_nama" class="input-data" value="<?php echo $data['gol_nama']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn_update" value="UPDATE">
                <input type="button" name="btn_batal" value="BATAL" onclick="history.go(-1);" >
            </td>
        </tr>
    </table>
</form>