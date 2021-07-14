<?php
ini_set('display_errors','off');
error_reporting('0');
$servername="sql202.epizy.com";
$username="epiz_24949265";
$password="dN8eZuTR7CwuSJ";
$dbname="epiz_24949265_fidibo";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    echo '<p>Error'.mysqli_connect_error().'</p>';
} else {
    mysqli_set_charset($conn, "UTF8");
}



