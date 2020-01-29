<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        var validateflag="";
        $('#validateflag').val("Gee");
        $(document).ready(function(){
            $('#Email').keyup(function(){

                var Email = $(this).val();


                $.ajax({
                    url:'http://34.68.249.249/reg12//emailcheck.php',
                    method:"POST",
                    data:{Email:Email},
                    success:function(data)
                    {

                        if(emailflag==true){
                            if(data==1){
                                validateflag=data;

                                $('#availability').html('<p style="color:red "  >Email Id already Exist</p>');

                            }
                            else{
                                validateflag=data;
                                $('#availability').html('<p style="color:green"> Available</p>');
                            }
                        }


                    }
                })

            });
        });
    </script>
    <script>
        $(document).ready(function(){
            $('input').blur(function(){

                $('input[name="validateflag"]').val(validateflag);

            });
        });
    </script>






    <script>

        $(document).ready(function(){
            $('#loginbtn').onclick(function(){
                alert("HELLO");
                var Emailogin = document.getElementById("Emlogin");
                var passlogin  =document.getElementById("Passlogin");
                alert(Emailogin);
                alert(passlogin;


                $.ajax({

                    url:'http://34.68.249.249/reg12//emailcheck.php',
                    method:"POST",
                    data:{Email:Email},
                    success:function(data)
                    {

                        if(emailflag==true){
                            if(data==1){
                                validateflag=data;

                                $('#availability').html('<p style="color:red "  >Email Id already Exist</p>');

                            }
                            else{
                               alert("HEHE");
                            }
                        }


                    }
                })

            });
        });
    </script>




</head>
<body>
<script type="text/javascript">
    function validate() {
        if(nameflag==true && passwordflag==true&& phoneflag==true&& postalflag==true && emailflag==true){

            return true;
        }
        else{

            return false;

        }
        window.onbeforeunload = function() { return "You work will be lost."; };
        return( true );

    }
    var emailflag;
    var nameflag;
    var phoneflag;
    var passwordflag;
    var confirmpasswordflag;
    var postalflag;
    function Gender(){
        var e = document.getElementById("Gender");
        var strUser = e.options[e.selectedIndex].value;
        alert(strUser);
    }
    function nameval(name){
        var reg = /^([a-zA-Z]{3,30}\s*)+$/;
        if (reg.test(name) == false)
        {
            nameflag=false;
            document.getElementById('Name').style.color = 'red';
            document.getElementById('Name').style.borderColor = "red";
        }

        else{
            nameflag=true;
            document.getElementById('Name').style.color = 'green';
            document.getElementById('Name').style.borderColor = "green";
        }

    }
    function emailval(emailid){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(emailid) == false)
        {
            document.getElementById('Email').style.color = 'red';
            document.getElementById('Email').style.borderColor = "red";
            emailflag=false;

        }

        else{
            emailflag=true;
            document.getElementById('Email').style.color = 'green';
            document.getElementById('Email').style.borderColor = "green";
        }

    }
    function emailvallogin(emailid){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(emailid) == false)
        {
            document.getElementById('Emlogin').style.color = 'red';
            document.getElementById('Emlogin').style.borderColor = "red";
            emailflag=false;

        }

        else{
            emailflag=true;
            document.getElementById('Emlogin').style.color = 'green';
            document.getElementById('Emlogin').style.borderColor = "green";
        }

    }
    var check = function() {

        var x= document.getElementById('Password').value;
        var y=document.getElementById('ConfirmPassword').value;

        if(document.getElementById('Password').value.length<6){
            document.getElementById('Password').style.color = 'red';
            document.getElementById('ConfirmPassword').style.color = 'red';
            document.getElementById('ConfirmPassword').style.borderColor = "red";
            document.getElementById('Password').style.borderColor = "red";
            passwordflag=false;
        }


        else if (document.getElementById('Password').value ==
            document.getElementById('ConfirmPassword').value ) {
            passwordflag=true;
            document.getElementById('Password').style.color = 'green';
            document.getElementById('ConfirmPassword').style.color = 'green';
            document.getElementById('ConfirmPassword').style.borderColor = "green";
            document.getElementById('Password').style.borderColor = "green";
        }


        else {
            passwordflag=false;
            document.getElementById('Password').style.color = 'red';
            document.getElementById('ConfirmPassword').style.color = 'red';
            document.getElementById('Password').style.borderColor = "red";
            document.getElementById('ConfirmPassword').style.borderColor = "red";
        }
    }
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;
        return true;
    }
    function phoneval(phone){
        var reg = /^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/;
        if(reg.test(phone) == false){
            document.getElementById('Phone').style.color = 'red';
            document.getElementById('Phone').style.borderColor = "red";
            phoneflag=false;
        }
        else{
            phoneflag=true;
            document.getElementById('Phone').style.color = 'green';
            document.getElementById('Phone').style.borderColor = "green";

        }
    }
    function postal(postal){

        if(postal.length==6){
            document.getElementById('PostalCode').style.color = 'green';
            document.getElementById('PostalCode').style.borderColor = "green";
            postalflag=true;

        }
        else{
            postalflag=false;
            document.getElementById('PostalCode').style.color = 'red';
            document.getElementById('PostalCode').style.borderColor = "red";

        }
    }
    function submit(){
        var pass=document.getElementById('Name').value;
        var email=document.getElementById('Email').value;
        var pass=document.getElementById('Password').value;
        var confirmpass=document.getElementById('ConfirmPassword').value;
        var phone=document.getElementById('Phone').value;
        if(nameflag==true && passwordflag==true&& phoneflag==true&& postalflag==true && emailflag==true){



        }
        else{


        }
    }
    var formType = 0;
    function formToggle() {
        // flip function for formType value

        formType++;
        formType = formType % 2;


        // If it's a signup form
        if (formType === 1) {

            // Hide login elements
            $("#signup").slideDown(250);


            // Show signup elements
            $("#login_form").slideUp(250);

            var elem = document.getElementById("reg");
            elem.value="Login";

            document.getElementById("up").innerHTML="Registration Form";

        }

        // If it's a login form
        if (formType === 0) {

            // Hide signup elements
            $("#signup").slideUp(250);
            var elem = document.getElementById("reg");
            elem.value="Register";
            document.getElementById("up").innerHTML="Login Form";

            // Show Login elements
            $('#login_form').slideDown(250);
        }
    };
</script>


<div class="wrapper" id="contain">

    <div  class="title">
        <h3 id="up" class="title">Login Form<h3>
    </div>





    <div class="form">
        <form id="login_form"   name="login_form" method="post" action="http://34.68.249.249/reg12/welcome.php">

            <div class="inputfield">
                <label>Email Address</label>
                <input type="text" class="input" id="Emlogin" autocomplete="off" name="Emlogin"  onkeyup="emailvallogin(this.value);" required>

            </div>
            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" id="Passlogin" name="Passlogin"  required >
            </div>
            <div class="inputfield">
                <input type="Button"  id="loginbtn" value="Login" name="loginbtn" class="btn">
            </div>
        </form>

        <form id="signup" action = "http://34.68.249.249/reg12/Register.php" method="post" name = "myForm" onsubmit = "return(validate());">
            <div class="inputfield">
                <input type='hidden' id='validateflag' name='validateflag' >

                <label>Name</label>
                <input type="text" class="input" id="Name" name="Name" onkeyup="nameval(this.value)">

                <h3 id="show"></h3>
            </div>
            <div class="inputfield">
                <label>Gender</label>
                <div class="custom_select" >
                    <select name="Gender" id="Gender" name="Gender" onchange="Gender();" >
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
            </div>
            <div class="inputfield">
                <label>Email Address</label>
                <input type="text" class="input" id="Email" autocomplete="off" name="Email"  onkeyup="emailval(this.value);" required>

            </div>
            <p id="availability"></p>


            <div class="inputfield">
                <label>Phone Number</label>
                <input type="text" maxlength="10" class="input" id="Phone"  name="Phone" onkeyup="phoneval(this.value);"  onkeypress="javascript:return isNumber(event)" required>
            </div>

            <div class="inputfield">
                <label>Postal Code</label>
                <input type="text" class="input" id="PostalCode"  name="PostalCode" onkeyup="postal(this.value);">
            </div>
            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" id="Password"  onkeyup='check();' name="Password"  required >
            </div>
            <div class="inputfield">
                <label>Confirm Password</label>
                <input type="password" class="input" id="ConfirmPassword" name="ConfirmPassword" onkeyup='check();' required>
            </div>


            <div class="inputfield">
                <input type="submit"  id="button" value="submit" class="btn">
            </div>

        </form>

        <div class="inputfield">
            <input type="Button"  id="reg" value="Register" onclick="formToggle();" class="btn">
        </div>
    </div>

</div>
</body>
</html>
