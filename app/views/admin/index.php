<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="shortcut icon" href="<?php echo AST; ?>/img/electric-gear.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>
<body id="bg-login">
    <div class="box-login">
        <center><img src="<?php echo AST; ?>/img/indahsaputri1.png" alt="" class="brand"></center>
        <h2>Daftar Akun</h2>
        <form action="<?php echo URL; ?>/admin/simpan" method="post">
        <input type="text" name="admin_name" class="input-control" placeholder="Nama" required></td>
        <input type="text" name="username" class="input-control" placeholder="Username" required></td>
        <input type="password" name="password" class="input-control" placeholder="Password" required></td>
        <center><input type="submit" name="btn_simpan" value="SIMPAN">
        <input type="button" name="btn_batal" value="BATAL" onclick="history.go(-1);" ></center>
        </form>
    </div>
</body>
</html>