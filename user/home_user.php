<?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['user'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['level']!="user"){
    die("You Not User..!");//jika bukan admin jangan lanjut
}
?>
<html>
<head>
<title>Cek_Login</title>
</head>
<body>
<br>
<h2>Hi...!</h2> &nbsp;<br><font color="#456"><strong> <?=$_SESSION['nama']?></strong></font>&nbsp;||&nbsp;<a href="logout.php">Log Out&nbsp;&nbsp;</a></td>
    <td>&nbsp;</td>
</tr>
</body>
</html>