<?php
include './conn.php';

    $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject =  $_REQUEST['subject'];
        $content = $_REQUEST['message'];
    $date=date("d-m-Y");
    $sql = "INSERT INTO `contact`(`name`, `email`, `date`, `message`, `subject`) VALUES ('$name','$email','$date','$content','$subject')";
    if(mysqli_query($conn, $sql)){
        echo "success";

    }else{
        echo mysqli_error($conn);
    }

    

?>