<?php
    $mysqli = new mysqli("localhost","low","123456","fyp");
    if($mysqli->connect_errno){
        die("connect error". $mysqli->connect_error);
    } 

    $name = $_POST["name"];
    $pass = $_POST["pass"];

    if(empty($_POST[$name]))
    {
        echo"Username is required";
    }

    if(empty($_POST[$pass]))
    {
        echo "Password is required";
    }

    if(isset($_POST["login"])){
        $sql = "SELECT password_ FROM user WHERE name = '$name'";
        $res = $mysqli->query($sql)->fetch_assoc();

        if($res){
            if($_POST["pass"] == $res["password_"]){
                // echo"<script>window.location.href = ''</script>";
                echo"<script>alert('Login Successful')</script>";
                header("Location: ../html/index.html");
                
            }
            else{
                echo"<script>alert('Incorrect password');history.go(-1)</script>";
            }
        }
        else{
            echo"<script>alert('Sorry, we don't recognise this Username');history.go(-1)</script>";
        }
    }