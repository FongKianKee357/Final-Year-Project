<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">

    <title>login and register</title>
    <link rel="stylesheet" href="../css/login and register.css">
</head>

<body>
    <div class="container">
        <div class="form-box">
            <!-- register -->
            <form action="../php/register.php" method="post" novalidate>
                <div class="register-box hidden">
                    <h1>register</h1>
                    <input type="text" placeholder="Username" name="name">
                    <input type="email" placeholder="Email" name="email">
                    <input type="password" placeholder="Password" name="pass">
                    <input type="password" placeholder="Re-password" name="qpass">
                    <button name="reg">Register</button>
                </div>
            </form>
        
            <!-- login -->
            <form action="../php/login.php" method="post">
                <div class="login-box">
                    <h1>login</h1>
                    <input type="text" placeholder="Username" name="name">
                    <input type="password" placeholder="Password" name="pass">
                    <button name="login">Login</button>
                </div>
            </form>
            
        </div>
        <div class="con-box left">
            <br><br><br>
            <span class="wel">Welcome</span>
            <span class="otherw">to Boutique<br></span>
            <span class="otherw">Handcraft <br> </span> 
            <span class="otherw">Model House</span></span>    
            <br><br><br><br><br><br><br>
            <p>Have Account</p>
            <button id="login">Login</button>
        </div>
        <div class="con-box right">
            <br><br><br>
            <span class="wel">Welcome</span>
            <span class="otherw">to Boutique<br></span>
            <span class="otherw">Handcraft <br> </span> 
            <span class="otherw">Model House</span></span> 
            <br><br><br><br><br><br><br>
            <p>No Account</p>
            <button id="register">Sign Up</button>
        </div>
    </div>
    <script>
        let login=document.getElementById('login');
        let register=document.getElementById('register');
        let form_box=document.getElementsByClassName('form-box')[0];
        let register_box=document.getElementsByClassName('register-box')[0];
        let login_box=document.getElementsByClassName('login-box')[0];
       
        register.addEventListener('click',()=>{
            form_box.style.transform='translateX(80%)';
            login_box.classList.add('hidden');
            register_box.classList.remove('hidden');
        })
        
        login.addEventListener('click',()=>{
            form_box.style.transform='translateX(0%)';
            register_box.classList.add('hidden');
            login_box.classList.remove('hidden');
        })
    </script>
</body>

</html>