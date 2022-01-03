<?php include('server.php');?>
<?php
$uppr_case ="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$lower_case ="abcdefghijklmnopqrstuvwxyz";
$number ="0123456789";
$generated_uppr_case = substr(str_shuffle($uppr_case),0,2);
$generated_lower_case = substr(str_shuffle($lower_case),0,2);
$generated_number = substr(str_shuffle($number),0,2);
$mixed = "$generated_uppr_case$generated_lower_case$generated_number";
$generated_captcha = substr(str_shuffle($mixed),0,6); 
$_SESSION['password_captcha'] = $generated_captcha;
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Genvis Resto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    *{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    .logo{
        padding-bottom: 50px;
    }
    .error
    {
        color: azure;
        text-align: center;
    }

    body{
            background-image:url(./img/japan.jpg);
            background-size: cover;
        }
    h4
    {
        text-align: center;
        color: whitesmoke;
        font-size: 15px;
    }
    .login
    {
        position: absolute;
        top: 68%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: left;
        width: 30%;
        border-radius: 5%;
        /* font-family:cursive; */
        background-color: rgba(0,0,0,.7);
        box-shadow: 0 0 20px white;
        opacity: 0.9;
    }
    h3
    {
        color: whitesmoke;
        margin-left: 10px;
        font-size: 15px;
    }
    input
    {
        margin-left: 15px;
        width: 90%;
        border: none;
        color:white;
        border:none;
        border-bottom:2px solid snow;
        background-color:transparent;
        padding:10px    
    }
    h2
    {
        font-size: 20px;
        color: snow;
    }
    captcha{
        width: 30%;
    }
    
    
    button{
        border: 2px solid #6124e3;
        width: 40%;
        margin-left: 30%;
        margin-right: 30%;
        color: white;
        background-color:  darkgray;
        
        
    }
    </style>

<body>
    <div class="container" >
        <div class="logo">
                   <center>
                        <img src="./img/logo.png" alt="" height="250px" width="450px"> 
                    </center>
  		</div>
        <div class="login" style="background-color: #2cab98" >
            <form method="post" action="login.php">
                <h2 style="text-align: center;">Halaman Login Resto Genvis </h2><br>
                <h3>Email  </h3>
                <input  name="email" type="text" id="myInput">
                <h3>Password  </h3>
                <input  name="password" type="password" id="myInput"><br><br>
                
            <center>
            <div class="form-group">
                <h4>Captcha</h4>
                <br>
                <td><button style="border:none; background-color:transparent;" type="submit" name="generate"><i class="fa fa-refresh" style="font-size:24px"></i></button></td>
                <td><?php error_reporting(0); echo "<font color='white' >$generated_captcha</font>" ?></td><br>
                <input id="myInput" style="width:40%; text-align:center;" type="text" name="password_captcha" placeholder="Isi Captcha" value="" maxlength="6" />
            </div>
                </center>
                <?php include('errors.php');?>
                <button class="btn" name="login" onclick return type="submit" id="myBtn">Login</button><br><br>
                <h4>Don't have an account? <a href="register.php">Register Here</a></h4>
            </form>
        </div>
    </div>
</body>
<script>
    var input = document.getElementById("myInput");
    input.addEventListener("keyup", function(event) {
    if (event.keyCode === 13) {
        event.preventDefault();
        document.getElementById("myBtn").click();
    }
});
</script>
</html>
