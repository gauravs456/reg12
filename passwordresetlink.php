<!DOCTYPE html>
<html lang="en">
<head>
</head>

<link rel="stylesheet" href="styles.css">

<body>



<div class="form">
    <form id="login_form"  name="login_form" method="post" onsubmit = "return(validate());" >
        <div class="inputfield">
            <label>Your New Password</label>
            <input type="password" class="input" id="Emlogin" autocomplete="off" name="Emlogin"  onkeyup="emailvallogin(this.value);">
        </div>

        <div class="inputfield">
            <label> Confirm new  Password</label>
            <input type="password" class="input" id="Passlogin" name="Passlogin">
        </div>
        <div class="inputfield">
            <input type="submit"  id="loginbtn" value="Reset Password" name="loginbtn" class="btn">
        </div>

    </form>

</body>
</html>