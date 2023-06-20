<?php
  include_once 'db.inc.php';
  $employee_id = $_POST['id'];
  $employee_name = $_POST['name'];
  $username= $_POST['username'];
  $email = $_POST['email'];
  $department = $_POST['department'];
  $password= $_POST['password'];
  
  $sql = "INSERT INTO employee (id,employee_name,username,email,
  department,password) VALUES ('$employee_id','$employee_name','$username','$email','$department','$password');";
  mysqli_query($conn,$sql);
  header("Location: owner_home.php?employee_add=success");
?>