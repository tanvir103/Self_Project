<?php
    if(!isset($_COOKIE['flag'])){
    header('location:signin.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='style.css'>
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
            <tr><td><a href="search.html"><button>Search</button></a></td></tr>
        </tr>
        </table>
    </fieldset>
</body>
</html>
