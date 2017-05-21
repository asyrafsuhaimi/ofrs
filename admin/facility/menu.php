<?php
session_start();

if(!isset($_SESSION['login']))
{
	echo "<script language=javascript>alert('Please Log In First Before Using The System.');window.location='/ofrs/login.php';</script>";
}
 ?>
<html>
<head>

<title>Online Facilities Reservation System</title>
<link rel="stylesheet" href="../css/indexstyle.css"type="text/css">
<link rel="stylesheet" href="../css/menu.css"type="text/css">
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

<table class = "center">
  <tr>
    <td>
      <div class="overlay-container">
      <img src="../img/dewan.jpg" id="myImg" alt="dewan UTeM" width="450" height="200">
      <div class = "overlay">
        <div class="text">Halls And Rooms</div>
      </div>
    </div>
    </td>
    <td>
      <ul>
        <li><a href="facilityinfo.php?facility=Main Hall">Main Hall</a></li>
        <li><a href="facilityinfo.php?facility=Banquet Hall">Banquet Hall</a></li>
        <li><a href="facilityinfo.php?facility=VVIP Room">VVIP Room</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div class="overlay-container">
      <img src="../img/asrama.jpg" id="myImg" alt="dewan UTeM" width="450" height="200">
      <div class = "overlay1">
        <div class="text">Acommodations</div>
      </div>
    </div>
    </td>
    <td>
      <ul>
        <li><a href="facilityinfo.php?facility=Lestari">Kolej Kediaman Lestari</a></li>
        <li><a href="facilityinfo.php?facility=Aljazari">Kolej Kediaman Aljazari</a></li>
        <li><a href="facilityinfo.php?facility=Bunga Raya">Kolej Kediaman Bunga Raya</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div class="overlay-container">
      <img src="../img/bas.jpg" id="myImg" alt="Bas UTeM" width="450" height="200">
      <div class = "overlay2">
        <div class="text">Transportations</div>
      </div>
    </div>
    </td>
    <td>
      <ul>
        <li><a href="facilityinfo.php?facility=Bus">Bus</a></li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div class="overlay-container">
      <img src="../img/masjid.jpg" id="myImg" alt="Masjid UTeM" width="450" height="200">
      <div class = "overlay3">
        <div class="text">Mosque</div>
      </div>
    </div>
    </td>
    <td>
      <ul>
        <li><a href="facilityinfo.php?facility=Main Praying Hall">Main Praying Hall</a></li>
      </ul>
    </td>
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

</body>
</html>
