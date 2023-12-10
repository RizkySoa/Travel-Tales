<?php

session_start();
include('../config/dbcon.php');
include('myfunctions.php');

if(isset($_POST['register_btn']))
{
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $cpassword = mysqli_real_escape_string($con,$_POST['cpassword']);

    if($password == $cpassword)
    {
        //Insert
        $insert_query = "INSERT INTO login (username,email,password) VALUES ('$username','$email','$password')";
        $insert_query_run = mysqli_query($con, $insert_query);

        if($insert_query_run)
        {
            $_SESSION['message'] = "Berhasil Register";
            header('Location: ../login/index2.php');
        }
        else
        {
            $_SESSION['message'] = "Ada Kesalahan";
            header('Location: ../login/index.php');
        }

    }
    else
    {
        $_SESSION['message'] = "Pastikan password sama";
        header('Location: ../login/index.php');
    }


}
else if(isset($_POST['login_btn']))
{
    $username = mysqli_real_escape_string($con,$_POST['username']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM login WHERE username='$username' AND password='$password' ";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0) 
    {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $username = $userdata['username'];
        $password = $userdata['password'];

        $_SESSION['auth_user'] = [
            'username' => $username,
            'email' => $password
        ];

        $_SESSION['message'] = "Login Berhasil";
        header('Location: ../LandingPage/index.php');


    }
    else 
    {
        $_SESSION['message'] = "Masukan Invalid";
        header('Location: ../login/index2.php');
    }
}
?>