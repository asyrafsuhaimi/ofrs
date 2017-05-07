<?php
session_start();
include('config.php');

//secure page
if (isset($_POST['login']))
{
				$sql_login_account = "SELECT * FROM account WHERE uname='".$uname."'AND pword='".$pword."'";
	
				if($result_login_account=$connect->query($sql_login_account))
				{
					$rows_login_account=$result_login_account->fetch_array();
					if($total_login_account=$result_login_account->num_rows)
					{
					header ('Location:account/index.php');
					}
					else
						{
							echo "<script language=javascript>alert('Log masuk tidak berjaya. Sila cuba lagi!');window.location=login.php;</script>";
						}
					}
				}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Online Facilities Reservation System</title>
	<link rel="stylesheet" type="text/css" href="css/bg.css" />
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body>
	<table width="900" id="frame">
		<tr>
			<td id="banner"><img src="img/BANNER1.jpg" width="950" height="300" /></td>
		</tr>
		<tr>
			<td height="50" id="menu"><ul id="MenuBar1" class="MenuBarHorizontal">
				<li><a href="index.html">HOME</a></li>
				<li><a href="#">ABOUT US</a></li>
				<li><a href="#">CONTACT US</a></li>
				<li><a href="index.php">LOGIN</a></li>
			</ul></td>
		</tr>
		<tr>
			<td id="content"><form id="form1" name="form1" method="post" action="">
				<table width="500" id="login-box">
					<tr>
						<td colspan="3"></td>
					</tr>
					<tr>
						<td colspan="3"><blockquote>
							<blockquote>
								<blockquote>
									<blockquote><p align="center">LOGIN</p></blockquote>
								</blockquote>
							</blockquote>
						</blockquote></td>
					</tr>
					<tr>
						<td width="192"></td>
						<td width="7"></td>
						<td width="279"></td>
					</tr>
					<tr>
						<td height="47" align="right">Username</td>
						<td>:</td>
						<td align="left"><label for="username"></label>
							<span id="sprytextfield1">
							<input type="text" name="uname" id="username" /></br>
							<span class="textfieldRequiredMsg">Ruangan ini diperlukan</span></span>
						</td>
					</tr>
					<tr>
						<td align="right">Password</td>
						<td>:</td>
						<td align="left"><label for="password"></label>
							<span id="sprypassword1">
							<input type="password" name="pword" id="password" /></br>
							<span class="passwordRequiredMsg">Ruangan ini diperlukan</span></span>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="3"><div align="center">
							<input type="submit" name="login" id="login" value="Login" />
							<input type="reset" name="reset" id="reset" value="Reset" />
						</div></td>
					</tr>
					<tr>
						<td colspan="3"><center>
						<h5> <a href="/ofrs/register/registeraccount.html"> Register new user </a> </h5>
						  <strong>Announcement:</strong> Customers are asked to use the <b>username</b> and <b>password</b> to login to the portal. Any problem, please forward it to administrator.
					  </center></td>
					</tr>
					<tr>
						<td colspan="3"></td>
					</tr>
				</table>
			</form></td>
		</tr>
		<tr>
			<td height="52" id="footer">OFRS<br />University Technical Malaysia Melaka</td>
		</tr>
	</table>
	<script type="text/javascript">
		var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
		var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
		var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
	</script>
</body>
</html>
