<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">




</head>

<style>
    #up{
        font-size: 20px;
    }

</style>


<body>




<div class="wrapper" id="contain">
<div class="form">
    <h2 id="up" class="title">Welcome Back ! gaurav <h2>
    <form id="login_form" name="login_form" method="post" onsubmit="return(validate());">
        <div class="inputfield">
            <label>Your New Password</label>
            <input type="password" class="input" id="Emlogin" autocomplete="off" name="Emlogin"
                   onkeyup="emailvallogin(this.value);">
        </div>

        <div class="inputfield">
            <label> Confirm new Password</label>
            <input type="password" class="input" id="Passlogin" name="Passlogin">
        </div>
        <div class="inputfield">
            <input type="submit" id="loginbtn" value="Reset Password" name="loginbtn" class="btn">
        </div>

    </form>
</div>
</div>

</body>
</html>