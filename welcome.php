<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
<div class="loginBox">
    <img src="images/test1.jpg" class="user">
    <h2>Log In Here</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <p>Email</p>
        <input type="text" name="email" placeholder="Enter Email">
        <p>Password</p>
        <input type="password" name="password" placeholder="......">
        <input type="submit" name="submit" value="login">
        <a href="index.php"> sign up</a>
        <?php
        if (isset($errors)) {
            foreach($errors as $error){
                echo "<p>$error</p>";
            }
        }
        ?>
    </form>
</div>
</body>
</html>
