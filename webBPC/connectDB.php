<?php 

$server=$_SERVER['HTTP_HOST'];
$username="root";
$password="";
$database="bitbpc-1";
$conn=mysqli_connect($server,$username,$password,$database);
mysqli_query($conn,"SET character set utf8");
if(!$conn){
    die("Connection Error");
}
error_reporting(E_ALL ^ E_NOTICE);

?>