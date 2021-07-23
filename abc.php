<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
$email=$_GET['email'];
//echo $username;

$con= mysqli_connect('localhost','root','','emp');
if ($con)
{
    echo "Connection ok";
    echo "<br>";
}
else {
    die("connection failed".mysqli_connect_error());
}

//$query = "insert into tbl_register values('1','1','1','1')";
$query = "insert into dbo_newsletter values('$email')";
$data= mysqli_query($con, $query);


if($data)
{
    echo "Data inserted successfully";
}
?>