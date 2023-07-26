<?php
session_start();
if(!isset($_COOKIE['flag'])){
    header('location:signin.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Message</title>
</head>
<body>
    <form method="post">
    <h1>Congratulations your information have been updated</h1>
    <a href="edit.php">Go Back</a>
    <button name="logout">Logout</button>
    </form>
    <?php
    if(isset($_POST['logout'])){
        session_destroy();
        setcookie("flag","true",time()-3600,'/');
        header('location:signin.html');
    }
    ?>
    
</body>
</html>