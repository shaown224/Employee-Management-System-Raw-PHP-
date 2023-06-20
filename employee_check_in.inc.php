<?php
include_once 'db.inc.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    date_default_timezone_set('Asia/Dhaka');
    $bool = 1;

    $date = date('Y-m-d');
    $time = date('H:i:s');


    $checkIdQuery = "SELECT * FROM dailyreport WHERE employee_id = '$id' AND Date = '$date' ";
    $result = $conn->query($checkIdQuery);

    if ($result->num_rows > 0) {
      header("Location: employee_home_checkin.php?bool=".$bool);
    } else {
        
        $sql = "INSERT INTO dailyreport (employee_id, Date, Check_in) VALUES ('$id', '$date', '$time')";

        if ($conn->query($sql) === TRUE) {
            echo "Data inserted successfully";
            header("Location: employee_home_checkout.php?id=".$id);
        } else {
            echo "Error inserting data";
        }
    }

   

}
?>
