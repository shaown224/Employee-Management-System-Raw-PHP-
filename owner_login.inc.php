<?php
  include_once 'db.inc.php';
  
  if(isset($_POST['name'])){
    
    $uname    = $_POST['name'];
    $password = $_POST['password'];
    
    $sql="select * from owner where Username='".$uname."'AND Password='".$password."' limit 1";
    
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        echo " You Have Successfully Logged in";
        header("Location: owner_home.php?ownerlogin=success");
       
    }
    else{
        
        echo '<script>alert("Log in Failed!Enter a correct username/password");</script>';

        echo "Go back and try again!";
       
      
    }
  }
?>