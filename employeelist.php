<?php
     include_once('db.inc.php');

        date_default_timezone_set('Asia/Dhaka');
        

        $sql = "SELECT * FROM dailyreport";
        $result = $conn->query($sql);

        $sql_dates = "SELECT DISTINCT DATE_FORMAT(Date, '%Y-%m-%d') AS date FROM dailyreport";
        $result_dates = $conn->query($sql_dates);
        $dates = array();
        while ($row = $result_dates->fetch_assoc()) {
            $dates[] = $row['date'];
        }

        if (isset($_POST['filter'])) {
            $selectedDate = $_POST['date'];
            $filtered_result = array();
            while ($row = $result->fetch_assoc()) {
                if ($row['Date'] == $selectedDate) {
                    $filtered_result[] = $row;
                }
            }
        } else {
            $filtered_result = array();
            while ($row = $result->fetch_assoc()) {

                if($row['Date']== date('Y-m-d'))
                {
                    $filtered_result[] = $row;
                }
                
            }
        }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Employee Report</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  </head>
<body>
<a href="owner_home.php"><h1 class = "heading">Owner Home</h1></a>
    <div class="formcontentp" id="playerinfo">
    <form class="f_inner" method="post" action="">
        <label for="date" style="margin-top:1.1%;">Filter by Date:</label>
        <select name="date">
            <option value="">Select Date</option>
            <?php foreach ($dates as $date): ?>
                <?php if($_GET['clicked'] == 0)
                { $_GET['clicked'] = 1?>

                     <option value="<?php echo $date; ?>" <?php echo ($date == date('Y-m-d')) ? 'selected' : $date; ?>><?php echo $date; ?></option>

                <?php }
                else{ 
                 ?>
                     <option value="<?php echo $date; ?>"><?php echo $date; ?></option>

                <?php } ?>

            <?php endforeach; ?>
        </select>
        <div style="padding-left:10px;width:100px"><input  type="submit" name="filter" value=" Filter"style="background-color:rgba(26, 35, 88, 0.856);color:rgb(18, 194, 41)"></div>
    </form>
    </div>
    <br>
    <table>
        <tr>
            <th>ID</th>
            <th>Check_in</th>
            <th>Check_out</th>
            <th>Date</th>
            <th>Ofice Hours</th>
            <th>Individual Report</th>
        </tr>
        <?php foreach ($filtered_result as $employee): ?>
            <tr>
                <td><?php echo $employee['employee_id']; ?></td>
                <td><?php echo $employee['Check_in']; ?></td>
                <td><?php echo $employee['Check_out']; ?></td>
                <td><?php echo $employee['Date']; ?></td>
                <td><?php echo $employee['office_hour']; ?> hours</td>
                <td><a href="Single_Employee_Report.php?id=<?php echo $employee['employee_id']; ?>">Click Here</a></td>
                
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>