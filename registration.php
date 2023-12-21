<?php require_once "includes/functions.inc.php";
if (isset($_POST["submit"])) {
    $response = register_student($_POST);
    if ($response === true) {
        echo "<script>alert ('Registration was successful');</script>";
        header ('location: login.php');
    } else {
        $errors = $response;
    }
}
?>
    <!DOCTYPE html>
    <html>
    <head><title>Registration Form</title>
        <link rel="stylesheet" type="text/css" href="registration.css">
        <style>
            @import url('https://fonts.googleapis.com/family=Bitter|Crete+Round|pacifico');
        </style>
    </head>
<body>
<form id="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <section>
    <div class="container">
    <div class="inner1">
        <span>Sign in with Social Network</span><br>
        <a href="#" class="fb">Login with Facebook</a></br>
        <a href="#" class="tw">Login with Twitter</a></br>
        <a href="login.php" class="gl">Login In</a></br>
    </div>
    <div class="inner2">
    <h3>Sign up</h3>
    <input type="text" name="name" placeholder="Enter Name" value="<?php
    if(isset($_POST['name'])){
        echo $_POST['name'];
    } ?>">
    <input type="text" name="email" placeholder="Enter Email" value="<?php
    if(isset($_POST['email'])){
        echo $_POST['email'];
    }?>"><!-- <input type="password" name="password" placeholder="Enter password">
<input type="password" name="password1" placeholder="*Enter your password"
value="<?php if(isset($_POST['password1'])){
    echo $_POST['password1'];
} ?>">
<input type="password" name="password2" placeholder="*Confirm your password"
value="<?php if(isset($_POST['password2'])){
    echo $_POST[password2];
} ?>">
<input type="text" name="camera_id" placeholder="Enter camera Id" value="<?php
if(isset($_POST['camera_id'])){
    echo $_POST['camera_id'];
} ?>">
<input type="submit" name="submit" value="Register">
<?php
if (isset($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
}
?>
</div>
</div></section>
</form>
</body>
</html>
 <?php
