﻿<?php
session_start();
include('config.php');

//secure page
if (isset($_POST['login']))
{
				$sql_login_account = "SELECT * FROM customerdetail WHERE username='".$uname."'AND password='".$pword."'";
				$sql_login_account1 = "SELECT * FROM employee WHERE username='".$uname."'AND password='".$pword."'";

				if(($result_login_account=$connect->query($sql_login_account))&&($result_login_account1=$connect->query($sql_login_account1)))
				{
					$rows_login_account=$result_login_account->fetch_array();
					$rows_login_account1=$result_login_account1->fetch_array();
					if($total_login_account=$result_login_account->num_rows)
					{
					$_SESSION['login']=$uname;
					header ('Location:/ofrs/customer/index.php');
					}
					elseif ($total_login_account1=$result_login_account1->num_rows) {
						$_SESSION['login']=$uname;
						header ('Location:/ofrs/admin/index.php');
					}
					else
						{
							echo "<script language=javascript>alert('Username or password incorrect ! Try again');window.location=login.php;</script>";
						}
					}
	}
?>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/indexstyle.css">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
	<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
	<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
</head>

<body>

		<div id="wrapper">
			<div id="header">
				<img src="img/title.png" alt="img/Logo UTeM" width="500" >
				<img src="img/utem.png" alt="img/Logo UTeM" width="200" height="120"/>
			</div>
		</div>
		<div id="navigation">
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="../ofrs/facility/menu.php">Facilities</a></li>
			<li><a href="contact.html">Contact us</a></li>
			<li><a href="login.php">Login</a></li>
			</ul>
		</div>
		<div id="mr">
	<tr>
			<td height="33" id="menu">
            <marquee class="font14" scrollamount="2"><font color="#F00"><strong>&#10003;</strong></font> Any facilities that customer want to rent avalaible on UTeM &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font > Facilities that avalaible on UTeM included : Main Hall, Sport Centre, and others &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font> For more information can contact the administrator</marquee>
            </td>
	</tr>
</div>
<div align="center"></br></br></br>
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
						<h5><a href="./register/registeraccount.html">Register now</a></h5>
							<input type="submit" name="login" id="login" value="Login" />
							<input type="reset" name="reset" id="reset" value="Reset" />
						</div></td>
					</tr>
					<tr>
						<td colspan="3"><center>
						  <strong>Announcement:</strong> Staff are required to use a User Name and Password to login to the portal. Any problem, please forward it to administrator.
					  </center></td>
					</tr>
					<tr>
						<td colspan="3"></td>
					</tr>
				</table>
			</form></td>
		</tr>
	</div>
</tr>


<!--  -->
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<div id="footer">
<CENTER>Copyright © UTeM, 2017</CENTER>
</div>

</div>

</div>

	<script type="text/javascript">
		var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
		var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["change"]});
		var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"]});
	</script>
</body>
</html>
