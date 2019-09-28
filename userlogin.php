<?php
$servername = "localhost:3306";
$username = "root";
$password = "billu1999";
$dbname = "techathon";
$user=$_POST['user'];

echo "hello";
$password=$_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="select * from user where user='$user' and password='$password';";
$res=mysqli_query($conn,$sql);
$rows=mysqli_num_rows($res);
if($rows>0)
{
	echo " welcome admin! ";
}
else
{
	echo "error";
}
?>