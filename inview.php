<?php
$sn="localhost";
$un="root";
$pwd="";
$db="CAREER";
$name=$_POST["sname"];
$conn=mysqli_connect($sn,$un,$pwd,$db);
if(!$conn)
{
    die("connect error".mysqli_connect_error());
}
$sql="select * from pract where stname='$name'";
$res=mysqli_query($conn,$sql);
    ?>
    <h2>STUDENT PROFILE</h2>
    <table border="4">
        <tr>
            <th>Name</th>
            <th>roll</th>
            <th>dob</th>
            <th>gender</th>
            <th>course</th>
            <th>phone</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($res))
        {
           ?>
            <tr>
            <td><?php echo $row["stname"]?></td>
            <td><?php echo $row["stroll"]?></td>
            <td><?php echo $row["stdob"]?></td>
            <td><?php echo $row["stgen"]?></td>
            <td><?php echo $row["stcor"]?></td>
            <td><?php echo $row["stph"]?></td>
        </tr> 
        <?php
        }
        ?>
        </table>
        
<?php
mysqli_close($conn);
 ?>