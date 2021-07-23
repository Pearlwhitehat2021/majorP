<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$email=$_GET['email'];
$sub=$_GET['sub'];
$message=$_GET['message'];

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
$query = "insert into contact values('$fname','$lname','$email','$sub','$message')";
$data= mysqli_query($con, $query);


if($data)
{
    echo "Data inserted successfully";
}
?>