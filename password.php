<?php
    echo "<br>";
    $email=$_POST["email"];
    $passw=$_POST["pwd"];
    $sn="localhost";
    $un="root";
    $pass="";
    $db="CAREER";

    $conn=mysqli_connect($sn,$un,$pass,$db);

    if(!$conn)
    {
        die("Connection Failed:".mysqli_connect_error());
    }
    $sql="UPDATE register_info SET pass='$passw' WHERE email='$email'";
    if(mysqli_query($conn,$sql))
    {
        header("Location: main.html");
    }
    else{
        echo "error".$sql."<br>".mysqli_error($conn);
    }
    mysqli_close($conn);
?>

