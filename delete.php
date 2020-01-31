<?php
$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";
$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);

$id = $_POST['id'];
$query = "DELETE FROM registratioon  WHERE id='$id'  ";
$query_run = mysqli_query($conn, $query);

if($query_run)
{

    echo '<script> alert("Data Updated"); </script>';
    header("Location:http://34.68.249.249/reg12/homepage.php");
}
else
{
    echo ("Fail");

    echo '<script> alert("Data Not Updated"); </script>';
}

?>
