<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<?php

$username=$_GET['username'];
$password=$_GET['password'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];

//echo $username;

$con= mysqli_connect('localhost','root','','db_test');
if ($con)
{
    echo "<h1>You Have been registered successfully</h1>";
    echo "<br>";
}
else {
    die("connection failed".mysqli_connect_error());
}
$query = "insert into tbl_register values('$username','$password','$email','$mobile')";

//$query = "insert into tbl_register values('1','1','1','1')";

$data= mysqli_query($con, $query);

if($data)
{
    echo "Data inserted successfully";
}
?>