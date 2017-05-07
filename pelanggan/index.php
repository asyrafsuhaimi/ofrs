<?php
session_start();
include('../config.php');

//secure page
if(!isset($_SESSION['guru_id']))
{
	echo "<script language=javascript>alert('Sila log masuk terlebih dahulu');window.location='../login.php';</script>";
}

//logout guru
if($_GET['action']=="logout")
{
	unset($_SESSION['guru_id']);
	echo "<script language=javascript>alert('Anda telah log keluar.');window.location='../login.php';</script>";
}

//guru login
$sql_guru = "SELECT * FROM guru WHERE guru_id = '".$_SESSION['guru_id']."'";
if($result_guru = $connect->query($sql_guru))
{
	$rows_guru= $result_guru->fetch_array();
	$total_guru = $result_guru->num_rows;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Sistem Maklumat Pelajar Sekolah</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
	<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
	<table width="900" id="frame">
		<tr>
			<td id="banner"><img src="../image/bannersmps.gif" width="950" height="300" /></td>
		</tr>
		<tr>
			<td height="33" id="menu">&nbsp;Log Masuk : <?php echo $rows_guru['guru_nama'];?></td>
		</tr>
		<tr>
			<td id="content"><table width="880">
				<tr>
					<td width="183" valign="top"><div align="left">Menu Guru Subjek</div>
						<ul id="MenuBar1" class="MenuBarVertical">
							<li><a href="index.php">Utama</a></li>
						<li><a href="profil.php">Profil</a></li>
					
						<li><a href="#" class="MenuBarItemSubmenu">Pengurusan Pelajar</a>
							<ul>
								<li><a href="senarai-pelajar.php">Senarai Nama Pelajar</a></li>
							</ul>
							
							<li><a href="#" class="MenuBarItemSubmenu">Pengurusan Kurikulum</a>
							<ul>
								<li><a href="markah-kuri.php">Permarkahan Kurikulum</a></li>
								<li><a href="senarai-markah-kurikulum.php">Senarai Markah Kurikulum</a></li>
							</ul>
							
							<li><a href="#" class="MenuBarItemSubmenu">Pengurusan Kokurikulum</a>
							<ul>
								<li><a href="markah-koku.php">Permarkahan Kokurikulum</a></li>
								<li><a href="senarai-markah-kokurikulum.php">Senarai Markah Kokurikulum</a></li>
							</ul>
					
						<li><a href="<?php echo $_SERVER['PHP_SELF']."?action=logout";?>">Log Keluar</a></li>
						</ul>
					</td>
					<td width="650" align="center" valign="middle"><marquee direction = "up" scrollamount = "2"><center><p>(SMPS)</p>
					<p>SISTEM MAKLUMAT PELAJAR SEKOLAH</p>
				    <p>SEKOLAH MENENEGAH KEBANGSAAN BANDAR TASIK KESUMA</p>
				    <p>&nbsp;</p>
				    <p>*Memudahkan guru SMKBTK untuk mendaftar pelajar </p>
				    <p>dan menyimpan rekod pelajar. </p><p>&nbsp;</p>
				    <p>*Memudahkan guru untuk membuat permarkahan pelajar </p>
					<p>dari segi kurikulum & kokorikulum.</p></br>
                    <p>*Memudahkan pendaftaran pelajar dengan adanya sistem berkomputer</p>
                    </center></marquee>
                    <p>&nbsp;</p></td>
				</tr>
			</table></td>
		</tr>
		<tr>
			<td height="52" id="footer">SMPS<br />Sekolah Menengah Kebangsaan Bandar Tasik Kesuma</td>
		</tr>
	</table>
	<script type="text/javascript">
		var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
	</script>
</body>
</html>
