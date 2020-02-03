<?php

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
        $sub = "BINGO";

        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = "test@hostinger-tutorials.com";
        $to = "gevece5071@riv3r.net";
        $subject = "Checking PHP mail";
        $message = "PHP mail works just fine";
        $headers = "From:" . $from;
        mail($to, $subject, $message, $headers);
        echo "The email message was sent.";


    }
    else{
        echo("Not Registered");
    }
}

    $conn->close();


    ?>
