<?php
if (isset($_POST['login'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($username == "admin" && $password == "pass") {
    session_start();
    $_SESSION["user"] = "admin";
    header("Location:index.php");
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../stlye.css">
  
</head>
<body>
<nav class="navbar">
    <div>
  <h2><a class="" href="#">
    <span class="text-info">ART</span>ICLE.COM
  </a></h2>
</div>
</nav>
<div class="welcome-message">
<h1>
Welcome to <span class="auto-type">article.com!</span>
    </h1>
</div>
<div class="container">
    <div class="left-section">
    <img class="image" src="../picture/Email.svg">

    <p class="description">An interactive platform for research and knowledge-sharing. Upload, edit, and delete your articles while exploring a wealth of content contributed by others. Dive into diverse topics, collaborate with fellow researchers, and unlock new insights for your projects. </p>
    </div>
    <div class="right-section" style="max-width:600px">
        <div class="right-section-container">
            <form action="login.php" method="post">
                <h1 class="signin">Sign In</h1>
                <div class="admin-container">
                    <label for="username">Username</label><br>
                    <input class="form" type="text" name="username" id="" placeholder="Username">
                </div>
                <div class="password-container">
                <label for="password">Password</label><br>
                    <input class="form" type="password" name="password" id="" placeholder="Password">
                </div>
                <div class="login-container">
                    <input class="login-button" type="submit" value="Login" name="login">
                    <a href="">Forgot your password?</a>
                </div>
                <p class="signup">Don't have an account yet? <a href="#">Sign Up</a></p>
            </form>
        </div>
    </div>
    </div>

    

 
</body>
</html>