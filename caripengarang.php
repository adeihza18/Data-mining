<?php if (!isset($_SESSION)) session_start();
if ((!isset($_SESSION['_user'])) && (empty($_SESSION['_user']))) {
  echo "<script>window.location.href='login.php';</script>";
  exit();
}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Cari pengarang</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
<div align="center">
<div class="pencarian">
<form name="frmpustaka" method="post" action="">
<p>Cari pengarang<br><br>
   <input type="text" name="pengarang">
    <input type="submit" value="Cari" name="bcari">
 
 <?php $kon=mysqli_connect("localhost","root","","pustakac45");
 if (isset($_POST['bcari'])) {
	 $pengarang = $_POST['pengarang'];
	 $sqlcari="select * from pustaka where pengarang like '%".$pengarang."%';";
	 $qcari=mysqli_query($kon,$sqlcari);
	 $rcari=mysqli_fetch_array($qcari);
	 if (empty($rcari)) {
		 echo "<script>alert('Rekord tidak ditemukan !');</script>";
	 } else { 
	   echo "<table align=center><tr><td> Pengarang </td></tr>";
	   do {
	   echo "<tr><td>".$rcari['pengarang']."</td><td></td></tr>";
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