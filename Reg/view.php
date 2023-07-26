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
    <title>View Profile Information</title>
</head>
<body>
    <fieldset>
        <legend>Profile Information</legend>
        <form action="edit.php" method=post>
        <?php
        $email=$_SESSION['mail'];
        $conn=mysqli_connect('localhost','root','','projecttask');
        $sql="SELECT*FROM USERINFO WHERE email='$email'";
        $result=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($result);
        ?>
        <table><tr><td>Fullname: </td><td><?php echo $row['fullname'] ?></td></tr>
        <tr><td>Username: </td><td><?php echo $row['username'] ?></td></tr>
        <tr><td>Phone Number:</td><td><?php echo $row['phonenumber'] ?></td></tr>
        <tr><td>Gender:</td><td><?php echo $row['gender'] ?></td></tr>   
        <tr><td>Email:</td><td><?php echo $row['email'] ?></td></tr>
        <tr><td>Date of Birth:</td><td><?php echo $row['dob'] ?></td></tr>
        <tr><td><input type="submit" name="submit" value="Edit Your Information"></td></tr>
        
        
    </table>
    </form>
    </fieldset>
</body>
</html>