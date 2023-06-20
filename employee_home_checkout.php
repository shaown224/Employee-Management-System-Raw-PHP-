<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
       Employee management
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body >

<div class="nav-bar">
    <div class ="logo1">
            <a href="userhome.php">
                <img src="images/logo.jpeg" style="width:60px" >
            </a>
    </div>
</div>

<div class="menu">
<ul>

  <li><a href="employee_login.php">LOG OUT</a></li>
</ul>
</div>
</div>


<div class="wrapper">
  <h1>Welcome to Geinie Infotech</h1>
</div>

<?php echo '<script>alert("Successfully Checked-in");</script>'; ?>


<?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        ?>
        <div class="formcontent">
        <form method="POST" action="employee_check_out.inc.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div  class="c1"><input type="submit" value="Check Out"></div>
        </form>
        </div>
        <?php
    } else {
       
    }
    ?>
      
      

  </body>
</html>

