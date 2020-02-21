
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet">
    <title>Registration</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
}
        .bg{
    background-image: url(img/bg.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
}


</style>
<body class="bg">
    <center>

<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
    <div class="row"><!-- row class is used for grid system in Bootstrap-->
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
            <div class="login-panel panel panel-success">
                
                    <fieldset style="width:30%;color:#4a148c;background-color:rgba(0,0,255,0.1);margin-top:40px;border-radius: 40px">
                    <h3 class="panel-title">Registration</h3>
                
                <div class="panel-body">
                    <form role="form" method="post" action="registration.php">
                        
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="name" type="text" autofocus style="width:60%;height:30px;font-size: 15px" >
                            </div><br>

                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus style="width:60%;height:30px;font-size: 15px">
                            </div><br>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="" style="width:60%;height:30px;font-size: 15px">
                            </div><br>


                            <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" style="font-weight: bold;color: blue;border-color:blue">

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

include("database/db_conection.php");//make connection here
if(isset($_POST['register']))
{
    $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
    $user_pass=$_POST['pass'];//same
    $user_email=$_POST['email'];//same


    if($user_name=='')
    {
        //javascript use for input checking
        echo"<script>alert('Please enter the name')</script>";
exit();//this use if first is not work then other will not show
    }

    if($user_pass=='')
    {
        echo"<script>alert('Please enter the password')</script>";
exit();
    }

    if($user_email=='')
    {
        echo"<script>alert('Please enter the email')</script>";
    exit();
    }
//here query check weather if user already registered so can't register again.
    $check_email_query="select * from users WHERE user_email='$user_email'";
    $run_query=mysqli_query($dbcon,$check_email_query);

    if(mysqli_num_rows($run_query)>0)
    {
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
exit();
    }
//insert the user into the database.
    $insert_user="insert into users (user_name,user_pass,user_email) VALUE ('$user_name','$user_pass','$user_email')";
    if(mysqli_query($dbcon,$insert_user))
    {
        echo"<script>window.open('welcome.php','_self')</script>";
    }

}

?>