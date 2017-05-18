<?php
	require_once('../connect.php');
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
<link rel="stylesheet" href="../css/indexstyle.css"type="text/css">
</head>

<body>

<div id="wrapper">
<div id="header">
<img src="../img/title.png" alt="img/Logo UTeM" width="500" >
<img src="../img/utem.png" alt="img/Logo UTeM" width="200" height="120"/>
</div>

<div id="navigation">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="#">About Us</a></li>
<li><a href="#">Facilities</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="contact.html">Contact us</a></li>
</ul>
</div>
<div id="mr">
	<tr>
			<td height="33" id="menu">
            <marquee class="font14" scrollamount="2"><font color="#F00"><strong>&#10003;</strong></font> Any facilities that customer want to rent avalaible on UTeM &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font > Facilities that avalaible on UTeM included : Main Hall, Sport Centre, and others &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font> For more information can contact the administrator</marquee>
            </td>
	</tr>
</div>
<table>
  <tr>
    <td>
      <select>
        <option>Dewan Besar</option>
        <option>Main Hall</option>
        <option>Banquet Hall</option>
        <option>VVIP Room</option>
      </select>
    </td>
  </tr>
  <tr>
    <td><div id="myImg"></div></td>
		<td>Details Information <br><br><?php echo $facilitydescription; echo"<br>$location"; echo "<br> $price";?></td>
  </tr>
	<tr>
		<td>
			<form method = "post" action="../reservation/booking.php">
				<input type="hidden" name="name" value="<?php echo$name?>">
				<button name="facility" value="<?php echo$facilityimage;?>">Make A Reservation</button>
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
