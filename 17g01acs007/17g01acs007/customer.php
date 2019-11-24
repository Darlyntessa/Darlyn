<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="js/jquery"></script>
    <script src = "bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="home1.css">
    <link rel="stylesheet" href="home.css">
</head>
<body >

<div class="jumbotron" style="background-color:#212529">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img src="pic3.jpg" alt="" height="50px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



</div>

<div class="col-sm-8 text-left" style="background-color:white; width:100%; box-shadow:0px 8px 8px 2px rgba(0,0,0,0.6)"> 

<div class="container">
<table class="table table-striped">
        <thead>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>

          
            <th>Access</th>
            <th>Delete</th>
            
        </thead>
<tbody>
<?php
include('patientcon.php');
$sql="SELECT * FROM members";
$sql_run=mysqli_query($con,$sql);

function your_function() {
if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from room where id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}
}

while($rows=mysqli_fetch_row($sql_run))
{
echo'
<tr>
<td>'.$rows[0].'</td>
<td>'.$rows[1].'</td>
<td>'.$rows[2].'</td>


<td> <a class="btn btn-outline-success"href="detail.php?id='.$rows[0].'">access</a></td>
<td><a  class="btn btn-outline-danger"href="customer.php?del='.$rows[0].'">Delete</a></td>
</tr>
';
}

?>
</tbody>
    </table>

</div>
<div>
    
</div>

    </div>


</div>
</div> 
<footer>
<p style="background-color:#212529; padding:20px; margin-top:150px"></p>
</footer>


</body>
</html>
