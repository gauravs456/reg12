<?php

$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";


$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['Email'])){
    $usr=mysqli_real_escape_string($conn,$_POST['Email']);
    $email = "SELECT * FROM registration WHERE Email='$usr'";
    $flagmail = mysqli_query($conn, $email);
    if(mysqli_num_rows($flagmail)>0){
      $encode=md5($email);
        
   $to = $email;
$subject = "YUPPSS";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
        
        
        
        
        
        
      echo ($email);
    }
    else{
        echo ("Sorry You  are not registered");
        echo($usr);

        }




}

$conn->close();


?>
