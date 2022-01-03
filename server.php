<?php
    session_start();
    $email="";
    $errors=array();
    $db = mysqli_connect('localhost','root','','fos_db');
    if(isset($_POST['register'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
        $tanggallahir = mysqli_real_escape_string($db, $_POST['tanggallahir']);
        $jeniskelamin = mysqli_real_escape_string($db, $_POST['jeniskelamin']);
        if($password_1!=$password_2)
        {
            array_push($errors, "Password belum match!");
        }
        if(count($errors)== 0){
            $password = md5($password_1);
            $sql="INSERT INTO users (email, password,firstname,lastname,tanggallahir,jeniskelamin,role) 
                        VALUES ('$email','$password','$firstname','$lastname','$tanggallahir','$jeniskelamin','user')";
            mysqli_query($db,$sql);
            $_SESSION['email']= $email;
            $_SESSION['success']="Selamat, akun berhasil di buat";
            header('location:login.php');
        }
    }

    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password_cap = $_POST['password_captcha'];
        if(empty($password) && empty($email)){
            array_push($errors, "Email dan Password harus diisi");
        }
        else
        if(empty($email)){
            array_push($errors, "Email harus diisi");
        }
        else
        if(empty($password)){
            array_push($errors, "Password harus diisi");
        } 
        else
        if($_POST['password_captcha'] != $_SESSION['password_captcha']){
            array_push($errors, "Captcha Salah");
            
        }
        if(count($errors)==0){
            $password=md5($password);
            $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result =mysqli_query($db, $query);
            $data = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) == 1){
            if($data['role'] == "user"){
            $_SESSION['user']= true;
            $_SESSION['success']="Selamat, anda berhasil login";
                header('location:index2.php');
            }
                else
                if($data['role'] == "admin"){
                $_SESSION['admin']= true;
                $_SESSION['success']="Selamat, anda berhasil login";
                header('location:./admin/index.php');  
            } 
            }else{
                array_push($errors,"Email/Password salah!");
                
            }
        }
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['email']);
        header('location:login.php');
    }
?>