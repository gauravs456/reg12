<?php

 $db_name="id12313601_rtds";
    $mysql_username="id12313601_rtds";
    $mysql_password="16csu123";
    $server_name="localhost";
     $flag= "";
 

$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['Email'])){
    $usr=mysqli_real_escape_string($conn,$_POST['Email']);
$emailvalid = "SELECT * FROM registration WHERE Email='$usr'";
    $flagmail = mysqli_query($conn, $emailvalid);
    if(mysqli_num_rows($flagmail)>0){
        $flag=1;
         echo $flag;
    }
    else{
        $flag=0;
        echo $flag;
    }
   
}



$conn->close();
         

?>


