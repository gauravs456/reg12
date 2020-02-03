
<?php
include('welcome.php');
if(isset($_SESSION['id']))
{
    header("location: http://34.68.249.249/reg12/loginwelcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"> </script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"> </script>
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
                                validateflag=0;
                                $('#availability').html('<p style="color:green"> Available</p>');
                            }
                        }
                    }
                })
            });
        });
        $(document).ready(function(){
            $("#loginbtn").click(function(){
                var loginem=document.getElementById("Emlogin").value;
                var loginpass=document.getElementById("Passlogin").value;
                if (loginem =="" || loginpass==""){
                    alert("Please Fill your details");
                }
                else if (emailloginflag==false){
                    adderror();

                }
                else{

                    $.ajax({

                        url: 'http://34.68.249.249/reg12//welcome.php',
                        method:"POST",
                        data: {Emlogin:loginem, Passlogin : loginpass},
                        success: function(result){
                            if(result==1){
                                window.location.href = 'http://34.68.249.249/reg12/loginwelcome.php';
                            }
                            else
                            {
                                alert("Sorry invalid username or password");
                            }
                        }
                    });


                }


            });
        });
        
        $(document).ready(function () {
        $('#forgotbtn').on('click', function() {
            
            

            $('#editmodal').modal('show');


            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            console.log(data);

            $('#update_id').val(data[0]);
            $('#fname').val(data[1]);
            $('#lname').val(data[2]);
            $('#course').val(data[3]);
            $('#contact').val(data[4]);
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

    }
    var emailloginflag;

    function  loginvaldiate() {
        if(emailloginflag==true){
            return true;
        }
        else {
            return false;
        }
    }
    //    var checkpasslogin = function() {
    //        if(document.getElementById('Passlogin').value.length<6){
    //            document.getElementById('Passlogin').style.color = 'red';
    //            document.getElementById('Passlogin').style.borderColor = "red";
    //            passloginflag=false;
    //        }
    //        else {
    //            passloginflag=false;
    //            document.getElementById('Passlogin').style.color = 'red';
    //            document.getElementById('Passlogin').style.borderColor = "red";
    //
    //        }
    //    }
    //
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

    function adderror() {
        alert('Please enter your Valid Email Id');

    };

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
            emailloginflag=false;
        }
        else{
            emailloginflag=true;
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
    //
    //    function submit(){
    //        var pass=document.getElementById('Name').value;
    //        var email=document.getElementById('Email').value;
    //        var pass=document.getElementById('Password').value;
    //        var confirmpass=document.getElementById('ConfirmPassword').value;
    //        var phone=document.getElementById('Phone').value;
    //        if(nameflag==true && passwordflag==true&& phoneflag==true&& postalflag==true && emailflag==true){
    //        }
    //        else{
    //        }
    //    }
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
        <form id="login_form"  action="http://34.68.249.249/reg12/welcome.php"   name="login_form" method="post" onsubmit = "return(validate());" >
            <div class="inputfield">
                <label>Email Address</label>
                <input type="text" class="input" id="Emlogin" autocomplete="off" name="Emlogin"  onkeyup="emailvallogin(this.value);">
            </div>

            <div class="inputfield">
                <label>Password</label>
                <input type="password" class="input" id="Passlogin" name="Passlogin">
            </div>
            <div class="inputfield">
                <input type="submit"  id="loginbtn" value="Login" name="loginbtn" class="btn">
            </div>
            
            
             <div class="inputfield">
                <input type="submit"  id="forgotbtn" value="Forgot Password" name="loginbtn" class="btn">
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
        
            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> Edit Student Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="http://34.68.249.249/reg12/updatedata.php" method="POST">

                <div class="modal-body">

                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label> Name </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name Name">
                    </div>

                    <div class="form-group">
                        <label> Gender </label>
                        <input type="text" name="gender" id="gender" class="form-control" placeholder="Enter Gender">
                    </div>

                    <div class="form-group">
                        <label> Email </label>
                        <input type="text" name="email" id="email" class="form-control" placeholder=" Enter Email Id">
                    </div>

                    <div class="form-group">
                        <label> Phone Number </label>
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                </div>
            </form>

        </div>
    </div>
</div>

        
        
        
        
        
</body>
</html>
