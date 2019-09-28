<?php
$servername = "localhost:3306";
$username = "root";
$password = "billu1999";
$dbname = "techathon";

$user=$_POST['username'];
$password1=$_POST['password'];
echo $user;
echo $password1;
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$result = mysqli_query($conn,"SELECT * FROM user WHERE uid='" . $user . "' and password = '". $password1."'");
$count  = mysqli_num_rows($result);


if($count>0)
{
	echo " welcome admin! ";
}
else
{
	echo "error";
}
?>
