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
    <title>Upload Profile Picture</title>
</head>
<body>
    <fieldset>
        <legend>Upload Profile Picture</legend>
        <table><tr><td>Select .jpg OR .png formate picture</td></tr>
        <tr><td><input type="file"></td></tr>
        <tr><td><input type="submit" name="upload" value="Upload Picture"></td></tr>
    </table>
    </fieldset>
</body>
</html>