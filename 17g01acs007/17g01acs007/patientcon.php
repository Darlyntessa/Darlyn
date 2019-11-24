<?php
$server='localhost';
$user='root';
$password='';
$db='darlynT';
$con= mysqli_connect($server,$user,$password,$db);
if(!$con)
{
    die("The database could not be selected".mysqli_connect_error());
}
?>