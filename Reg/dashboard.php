<?php
    if(!isset($_COOKIE['flag'])){
    header('location:signin.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body id="dashboard">
    <fieldset>
        <legend>Dashboard</legend>
        <table>
            <tr><td><a href="view.php">View Profile Information</a></td></tr>
            <tr><td><a href="edit.php">Edit Profile Information</a></td></tr>
            <tr><td><a href="upload.php">Upload Profile Picture</a></td></tr>
            <tr><td><a href="userinfo.html">View All User</a></td></tr>
            <tr><td><a href="search.html"><button style="border: 1 solid #F5C518; background: none; width: 200px;padding: 10px 20px;text-align: center;display: table-cell;vertical-align: middle;font-size: 15px;cursor: pointer;position:relative;overflow: hidden;">Search</button></a></td></tr>
        </tr>
        </table>
    </fieldset>
</body>
</html>
