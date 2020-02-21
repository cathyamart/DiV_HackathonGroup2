<?php
session_start();//session starts here

?>



<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
}
.bg{
    background-image: url(img/bg.png);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
</style>

<body class="bg">

  <center>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <fieldset style="width:30%;color:#4a148c;background-color:rgba(0,0,255,0.1);margin-top:40px;border-radius: 40px">
                    <h3 class="panel-title">Sign In</h3>
                
                <div class="panel-body">
                    <form role="form" method="post" action="login.php">
                        
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus style="width:60%;height:30px;font-size: 15px" >
                            </div><br>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" style="width:60%;height:30px;font-size: 15px" >
                            </div><br>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                            <!-- Change this to a button or input when using this as a form -->
                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>

</body>

</html>

<?php

include("database/db_conection.php");

if(isset($_POST['login']))
{
    $user_email=$_POST['email'];
    $user_pass=$_POST['pass'];

    $check_user="select * from users WHERE user_email='$user_email'AND user_pass='$user_pass'";

    $run=mysqli_query($dbcon,$check_user);

    if(mysqli_num_rows($run))
    {
        echo "<script>window.open('welcome.php','_self')</script>";

        $_SESSION['email']=$user_email;//here session is used and value of $user_email store in $_SESSION.

    }
    else
    {
        echo "<script>alert('Email or password is incorrect!')</script>";
    }
}
?>