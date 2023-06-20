<?php
  include_once 'db.inc.php';

      $clicked=0;

      if(isset($_GET['employee_add']))
      {
        echo '<script>alert("Employee added successfully!");</script>' ;
      }

      $empsql = "SELECT * FROM employee";

      $user = $conn->query($empsql);

      $result = array();

      while ($row = $user->fetch_assoc()) {
          $result[] = $row;
      }


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Owner Home</title>
  </head>
    
    <link rel="stylesheet" href="css/style.css">
  <body>
      
      
    
      
    <h1 class = "heading">Owner Home</h1>

    <div>
    <h1 class ="not"><a href="employee_add.php">Add Employee</a></h1>
    <h1 class ="not"><a href="employeelist.php?clicked=".<?php $clicked ?>>Employee Report</a></h1>
    <h1 class ="not"><a href="index.php">Log Out</a></h1>

    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Department</th>
        </tr>
        <?php foreach ($result as $employee): ?>
            <tr>
                <td><?php echo $employee['id']; ?></td>
                <td><?php echo $employee['employee_name']; ?></td>
                <td><?php echo $employee['username']; ?></td>
                <td><?php echo $employee['email']; ?></td>
                <td><?php echo $employee['department']; ?></td>
              
                
            </tr>
        <?php endforeach; ?>
    </table>
    
      
  </body>
</html>
