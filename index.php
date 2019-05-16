<?php if (!isset($_SESSION)) session_start();
if ((!isset($_SESSION['_user'])) && (empty($_SESSION['_user']))) {
  echo "<script>window.location.href='login.php';</script>";
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Pustaka C45</title>
<link rel="stylesheet" href="style.css">
</head>
<body class="biasa">
<div id="menupengguna" alt="Logout"><a href="logout.php" alt"Logout">Logout</a></div>
<div id="header">APLIKASI PUSTAKA C45</div>
<div id="navbar">
  <a href="index.php"><b>Beranda</b></a>
  <div id="dropdown">
    <div id="dropbtn"><b>Tabel Penginputan</b></div>
    <div id="dropdown-content">
	 <a href="pengguna.php" target="frameUtama"><b> Input Pengguna</b> </a>
      <a href="anggota.php" target="frameUtama"><b> Input Anggota</b> </a>
	   <a href="pustaka.php" target="frameUtama"><b> Input Pustaka</b> </a>
      <a href="kelompok.php" target="frameUtama"><b> Input Kelompok Pustaka</b> </a>
	 
    </div>
  </div> 
  <div id="dropdown">
    <div id="dropbtn"><b>Tabel Pencarian</b></div>
    <div id="dropdown-content">
      <a href="carianggota.php" target="frameUtama"><b>Cari Anggota</b></a>
	  <a href="carikelompok.php" target="frameUtama"><b>Cari Kelompok</b></a>
	   <a href="caripengarang.php" target="frameUtama"><b>Cari Pengarang</b></a>
	    <a href="caripustaka.php" target="frameUtama"><b>Cari Judul pustaka</b></a>
		<a href="caritahunterbit.php" target="frameUtama"><b>Cari Tahun Terbit</b></a>
    </div>
  </div>
</div> <!-- end of div navbar -->
<div id="content">
<iframe src="beranda.html" width="100%" height="770px" name="frameUtama" frameborder="0"></iframe>
</div>
<div id="footer">(C)2019 Ade Ihza Dwi Putra</div>

</body>
</html>