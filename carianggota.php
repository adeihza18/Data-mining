<?php if (!isset($_SESSION)) session_start();
if ((!isset($_SESSION['_user'])) && (empty($_SESSION['_user']))) {
  echo "<script>window.location.href='login.php';</script>";
  exit();
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Cari Anggota</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
<div align="center">
<div class="pencarian">
<form name="frmanggota" method="post" action="">
<p>Cari Anggota<br><br>
   <input type="text" name="Nama_anggota">
    <input type="submit" value="Cari" name="bcari">
 
 <?php $kon=mysqli_connect("localhost","root","","pustakac45");
 if (isset($_POST['bcari'])) {
	 $Nama_anggota = $_POST['Nama_anggota'];
	 $sqlcari="select * from anggota where Nama_anggota like '%".$Nama_anggota."%';";
	 $qcari=mysqli_query($kon,$sqlcari);
	 $rcari=mysqli_fetch_array($qcari);
	 if (empty($rcari)) {
		 echo "<script>alert('Rekord tidak ditemukan !');</script>";
	 } else { 
	   echo "<table align=center><tr><td>Nama Anggota</td></tr>";
	   do {
	   echo "<tr><td>".$rcari['Nama_anggota']."</td><td></td></tr>";
	   } while ($rcari=mysqli_fetch_array($qcari));
	   echo "</table>";
	 
	 }
 }
 mysqli_close($kon);
 ?>
 </div>

 </form>
 </div>
 </body>
</html>