<?php include('server.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registrasi Genvis Resto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script   src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
</head>
<style>
    *{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        color: black;
    }
    #login-right{
        position: absolute;
        right:0;
        width: 60%;
        height: 110%;
        /* background-image:url(./assets/img/japan5.jpg); */
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
    }
    
    body{
        background-image:url(./assets/img/japan6.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding-right: 390px;
        
        }
    h3{
       /* color: whitesmoke; */
       font-size: 15px;
    }
    h4{
        /* color: snow; */
        font-size: 15px;
    }
    .logo 
        {
        background: black;
        border-radius: 90%;
        position: relative;
        align-self: center;
            
        }
    .logo img{
        filter: brightness(70%); 
        position: relative; 
    }
    input{
        width: 35%;
        border: none;
        /* color:white; */
        border:none;
        border-bottom:2px solid blue;
        background-color:transparent;
        padding:10px    
    }
    .logo img{
        filter: brightness(70%); 
        position: relative; 
    }
    
    h2{
        /* color: whitesmoke; */
        font-size: 23px;
    }
    button{
        /* color: azure; */
        background-color: darkgray;
        padding: 40px;
    }
    
    select{
        background-color: transparent;
        border: none;
        /* color: white; */
        width: 10%;      
    }
    option{
        background-color: transparent;
        /* color: black; */
    }
    #login-left{
        text-align: left;
        width: 50%;
        border-radius: 2%;
        /* font-family:cursive; */
        background-color: #DFDECA;
        box-shadow: 0 0 20px white;
        opacity: 0.8;
    }
    </style>
<body>
    <div class="container">
        <div class="register">
            <form name="form1" method="post" action="register.php">
               <div id="login-right">
  			   <div class="logo">
                   <center>
  				      <img src="./img/logo.png" alt="" height="30%" width="50%"> 
                    </center>
  			   </div>
  		        </div><br>
                <div id="login-left">
                    <center>
                    <h2>Registrasi Akun Genvis</h2><br>
                    
                    <h3>First Name </h3>
                    <input name="firstname" type="text" required>
                    <h3>Last Name</h3>
                    <input name="lastname" type="text" required>
                    
                    <h3 >Email  </h3>
                    <input value="<?php echo $email; ?>"name="email" type="text" required>
                    <h3>Password  </h3>
                    <input  name="password_1" type="password" required><br><br>
                    <h3>Confirm Password </h3>
                    <input  name="password_2" type="password" required><br><br>
                    <h3>Tanggal Lahir </h3>
                    <input type="date" name="tanggallahir" value="tanggallahir" required> 
                    <h3>Jenis Kelamin </h3>
                    <select name="jeniskelamin" required>
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select><br><br>
                    <?php include('errors.php');?>
                    <button class="btn" name="register" type="submit" >Register</button><br><br>
                    <h4>Already have an account? <a href="login.php">Login Here</a></h4>
                   <center>
               </div>
            </form>
        </div>
    </div>
</body>
</html>
