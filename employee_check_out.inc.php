<?php
  include_once 'db.inc.php';
  
  if(isset($_POST['id'])){

    $id = $_POST['id'];

    echo "id" .$id;

    date_default_timezone_set('Asia/Dhaka');

    $date = date('Y-m-d');
    $time = date('H:i:s');

    $sql = "SELECT * FROM dailyreport WHERE employee_id = '$id' AND Date = '$date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        $check_in = new DateTime($row['Check_in']);
        $check_out = new DateTime($time);

        $difference = $check_in->diff($check_out);

        $office_hours = $difference->h + ($difference->days * 24);

        $office_hours = strval($office_hours);


        $updateQuery = "UPDATE dailyreport SET Check_out = '$time',office_hour='$office_hours' WHERE employee_id = '$id' AND Date = '$date'";

        if ($conn->query($updateQuery) === TRUE) {
            echo "Report updated successfully";
            header("Location: employee_home_checkin.php?bool=");
        } else {
            echo "Error updating report: ";
        }
    } else {
       
            echo "Error to Update report: ";
        
    }
}
?>
