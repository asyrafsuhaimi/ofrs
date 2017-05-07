<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reservation";
$myDate = $_POST['myDate'];
$time = $_POST['time'];
$venue = $_POST['venue'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "INSERT INTO reservation(myDate, time, venue) VALUES ('$myDate','$time','$venue')";

if (mysqli_query($conn, $sql1))
{
  echo '<script language="javascript">';
  echo 'alert("Reserve Succesfully Register")';
  echo '</script>';
  echo "<script language=javascript>window.location='registeraccount.html';</script>";
}
else
{
  //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  echo '<script language="javascript">';
  echo 'alert("Fail To Register")';
  echo '</script>';
  echo "<script language=javascript>window.location='registeraccount.html';</script>";
}

mysqli_close($conn);

 ?>
