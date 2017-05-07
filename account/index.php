<?php
session_start();
include('../config.php');

//secure page
if(!isset($_SESSION['uname']))
{
	echo "<script language=t>alert('Sila log masuk terlebih dahulu');window.location='../login.php';</script>";
}

//logout guru
if($_GET['action']=="logout")
{
	unset($_SESSION['uname']);
	echo "<script language=javascript>alert('Anda telah log keluar.');window.location='../login.php';</script>";
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Facilities Reservation System</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
	<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>

<body>
	<table width="900" id="frame">
		<tr>
			<td id="banner"><img src="../img/BANNER1.jpg" width="950" height="300" /></td>
		</tr>
		<tr>
			<td height="33" id="menu">&nbsp;Log Masuk : <?php echo $rows_uname['uname'];?></td>
		</tr>
		<tr>
			<td id="content"><table width="880">
				<tr>
					<td width="183" valign="top"><div align="left">Customer Menu</div>
						<ul id="MenuBar1" class="MenuBarVertical">
							<li><a href="index.php">Home</a></li>
						<li><a href="profil.php">Profile</a></li>
					
					
						<li><a href="<?php echo $_SERVER['PHP_SELF']."?action=logout";?>">Log Keluar</a></li>
						</ul>
					</td>
					<td width="650" align="center" valign="middle"><marquee direction = "up" scrollamount = "2"><center><p>(OFRS)</p>
					<p>ONLINE FACILITIES RESERVATION SYSTEM</p>
				    <p>UNIVERSITY TECHNICAL MALAYSIA MELAKA</p>
				    <p>&nbsp;</p>
				    <p>*Easy for customer to rent any facilities </p>
				    <p>in our university. </p><p>&nbsp;</p>
				    <p>*Easy for staff to keep and track the </p>
					<p>record of the customer.</p></br>
                    <p>*Easy for the online registration by having this computerized way</p>
                    </center></marquee>
                    <p>&nbsp;</p></td>
				</tr>
			</table></td>
		</tr>
		<tr>
			<td height="52" id="footer">OFRS<br />University Technical Malaysia Melaka</td>
		</tr>
	</table>
	<script type="text/javascript">
		var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
	</script>
</body>
</html>
