<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ofrs";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phoneno = $_POST['phoneno'];
$uname = $_POST['uname'];
$pword = $_POST['pword'];
$icno = $_POST['icno'];
$email = $_POST['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO account(firstname, lastname, uname, pword, icno, email, phoneno) VALUES ('$firstname','$lastname','$uname','$pword','$icno','$email','$phoneno')";

if (mysqli_query($conn, $sql))
{
  echo '<script language="javascript">';
  echo 'alert("Record Succesfully Created")';
  echo '</script>';
  echo "<script language=javascript>window.location='/ofrs/login.php';</script>";
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
