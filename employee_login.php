<?php
  include_once 'db.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>login</title>
    
  </head>
 
  <body>
  <div class= "homeedit"><a href="index.php"><h1>Main Home</h1></a></div>
  <div class="formcontent">  <form  action="employeelogin.inc.php" method="post">
      <input type="text" name="name" placeholder="Username"><br/><br/>
      <input type="password" name="password" placeholder="Password">
      <div  class="c1" style="color:#3ff8dd"><button type ="submit" name="submit">Log in</button></div>
    </form> </div>
  </body>
</html>
