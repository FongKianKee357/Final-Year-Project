<?php
    if(empty($_POST["name"])){
        die("Username can't be blank");
    }

    if(empty($_POST["pass"])){
        die("Password can't be blank");
    }

    if(strlen($_POST["pass"])< 6 ){
        die("Password is too short (minimum is 6 characters)");
    }

    if($_POST["pass"] !== $_POST["qpass"]){
        die("Password not same");
    }

    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        die("Email is invalid");
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $mysqli = new mysqli("localhost","low","123456","fyp");
    if($mysqli->connect_errno){
        die("connect error". $mysqli->connect_error);
    }   

    if(isset($_POST["reg"])){
        $sql = "INSERT INTO user (name,email,password_) VALUES ('$name','$email','$pass')";
        $mysqli->query($sql);
    
        if($mysqli->affected_rows> 0){
                echo"<script>alert('Register Successful!');history.go(-1)</script>";
        }
    }
    
   