<?php
$servername="localhost";
$username="root";
$password="";
$db="CAREER";
$email=$_POST["email"];
$pass=$_POST["pwd"];
$sql="SELECT fname from register_info where email='$email' AND pass='$pass' ";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     header("Location: main.html");
}
else{
     header("Location: incorrect.html");
}
mysqli_close($conn);
?>
