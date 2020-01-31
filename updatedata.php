<?php
$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";
$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);

if(!isset($_POST['updatedata']))
{
    $id = $_POST['id'];
    
     $name=mysqli_real_escape_string($conn,$_POST['name']);
     $gender=mysqli_real_escape_string($conn,$_POST['gender']);
 $email=mysqli_real_escape_string($conn,$_POST['email']);
    $phone=mysqli_real_escape_string($conn,$_POST['phone']);

    $query = "UPDATE registration SET name='$name', gender='$gender', email='$email', phone=' $phone' WHERE id='$id'  ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "Success";
        echo ($name);
        echo ($gender);
        echo ($email);
        echo ($phone);
//        echo '<script> alert("Data Updated"); </script>';
//        header("Location:index.php");
    }
    else
    {
        echo ("Fail");

//        echo '<script> alert("Data Not Updated"); </script>';
    }
}
?>
