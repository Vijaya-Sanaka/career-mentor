<?php
$servername="localhost";
$username="root";
$password="";
$db="CAREER";
$sname=$_POST["name"];
$regno=$_POST["regno"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$course=$_post["course"];
$sql="INSERT INTO stuinfo (REGNO,NAME,GENDER,DOB,COURSE) values ('$regno','$sname','$gender','$dob','$course')";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
if(mysqli_query($conn,$sql))
{
    echo "<h1><center>Values inserted successfully</center></h1>";
}
else{
    echo "Error inserting values in database".mysqli_error($conn);
}
mysqli_close($conn);
?>