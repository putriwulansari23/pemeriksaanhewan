<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Login</title>
</head>
<body>
    <h2>Daftar User Anda</h2>
</br>

<?php
if(isset($_GET['pesan'])){
    if($_GET['pesan'] == "gagal"){
        echo "Daftar Gagal! username dan password salah!";
    }else if($_GET['pesan'] == "daftar"){
        echo "Anda Telah Berhasil daftar";
    }else if($_GET['pesan'] == "belum_daftar"){
        echo "Anda Harus daftar terlebih dahulu";
    }
}
?>
<br/>
<br/>
<form method="POST" action="login.php">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" placeholder="Masukkan username anda"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" placeholder="Masukkan password anda"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><a href="login.php"><input type="button" name="daftar" value="daftar"/></a></td>
        </tr>
</table>
</form>
</body>
</html>