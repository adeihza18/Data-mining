<!DOCTYPE html>
<html>
 <head>
  <title>Pustaka</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <div align="center">
<div class="pustaka">
 <form name="frmanggota" method="post" action="">
<p><strong>Pustaka</strong><br><br>
<input type="text" name="txtidkelompok" placeholder="id_kelompok"><br><br>
<input type="text" name="txtjudul" placeholder="judul_pustaka"><br><br>
<input type="text" name="txtpengarang" placeholder="pengarang"><br><br>
<input type="text" name="txttahunterbit" placeholder="tahun_terbit"><br><br>
<input type="submit" value="Simpan" name="bSimpan"></p>
</form>
</div></div>
 </body>
</html>
<?php if (isset($_POST['bSimpan'])) {
  $id_kelompok=$_POST['txtidkelompok'];
  $judul_pustaka=$_POST['txtjudul'];
  $pengarang=$_POST['txtpengarang'];
  $tahun_terbit=$_POST['txttahunterbit'];
  if ((empty($judul_pustaka)) OR (empty($pengarang)) OR (empty($tahun_terbit))) exit;
  $koneksi=mysqli_connect("localhost","root","","pustakac45");
  $sql="insert into pustaka (id_kelompok,judul_pustaka,pengarang,tahun_terbit) values('".$_POST['txtidkelompok']."','".$_POST['txtjudul']."','".$_POST['txtpengarang']."','".$_POST['txttahunterbit']."');";
  $q=mysqli_query($koneksi,$sql);
  if ($q) {
		echo "<script>alert('Rekord sudah disimpan');</script>";
	} else {
		echo "<script>alert('Rekord tidak  tersimpan');</script>";
	}
}
?>