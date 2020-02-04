<?php
require 'PHPMailerAutoload.php';

$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";
$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);
$email=($_POST['resetemail']);
    $usr = mysqli_real_escape_string($conn, $_POST['resetemail']);
    $em = "SELECT * FROM registration WHERE Email='$usr'";
    $flagmail = mysqli_query($conn, $em);
    if (mysqli_num_rows($flagmail) > 0) { 
        
           foreach($flagmail as $row){
         
         $name=$row['name'];
         }
        
        
        
        $encode=md5($email);
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'd8ac7f95d97bbc';                 // SMTP username
$mail->Password = '1c06beb3a72dba';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress($email);     // Add a recipient


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = '<a href=http://34.68.249.249/reg12/passwordresetlink.php?data='.$encode.' > Verify</a> ';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    
} else {
    echo 'Message has been sent';
  echo $name;
    echo $flagmail;

}
   
    
    


        
        
        
        
        
//         $encode = md5($email);
//         $sub = "BINGO";
//         echo($sub);

    }
    else{
        echo("Not Registered");
    }






?>



