<?php
function connect($data){
$con = mysql_connect("localhost","biff","home");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("pizza", $con);

mysql_query("INSERT INTO customer (fName, lName, address, city, state, zip )
VALUES ('$fName', '$lName', '$address', '$city', '$state', '$zip')");

mysql_close($con);
}