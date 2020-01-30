<?php
include('welcome.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <script>

        $(document).ready(function(){
            $("#logout").click(function(){
                $.ajax({
                    url: 'http://34.68.249.249/reg12//logour.php',
                    method:"POST",
                    success: function(result){
                        if(result==1){
                            window.location.href = 'http://34.68.249.249/reg12/index.php';
                        }
                        else
                        {

                        }
                    }
                });





            });
        });





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
    <input type="Button"  id="logout" value="Register"  class="btn">



</div>
<div id="main">
    <h2 class="upperhead">Hello <?php echo  $_SESSION['name'] ?></h2>
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <hr>
    <h2  class="headingfont" style="margin-top: 1% ">Overview</h2>



    <div class="rectangle">
        <div class="inputfield">
            <label>Name</label>
            <h2 style="display: inline-block; margin-left: 1%"><?php echo  $_SESSION['name'] ?></h2>

        </div>

        <div class="rectangle">
            <div class="inputfield">
                <label>Gender</label>
                <h2 style="display: inline-block; margin-left: 1%"><?php echo  $_SESSION['gender'] ?></h2>

            </div>

            <div class="rectangle">
                <div class="inputfield">
                    <label>Email Address</label>
                    <h2 style="display: inline-block; margin-left: 1%"><?php echo  $_SESSION['email'] ?></h2>

                </div>

                <div class="rectangle">
                    <div class="inputfield">
                        <label>Phone</label>
                        <h2 style="display: inline-block; margin-left: 1%"><?php echo  $_SESSION['phone'] ?></h2>

                    </div>
                </div>



            </div>





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

</body>
</html>
