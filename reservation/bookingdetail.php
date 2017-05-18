<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/Asyraf/uvrs/Userlogin.php';</script>";
}
require_once('../connect.php');
require_once('../customerconfig.php');
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet"href="../css/indexstyle.css"type="text/css">
<link rel="stylesheet"href="../css/bookingcss.css"type="text/css">
</head>

<body>

  <div id="wrapper">
    <div id="header">
      <img src="../img/title.png" alt="img/Logo UTeM" width="500" >
      <img src="../img/utem.png" alt="img/Logo UTeM" width="200" height="100"/>
    </div>

    <div id="navigation">
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Facilities</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>
    <div id="mr">
	     <tr>
			      <td height="33" id="menu">
              <marquee class="font14" scrollamount="2"><font color="#F00"><strong>&#10003;</strong></font> Any facilities that customer want to rent avalaible on UTeM &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font > Facilities that avalaible on UTeM included : Main Hall, Sport Centre, and others &nbsp &nbsp <font color="#FF0000"><strong>&#10003;</strong></font> For more information can contact the administrator</marquee>
            </td>
	      </tr>
    </div>
    <div id="content-container">

      <div class="center">
        <table>
          <tr>
            <td>Customer Name</td><td><input type="text" name="name" value = "<?php echo$firstname." ".$lastname;?>"></td>
          </tr>
          <tr>
            <td>Customer IC Number</td><td><input type="text" name="icno" value="<?php echo$icno;?>"></td>
          </tr>
          <tr>
            <td>Customer Phone Number</td><td><input type="text" name="phoneno" value="<?php echo$phoneno;?>"></td>
          </tr>
          <tr>
            <td>Email</td><td><input type="text" name="email" value="<?php echo$email;?>"></td>
          </tr>
          <tr>
            <td>Facility</td><td><input type="text" value="<?php echo$_GET['name']?>"></td>
          </tr>
          <tr>
            <td>Booking Date</td><td><input type="text" value="<?php echo$_GET['date'] ?>"></td>
          </tr>
          <tr>
            <td>Booking Time</td><td><input type="text" value="<?php echo$_GET['time'] ?>"></td>
          </tr>
        </table>
        <br>
        <div class="btncenter">
            <button class="btn btn1">Submit</button><button class="btn btn2">Cancel</button>
        </div>
        </div>

<!--  -->

  <div id="footer">
    <CENTER>Copyright © UTeM, 2017</CENTER>
  </div>

  </div>

  </div>

</body>
</html>
