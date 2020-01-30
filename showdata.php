<?php

$db_name="rtds1";
$mysql_username="puppy";
$mysql_password="Puppy@123";
$server_name="34.68.249.249";
$conn = new mysqli($server_name, $mysql_username, $mysql_password, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Attempt select query execution
$sql = "SELECT * FROM registration";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Gender</th>";
        echo "<th>Email</th>";
        echo "<th>Phone</th>";
        echo "<th>PostalCode</th>";
        echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['postalcode'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>




<?php
include('welcome.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script>

        function myready() {


            $.ajax({
                url: 'http://34.68.249.249/reg12//logour.php',
                method: "POST",
                success: function (result) {
                    if (result == 1) {
                        window.location.href = 'http://34.68.249.249/reg12/index.php';
                    } else {

                    }
                }
            });


        }







    </script>











    <style>
        body {
            font-family: "Lato", sans-serif;
            background: #e8eff5;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;

            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .headingfont{
            color: dimgrey;
        }


        .upperhead{
            float: right;
            margin: auto;

        }

        .rectangle{
            width: 100%;
            height: 100%;
            background: rgba(122, 120, 127, 0.31);
            border-radius: 10px;
        }
        .inputfield{
            margin-left: 2%;
        }

        .rectangle{
            background: white;
        }


        #main {
            transition: margin-left .5s;
            padding: 16px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {padding-top: 15px;}
            .sidenav a {font-size: 18px;}
        }
    </style>
</head>
<body>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h2  style="margin-left: 10%;color: #f1f1f1" id="profilename" ><?php echo  $_SESSION['name'] ?></h2>
    <hr>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
    <a  onclick="myready();">logout</a>




</div>
<div id="main">
    <h2 class="upperhead">Hello <?php echo  $_SESSION['name'] ?></h2>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <hr>
    <h2  class="headingfont" style="margin-top: 1% ">Overview</h2>















    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
    </script>
</div>
</body>
</html>


