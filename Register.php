<?php

 $db_name="rtds1";
    $mysql_username="puppy";
    $mysql_password="Puppy@123";
    $server_name="34.68.249.249";
     
 
$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['Name'])){
    $name=mysqli_real_escape_string($conn,$_POST['Name']);
}
if(isset($_POST['Gender'])){
    $gender=mysqli_real_escape_string($conn,$_POST['Gender']);

}
if(isset($_POST['Phone'])){
    $phone=mysqli_real_escape_string($conn,$_POST['Phone']);
}
if(isset($_POST['PostalCode'])){
    $postalcode=mysqli_real_escape_string($conn,$_POST['PostalCode']);
}
if(isset($_POST['Password'])){
    $password=mysqli_real_escape_string($conn,$_POST['Password']);
}
 
if(isset($_POST['Email'])){
    $usr=mysqli_real_escape_string($conn,$_POST['Email']);
}

if(isset($_POST['validateflag'])){
    $usr11=mysqli_real_escape_string($conn,$_POST['validateflag']);

   
}

$emailvalid = "SELECT * FROM registration WHERE Email='$usr'";
    $flagmail = mysqli_query($conn, $emailvalid);
    if(mysqli_num_rows($flagmail)>0){
     echo ("Sorry Could Not register");
    
    }
    else{
     
     $sql = "INSERT INTO registration(name,gender,email,phone,postalcode,password) VALUES ('$name','$gender','$usr','$phone','$postalcode','$password')";

            if (mysqli_query($conn, $sql)) {
            $json = json_encode("Success");
              echo("SUCCESS");
            } else {
              echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        
    }

   $conn->close();





// if(($usr11==0)  && !empty($name)  ){
    
// $_POST['validateflag']=1;
 
//  $usrl1=1;
 
//         $sql = "INSERT INTO registration(name,gender,email,phone,postalcode,password) VALUES ('$name','$gender','$usr','$phone','$postalcode','$password')";

//             if (mysqli_query($conn, $sql)) {
//             $json = json_encode("Success");
//               echo("SUCCESS");
//              echo ($usrl1);
             

           
               
//             } else {
//               echo "Error: " . $sql . "" . mysqli_error($conn);
//             }
        
    
// }
// else{
//     echo("Coud not register");



// }

         

?>


