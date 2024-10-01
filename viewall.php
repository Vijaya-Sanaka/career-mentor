<?php
$servername="localhost";
$username="root";
$password="";
$db="CAREER";
$sql="SELECT * FROM student";
$conn=mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
    die("Connection failed : ".mysqli_connect_error());
}
$result=mysqli_query($conn,$sql);
?>
<h1>student information</h1>
<table border="4">
    <tr>
        <th>regno</th>
        <th>student name</th>
        <th>gender</th>
        <th>dob</th>
        <th>course</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result))
    {
    ?>
    <tr>
        <td><?php echo $row["regno"]?> </td>
        <td><?php echo $row["sname"]?> </td>
        <td><?php echo $row["gender"]?> </td>
        <td><?php echo $row["dob"]?> </td>
        <td><?php echo $row["dep"]?> </td>
    </tr>
<?php
    }
?>
</table>
<?php
mysqli_close($conn);
?>
