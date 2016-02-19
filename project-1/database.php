<?php
$db_user = 'root';
$db_pass = '';
$db_name = 'shoutit';
$db_host = 'localhost';

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if(mysqli_connect_errno()){
    echo 'Connection failed '.mysqli_connect_errno();
}/*else{
    echo 'Successful connection';
}*/

?>