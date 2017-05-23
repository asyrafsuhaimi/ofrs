<?php
	require_once('../connect.php');
	session_start();

	if(!isset($_SESSION['login']))
	{
		echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
	}

	require_once('../connect.php');
	require_once('../customerconfig.php');
	require_once('../customerstatus.php');
	if(isset($_GET['facility'])){
	}

  $sql_facility ="SELECT * FROM `facility` WHERE name like '".$_GET['facility']."'";
	$result = mysqli_query($conn,$sql_facility);
	if(mysqli_num_rows($result)>0){
		while ($facility_result = mysqli_fetch_array($result)) {
			$name = $facility_result['name'];
			$facilitydescription = $facility_result['facilitydescription'];
			$facilityimage = $facility_result['facilityimage'];
			$location = $facility_result['location'];
			$price = $facility_result['price'];
			$facilityid = $facility_result['facilityid'];

		}


	}
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet" href="/ofrs/css/indexstyle.css"type="text/css">
<link rel="stylesheet" href="/ofrs/css/facilityinfo.css"type="text/css">
</head>

<body>

<div id="wrapper">
<div id="header">
<img src="/ofrs/img/title.png" alt="img/Logo UTeM" width="500" >
<img src="/ofrs/img/utem.png" alt="img/Logo UTeM" width="200" height="120"/>
</div>

<div id="navigation">
	<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Facilities</a>
		<div class="dropdown-content">
			<a href="../facility/menu.php">New Reservation</a>
			<a href="../reservation/status.php">Reservation Status</a>
		</div>
	<li><a href="contact.html">Contact us</a></li>
	<li style="float:right" class="dropdown">
		<a href="javascript:void(0)" class="dropbtn">Logged as.."<?php echo $_SESSION['login']?>"</a>
		<div class="dropdown-content">
			<a href="#">Account Details </a>
			<a href="../logout.php">Logout </a>
		</div>
	</li>
	</ul>
</div>
<div id="mr">
	<tr>
			<td height="33" id="menu">
            <marquee class="font14" scrollamount="2"><font color="#F00"><strong>&#10003;</strong></font> Any facilities that customer want to rent avalaible on UTeM &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font > Facilities that avalaible on UTeM included : Main Hall, Sport Centre, and others &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font> For more information can contact the administrator</marquee>
            </td>
	</tr>
</div>
<table class="center">
  <tr>
    <td>
			<form method="get" action="">
      <select name="facility">
				<option value="" disabled selected>Choose Other Facility</option>
        <option value="Bunga Raya">Bunga Raya Hostel</option>
        <option value-"Main Hall">Main Hall</option>
        <option>Banquet Hall</option>
        <option>VVIP Room</option>
      </select>
			<input type="submit" name="submit" class="btn btn1">
		</form>
    </td>
  </tr>
  <tr>
    <td><div id="myImg"></div></td>
		<td>
				<h3 class="name"><?php echo $name?></h3>
				<div class="box">
					<h3>Details Information</h3>
					<p align="justify"><?php echo $facilitydescription?></p>
					<p>Price : <?php echo "$price";?></p>
				</div>
		</td>
  </tr>
	<tr>
		<td colspan="2">
			<br/>
			<form method = "post" action="../reservation/booking.php">
				<input type="hidden" name="name" value="<?php echo$name?>">
				<button class="btn btn1 centerbtn"name="facility" value="<?php echo$facilityimage;?>">Make A Reservation</button>
			</form>
		<td>
	</tr>
</table>

<!--  -->
</br>
</br>
</br>
</br>
</br>

<div id="footer">
<CENTER>Copyright &copy UTeM, 2017</CENTER>
</div>

</div>

</div>
<script>
	window.onload=function(){
		var img = document.createElement("img");
		img.setAttribute("src","<?php echo $facilityimage;?>");
		img.setAttribute("height","200");
		img.setAttribute("width","450");
		document.getElementById("myImg").appendChild(img);
		//document.getElementById(myImg).src = "<?php echo $facilityimage;?>";
	}
</script>
</body>

</html>
