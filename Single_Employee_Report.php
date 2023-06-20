<?php
     include_once('db.inc.php');

        $id = $_GET['id'];
        $empsql = "SELECT * FROM employee where id='".$id."' ";
        $sql = "SELECT * FROM dailyreport where employee_id='".$id."'";

        $user = $conn->query($empsql);
        $result = $conn->query($sql);

        while ($row = $user->fetch_assoc()) {
            $username = $row['username'];
        }

        $filtered_result = array();
        while ($row = $result->fetch_assoc()) {
            $filtered_result[] = $row;
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
    <h1 class = "a"><?php echo $username; ?></h1>
    <table>
        <tr>
            <th>Check_in</th>
            <th>Check_out</th>
            <th>Date</th>
            <th>Ofice Hours</th>
        </tr>
        <?php foreach ($filtered_result as $employee): ?>
            <tr>
                <td><?php echo $employee['Check_in']; ?></td>
                <td><?php echo $employee['Check_out']; ?></td>
                <td><?php echo $employee['Date']; ?></td>
                <td><?php echo $employee['office_hour']; ?> hours</td>
                
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>