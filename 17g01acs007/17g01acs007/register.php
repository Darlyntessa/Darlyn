<?php
include('connection.php');
if(isset($_POST['submit_form']))
{
$first=$_POST['first'];
$last=$_POST['last'];
$username=$_POST['username'];
md5($pass=$_POST['password']);


$sql="INSERT INTO members(firstName,lastName,username,password) VALUES('$first','$last','$username','$pass')";
$sql_run=mysqli_query($con,$sql);
}else{

}
if($sql_run)
{
session_start();
header('location:successfulLogin.php');
}else{

}

?>