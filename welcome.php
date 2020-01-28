
<?php
$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";
$flag= "";

$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['Email'])){
    $usr=mysqli_real_escape_string($conn,$_POST['Email']);
   $pass=mysqli_real_escape_string($conn,$_POST['Password']);
 $emailvalid = "SELECT * FROM registration WHERE Email='$usr' AND Password= '$pass'";
    $flagmail = mysqli_query($conn, $emailvalid);
    if(mysqli_num_rows($flagmail)>0){
        
        echo ("Welcome");
    }
    else{
        echo("Invalid username and password");
    }
}
$conn->close();

?>

