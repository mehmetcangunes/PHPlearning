<?php

$con = mysqli_connect("localhost", "root", "", "sql_name");

if (mysqli_connect_errno($con))
  {
  echo "<font style=\"color:#FF0000\">Could not connect:". mysqli_connect_error()."</font\>";
  }
?>
