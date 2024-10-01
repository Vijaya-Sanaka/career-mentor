<?php
include("links.html");
$servername="localhost";
$username="root";
$password="";
$db="CAREER";
$name=$_POST["fname"];
$passw=$_POST["password"];
if($name=="admin" && $passw="admin@123")
{
$sql="SELECT * FROM register_info";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
$result=mysqli_query($conn,$sql);
?>
<h1>Information of Booking</h1>
<table border="4">
    <tr>
        <th>FIRSTNAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>PASS</th>
        <th>CLASS</th>
        <th>COURSE</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
    <td><?php echo $row["fname"]?> </td>
        <td><?php echo $row["lname"]?> </td>
        <td><?php echo $row["email"]?> </td>
        <td><?php echo $row["pass"]?> </td>
        <td><?php echo $row["class"]?> </td>
        <td><?php echo $row["course"]?> </td>
    </tr>
<?php
    }
}
else 
{
    echo "Access denied.";
}
?>
</table>
<?php
mysqli_close($conn);
?>
