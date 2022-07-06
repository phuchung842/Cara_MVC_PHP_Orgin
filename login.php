<!DOCTYPE html>
<html lang="en" class="login-html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cara Ecomere Tutorial </title>
    <?php
        include 'inc/style.php';
    ?>
</head>

<body class="login-body">
    <section id="login">
        <div class="login-contain">
            <div class="login-left">
                <a href="index.php"><img src="./img/logo.png" class="logo" alt=""></a>
                <h2>Sign In</h2>
                <div class="login-detail">
                    <form class="login-field" action="">
                        <label for="username">Username</label>
                        <input type="text" placeholder="Username">
                        <label for="password">Password</label>
                        <input type="text" placeholder="Password">
                        <button class="normal">Sign In</button>
                    </form>
                    <a href="">Forget password, fotget it :))</a>
                </div>
            </div>
            <div class="login-right">
                <h2>Sign Up</h2>
                <form class="register-field">
                    <label for="username">Username</label>
                    <input id="username" type="text" placeholder="Username">
                    <label for="password">Password</label>
                    <input id="password" type="password" placeholder="Password">
                    <label for="confpassword">Confirm Password</label>
                    <input id="confpassword" type="password" placeholder="Confirm Password">
                    <label for="email">Email</label>
                    <input id="email" type="text" placeholder="Email">
                    <label for="firstname">First Name</label>
                    <input id="firstname" type="text" placeholder="First Name">
                    <label for="lastname">Last Name</label>
                    <input id="lastname" type="text" placeholder="Last Name">
                    <label for="phone">Phone</label>
                    <input id="phone" type="text" placeholder="Phone">
                    <button class="normal">Sign Up</button>
                </form>
            </div>
    </section>
    <?php
        include 'inc/script.php';
    ?>
</body>

</html>