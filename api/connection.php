<?php
$connect = mysqli_connect("localhost", "root", "", "online-voting-system");
if($connect)
{
    echo"Connected";
}
else{
    echo"Not connected";
}
?>