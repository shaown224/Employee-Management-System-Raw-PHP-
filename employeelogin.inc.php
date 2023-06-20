<?php
  include_once 'db.inc.php';
  
  if(isset($_POST['name'])){
    
    $uname    = $_POST['name'];
    $password = $_POST['password'];
    
    $sql="select * from employee where username='".$uname."'AND password='".$password."' limit 1";
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        echo " You Have Successfully Logged in";
        $row = $result->fetch_assoc();
        $id = $row['id'];
        header("Location: employee_home_checkin.php?id=".$id);
       
    }
    else{
        echo " You Have Entered Incorrect Password";
      
    }
  }
?>
