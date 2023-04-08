<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'admin' && $password == '123') {
            $_SESSION['username'] = $username;
            header('Location: home.html');
            exit();
        } else {
            $error_msg = "<p style=\"color: red;\">*Invalid username or password</p>" ;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sneakers Nation</title>
    <link href="img/logo.png" rel="shortcut icon">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <section id="header">
        <a href="index.html"><img src="img/logo.png" class="logo" alt=""></a>
        <div>
            <ul id="navbar">
                <div class="search-box">
                    <div class="search-icon">
                        <span class="material-symbols-outlined logosearch">search</span>
                    </div>
                    <div class="search-input">
                        <input class="search" type="text" placeholder="Type and products here">
                    </div>
                </div>
                <li><a href="index.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="import.html">Import</a></li>
                <li><a href="Local.html">Local</a></li>
                <li><a href="Rare.html">Rare</a></li>
                <li><a href="cart.html"><i class="material-symbols-outlined cart">shopping_bag</i></a></li>
            </ul>
        </div>
    </section>
    <section id="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()"">Register</button>
            </div>
            <form id="login" class="input-group" method="post">
                <input type="text" class="input-field" placeholder="Username" name="username" required>
                <input type="password" class="input-field" placeholder="Password" name="password" required>
                <p class="chech-box">Forgot Password?</p>
                <button type="submit" class="submit-btn">Login</button>
                <?php
                    echo (isset($error_msg) ? $error_msg : '' );
                ?>
            </form>
            <form id="register" class="input-group">
                <input type="text" class="input-field" placeholder="Username">
                <input type="password" class="input-field" placeholder="Password">
                <input type="password" class="input-field" placeholder="Confirm Password">
                <button type="submit" class="submit-btn2">Register</button>
            </form>
            
        </div>
    </section>

    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "100px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
    </script>
</body>
</html>