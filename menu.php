<?php
session_start();
if (!isset($_SESSION['username'])){
	header('location: login.php');
	exit;
} else {
	echo "Selamat Datang Di Website Kami ".$_SESSION['username']."<br><br>";
}
?>
<html>
<link rel="stylesheet" href="index.css" type="text/css">
<body>
	Berikut Profil singkat saya :) <br><br>
	<img src="itti.jpg" width="250" height="300"><br><br>
	Nama saya Fitriana Amaliah Sari, saya Jurusan Sistem Informasi Angkatan 2017. <br>
	Saya berasal dari Bulukumba, Alamat saya sekarang Samata
<a href="logout.php" class="primary-btn text-uppercase">LOGOUT</a>
</body>
</html>