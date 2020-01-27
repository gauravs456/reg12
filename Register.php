<?php

 $db_name="id12313601_rtds";
    $mysql_username="id12313601_rtds";
    $mysql_password="16csu123";
    $server_name="localhost";
     $flag= "";
 
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
if(isset($_POST['Name'])){
    $Name=mysqli_real_escape_string($conn,$_POST['Name']);
}
if(isset($_POST['Gender'])){
    $Gender=mysqli_real_escape_string($conn,$_POST['Gender']);

}
if(isset($_POST['Phone'])){
    $Phone=mysqli_real_escape_string($conn,$_POST['Phone']);
}
if(isset($_POST['PostalCode'])){
    $PostalCode=mysqli_real_escape_string($conn,$_POST['PostalCode']);
}
if(isset($_POST['Password'])){
    $Password=mysqli_real_escape_string($conn,$_POST['Password']);
}
 
$usr11="";


if(isset($_POST['Email'])){
    $usr=mysqli_real_escape_string($conn,$_POST['Email']);
}

if(isset($_POST['validateflag'])){
    $usr11=mysqli_real_escape_string($conn,$_POST['validateflag']);

   
}


if(($usr11==0)  && !empty($Name)  ){
    
        $sql = "INSERT INTO registration(Name,Gender,Email,Phone,PostalCode,Password) VALUES ('$Name','$Gender','$usr','$Phone','$PostalCode','$Password')";

            if (mysqli_query($conn, $sql)) {
            $json = json_encode("Success");
              echo("SUCCESS");
              
           
               
            } else {
              echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        
    
}
else{
    echo("Coud not register");
}



// if($flag==0){
//         $sql = "INSERT INTO registration(Name,Gender,Email,Phone,PostalCode,Password) VALUES ('$Name','$Gender','$usr','$Phone','$PostalCode','$Password')";

//             if (mysqli_query($conn, $sql)) {
//             $json = json_encode("Success");
//               echo '2';
           
               
//             } else {
//               echo "Error: " . $sql . "" . mysqli_error($conn);
//             }
        
    
// }
// else{
//     echo("Coud not register");
// }

   


$conn->close();
         

?>


