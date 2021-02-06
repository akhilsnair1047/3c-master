<?php
$A=$_POST['first_name'];
$B=$_POST['last_name'];
$C=$_POST['birthday'];
$D=$_POST['gender'];
$E=$_POST['email'];
$F=$_POST['phone'];
$I=$_POST['ref'];
$G=$_POST['city'];
$H=$_POST['state'];
$servername = "mysql.spadeems.tech";
$username = "techbizotech1";
$password = "vishal2000";
$dbname = "3cccd";

$conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "INSERT INTO `c3_registrations` (`firstName`, `lastName`, `Birthday`, `Gender`, `Email`, `PhoneNumber`, `Refferal`, `City`, `State`) VALUES ('$A', '$B', '$C', '$D', '$E', '$F','$I', '$G', '$H')";

  if ($conn->query($sql) === TRUE) {
  echo "<h1>Registered Successfully</h1>";
  echo "<a href='https://www.spadeems.com'>Visit Spadeems website </a>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>