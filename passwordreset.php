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
    $subject = "Reset your password on tempmail.com";
    $msg = "Hi there, click on this <a href=\"new_password.php?token=" . $encode . "\">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers = "From: info@examplesite.com";
    mail($to, $subject, $msg, $headers);
    header('location: pending.php?email=' . $email);  
        
        
        
        
        
        
      echo ($email);
    }
    else{
        echo ("Sorry You  are not registered");
        echo($usr);

        }




}

$conn->close();


?>
