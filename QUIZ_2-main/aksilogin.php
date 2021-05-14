<?php
//Atur koneksi ke database
$server="localhost";
$username="root";
$password="";
$db="quis 2";
$koneksi=mysqli_connect($server,$username,$password,$db);


$user=$_POST['username'];
$pass=$_POST['password'];

$sql=mysqli_query($koneksi, "Select * from akun where username = '$user' and password = '$pass'");
$cek=mysqli_num_rows($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    if ($cek >0){
        session_start();
        $_SESSION['username']=$user;
        $_SESSION['password']=$password;
        echo "<center>Selamat Datang <b>$user</b>, Anda Berhasil Login<br>";
    } else {
        echo "<center>Username dan Password Anda Salah<br>";
        echo "Silahkan <a href=login.php>Login</a> Kembali</center>";
    }
    ?>
</body>
</html>