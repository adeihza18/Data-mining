<?php if (!isset($_SESSION)) session_start();
if ((!isset($_SESSION['_user'])) && (empty($_SESSION['_user']))) {
  echo "<script>window.location.href='login.php';</script>";
  exit();
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Cari Tahun Terbit</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
<div align="center">
<div class="pencarian">
<form name="frmpustaka" method="post" action="">
<p>Cari Tahun Terbit<br><br>
   <input type="text" name="tahun_terbit">
    <input type="submit" value="Cari" name="bcari">
 
 <?php $kon=mysqli_connect("localhost","root","","pustakac45");
 if (isset($_POST['bcari'])) {
	 $tahun_terbit = $_POST['tahun_terbit'];
	 $sqlcari="select * from pustaka where tahun_terbit like '%".$tahun_terbit."%';";
	 $qcari=mysqli_query($kon,$sqlcari);
	 $rcari=mysqli_fetch_array($qcari);
	 if (empty($rcari)) {
		 echo "<script>alert('Rekord tidak ditemukan !');</script>";
	 } else { 
	   echo "<table align=center><tr><td> Tahun Terbit </td></tr>";
	   do {
	   echo "<tr><td>".$rcari['tahun_terbit']."</td><td></td></tr>";
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