<?php if (!isset($_SESSION)) session_start();
if ((!isset($_SESSION['_user'])) && (empty($_SESSION['_user']))) {
  echo "<script>window.location.href='login.php';</script>";
  exit();
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Cari Kelompok</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
<div align="center">
<div class="pencarian">
<form name="frmpustaka" method="post" action="">
<p>Cari Kelompok<br><br>
   <input type="text" name="Nama_kelompok">
    <input type="submit" value="Cari" name="bcari">
 
 <?php $kon=mysqli_connect("localhost","root","","pustakac45");
 if (isset($_POST['bcari'])) {
	 $Nama_kelompok = $_POST['Nama_kelompok'];
	 $sqlcari="select * from kelompok_pustaka where Nama_kelompok like '%".$Nama_kelompok."%';";
	 $qcari=mysqli_query($kon,$sqlcari);
	 $rcari=mysqli_fetch_array($qcari);
	 if (empty($rcari)) {
		 echo "<script>alert('Rekord tidak ditemukan !');</script>";
	 } else { 
	   echo "<table align=center><tr><td>Nama kelompok</td></tr>";
	   do {
	   echo "<tr><td>".$rcari['Nama_kelompok']."</td><td></td></tr>";
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