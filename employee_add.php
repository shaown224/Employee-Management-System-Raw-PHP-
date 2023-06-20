<?php
include_once 'db.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Employee Data</title>
  </head>
  <link rel="stylesheet" href="css/style.css">
  <body>

  

<a href="owner_home.php"><h1 class = "heading">Owner Home</h1></a>

    <div class="formcontent">
    <form action="employee_add.inc.php" method="post">
      Employee ID:<input type ="number" name="id" placeholder="type a ID"><br>
      Employee Name:<input type ="text" name="name" placeholder="Enter your name"><br>
      Username:<input type ="text" name="username" placeholder="Enter a username"><br>
      Email:<input type ="text" name="email" placeholder="Enter a valid email"><br>
      Department:<input type ="text" name="department" placeholder="Department name"><br>
      Password:<input type ="password" name="password" placeholder="Type a strong password"><br>
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form></div>
  </body>
</html>