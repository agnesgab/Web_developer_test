<?php 

$conn = mysqli_connect('localhost', 'test', '', 'mb_test');

if(!$conn){
    echo "Connection error:" . mysqli_connect_error();
}

?>