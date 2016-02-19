<?php
require('database.php');
//echo 'this is the page';

if(isset($_POST['submit'])){
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    
    //$insert_query = "INSERT INTO shouts VALUES()";

// set time zone
    date_default_timezone_get('Nigeria/ Lagos');
    $time = date('Y-m-d H:i:s', time());
    
    //validate input
    if(!isset($user) || $user == "" || !isset($message) || $message == ""){
        //echo 'You have to fill all fields '.$time;
        $error = 'You need to fill all fields';
        header('Location: index.php?error='.urlencode($error));
    }else{
        $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";
        if(!mysqli_query($con, $query)){
            die('Error :'.mysqli_error($con));
        }else{
            header("Location: index.php");
            exit();
        }
    }
}
?>