<h2>Tambah Data Pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/simpan" method="post">
    <table>
        <tr>
            <td>Tipe Golongan</td>
            <td><select class="input-data" name="pel_id_gol">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","db_token") or die(mysqli_connect_error());
                            $golongan = mysqli_query($conn, "SELECT * FROM tb_golongan ORDER BY gol_id DESC");
                            while($gol = mysqli_fetch_array($golongan)){
                        ?>
                        <option value="<?php echo $gol['gol_id'] ?>"><?php echo $gol['gol_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Nama Akun</td>
            <td><select class="input-data" name="pel_id_user">
                        <option value="">--Silahkan Pilih--</option>
                        <?php
                            $conn = mysqli_connect("localhost","root","","db_token") or die(mysqli_connect_error());
                            $users = mysqli_query($conn, "SELECT * FROM tb_users ORDER BY user_id DESC");
                            while($user = mysqli_fetch_array($users)){
                        ?>
                        <option value="<?php echo $user['user_id'] ?>"><?php echo $user['user_nama']?></option>
                        <?php } ?>
            </select>        
            </td>
        </tr>
        <tr>
            <td>Nomor Pelanggan</td>
            <td><input type="text" name="pel_no" class="input-data"></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="pel_nama" class="input-data"></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><input type="text" name="pel_alamat" class="input-data" ></td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td><input type="text" name="pel_hp" class="input-data" ></td>
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