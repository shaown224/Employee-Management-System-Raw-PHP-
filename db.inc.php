<?php
  $dbServername ="localhost";
  $dbUsername ="myappuser";
  $dbPassword ="StrongPassword123";
  $dbName="employee_management";
  $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
  if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
  }

?>
