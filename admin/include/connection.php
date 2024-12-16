<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "tintuc";

$conn = mysqli_connect($dbhost , $dbuser , $dbpass , $dbname);

if(!isset($conn)){
    echo die("Kết nối cơ sở dữ liệu không thành công");
}
?>