<?php
use PHPMailer\PHPMailer\PHPMailer;

$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";


$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['Email'])) {
    $usr = mysqli_real_escape_string($conn, $_POST['Email']);
    $email = "SELECT * FROM registration WHERE Email='$usr'";
    $flagmail = mysqli_query($conn, $email);
    if (mysqli_num_rows($flagmail) > 0) {
        $encode = md5($email);
      
        $mail = new PHPMailer;
$mail->isSMTP();
          $sub = "BINGO";
        echo($sub);
// $mail->SMTPDebug = 2;
// $mail->Host = 'smtp.mailtrap.io';
// $mail->Port = 587;
// $mail->SMTPAuth = true;
// $mail->Username = 'd8ac7f95d97bbc';
// $mail->Password = '1c06beb3a72dba';
// $mail->setFrom('test@hostinger-tutorials.com', 'Your Name');
// $mail->addReplyTo('test@hostinger-tutorials.com', 'Your Name');
// $mail->addAddress('gevece5071@riv3r.net', 'Receiver Name');
// $mail->Subject = 'Testing PHPMailer';
// $mail->msgHTML(file_get_contents('message.html'), __DIR__);
// $mail->Body = 'This is a plain text message body';
// //$mail->addAttachment('test.txt');
// if (!$mail->send()) {
//     echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'The email message was sent.';
// }

        
        
        

    }
    else{
        echo("Not Registered");
    }
}

$conn->close();


?>
