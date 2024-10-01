<?php
$servername="localhost";
$username="root";
$password="";
$dbname="CAREER";
$conn=mysqli_connect($servername,$username,$password,$dbname);
$name=$_POST["sname"];
$roll=$_POST["sroll"];
$dob=$_POST["sdob"];
$gen=$_POST["sgen"];
$cor=$_POST["course"];
$ph=$_POST["snum"];
$sql="INSERT INTO pract (stname,stroll,stdob,stgen,stcor,stph) values('$name','$roll','$dob','$gen','$cor','$ph')";
if(!$conn)
{
    die("connection error".mysqli_connec_error());
}
if(mysqli_query($conn,$sql))
{
    echo "Values inserted successfully";
    Header("Location:inview.html");
}
else{
    echo "error".mysqli_error();
}
mysqli_close($conn);
?>