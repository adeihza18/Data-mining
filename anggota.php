<!DOCTYPE html>
<html>
<head><title>Anggota</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div align="center">
<div class="anggota">
<form name="frmanggota" method="post" action="">
<p><strong>Nama Anggota</strong><br><br>
<input type="text" name="txtanggota">
<input type="submit" value="Simpan" name="bSimpan">
</form>
</div></div>
</body>
</html>
<?php 
if (isset($_POST['bSimpan'])){
	$Nama_anggota=$_POST['txtanggota'];
	$sql="insert into anggota (Nama_anggota)
	      values ('".$Nama_anggota."');";
	$koneksi=mysqli_connect("localhost","root","","pustakac45");	
	$q=mysqli_query($koneksi,$sql);
	if ($q) {
		echo "<script>alert('Rekord sudah disimpan');</script>";
	} else {
		echo "<script>alert('Rekord tidak  tersimpan');</script>";
	}
}
?>