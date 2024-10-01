<?php
$servername="localhost";
$username="root";
$password="";
$db="CAREER";
$fname=$_POST["fname"];
$sql="SELECT * FROM register_info where fname='$fname'";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
$result=mysqli_query($conn,$sql);
?>
<h1>Registree information</h1>
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
</table>

<?php
}
mysqli_close($conn);
?>
