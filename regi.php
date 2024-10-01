<?php
$servername="localhost";
$username="root";
$password="";
$db="CAREER";
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$class=$_POST["class"];
$course=$_POST["course"];

$sql="INSERT INTO register_info (fname,lname,email,pass,class,course) values ('$fname','$lname','$email','$pass','$class','$course')";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
if(mysqli_query($conn,$sql))
{
    echo "<h1><center>Values inserted successfully</center></h1>";
    header("Location: main.html");
}
else{
    echo "Error in Registering process.....!contact Admin".mysqli_error($conn);
}
mysqli_close($conn);
?>
