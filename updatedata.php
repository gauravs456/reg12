<?php
$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";
$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);

if(isset($_POST['updatedata']))
{
    $id = $_POST['id'];

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "UPDATE registration SET name='$name', gender='$gender', email='$email', phone=' $phone' WHERE id='$id'  ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "Success";
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