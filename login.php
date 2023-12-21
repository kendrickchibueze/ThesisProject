<?php
/*require once "includes/functions.inc.php";*/
if(isset($_POST['submit'])){
    $response = login_student($_POST);
if ($response === true) {
    header("Location: success");
    return;
} else {
    $errors = $response;
}
}
?>