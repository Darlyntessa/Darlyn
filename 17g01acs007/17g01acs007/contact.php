<?php
include('connection.php');
if(isset($_POST['submit_form']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$message=$_POST['message'];


$sql="INSERT INTO contact(name,email,tel,message) VALUES('$name','$email','$tel','$message')";
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