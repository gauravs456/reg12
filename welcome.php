<?php
$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";
$flag= "";
$name="";
$email="";
$gender="";
$phone="";
session_start();

$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['Emlogin'])){
    $usr=mysqli_real_escape_string($conn,$_POST['Emlogin']);
    $pass=mysqli_real_escape_string($conn,$_POST['Passlogin']);
    $emailvalid = "SELECT * FROM registration WHERE Email='$usr' AND Password= '$pass'";
    $flagmail = mysqli_query($conn, $emailvalid);
    if(mysqli_num_rows($flagmail)>0){

        $flag=1;
        echo $flag;

        while($row = $flagmail->fetch_assoc()) {
            $_SESSION['name']=$name;
             $_SESSION['gender']=$gender;
             $_SESSION['email']=$email;
             $_SESSION['phone']=$phone;
            $_SESSION['postal']=$postalcode;
//             echo "Name: " . $row["name"]. " - Email: " . $row["email"].  "<br>";
        }
    
     
        
        //         header("Location: http://34.68.249.249/reg12/loginwelcome.php");
    }
    else{
        $flag=0;
        echo $flag;
    }
}
else{

    echo("ERROR");
}


$conn->close();

?>

