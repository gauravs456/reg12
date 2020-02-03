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
        $sub="BINGO";
$to='gevece5071@riv3r.net';
$Host:	'smtp.mailtrap.io';
$Port: '2525';
$Username:	'd8ac7f95d97bbc';
$Password:	'1c06beb3a72dba';
 $mime = new Mail_mime();
 $text="Hello msg send from the server";
 $body = $mime->get();
$mime->setTXTBody($text);
$smtp = Mail::factory('smtp', [
  'host' => $host,
  'auth' => true,
  'username' => $username,
  'password' => $password,
  'port' => $port
]);
$mail = $smtp->send($to,$body);
        if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}

        
        
        
   
    }
    else{
        echo ("Sorry You  are not registered");
        echo($usr);

        }




}

$conn->close();


?>
