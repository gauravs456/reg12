<?php

 $db_name="id12313601_rtds";
    $mysql_username="id12313601_rtds";
    $mysql_password="16csu123";
    $server_name="localhost";

// $Name=$_POST['Name'];
// $Gender=$_POST['Gender'];
//  $Email=$_POST['Email'];
// $Phone=$_POST['Phone'];
// $PostalCode=$_POST['PostalCode'];
// $Password=$_POST['Password'];
$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['Email'])){
    $usr=mysqli_real_escape_string($conn,$_POST['Email']);
$emailvalid = "SELECT * FROM registration WHERE Email='$usr'";

   
    $flagmail = mysqli_query($conn, $emailvalid);
    echo mysqli_num_rows($flagmail);
}

    // else{
    // // $sql = "INSERT INTO registration(Name,Gender,Email,Phone,PostalCode,Password) VALUES ('$Name','$Gender','$Email','$Phone','$PostalCode','$Password')";

    // //         if (mysqli_query($conn, $sql)) {
    // //         $json = json_encode("Success");
    // //           echo '2';
           
               
    // //         } else {
    // //           echo "Error: " . $sql . "" . mysqli_error($conn);
    // //         }
        
    // }
 
    



$conn->close();
         

?>


