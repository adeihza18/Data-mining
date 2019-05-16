<?php if (!isset($_SESSION)) session_start();
if ((!isset($_SESSION['_user'])) && (empty($_SESSION['_user']))) {
  echo "<script>window.location.href='login.php';</script>";
  exit();
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Cari judul pustaka</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
<div align="center">
<div class="pencarian">
<form name="frmpustaka" method="post" action="">
<p>Cari Judul Pustaka<br><br>
   <input type="text" name="pustaka">
    <input type="submit" value="Cari" name="bcari">
 
 <?php $kon=mysqli_connect("localhost","root","","pustakac45");
 if (isset($_POST['bcari'])) {
	 $pustaka = $_POST['pustaka'];
	 $sqlcari="select * from pustaka where judul_pustaka like '%".$pustaka."%';";
	 $qcari=mysqli_query($kon,$sqlcari);
	 $rcari=mysqli_fetch_array($qcari);
	 if (empty($rcari)) {
		 echo "<script>alert('Rekord tidak ditemukan !');</script>";
	 } else { 
	   echo "<table align=center><tr><td>Judul Pustaka</td></tr>";
	   do {
	   echo "<tr><td>".$rcari['judul_pustaka']."</td><td></td></tr>";
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