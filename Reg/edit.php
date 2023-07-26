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
    <title>Edit Profile Information</title>
</head>
<body>
    <?php
    $email=$_SESSION['mail'];
    $conn=mysqli_connect('localhost','root','','projecttask');
    $sql="SELECT*FROM USERINFO WHERE email='$email'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
    <fieldset>
        <legend>Edit your profile information</legend>
        <form method=post>
            <table>
                <tr><td>Name:</td> <td><input type="text" name="fullname" value="<?php echo $row['fullname']?>"></td></tr>
                <tr><td>Username:</td> <td><input type="text" name="username" value="<?php echo $row['username']?>"></td></tr>
                <tr><td>Country:</td> <td><input type="text" name="country" value="<?php echo $row['country']?>"></td></tr>
                <tr><td>Phonenumber:</td> <td><input type="number" name="phonenumber" value="<?php echo $row['phonenumber']?>"></td></tr>
                <tr><td>Gender:</td> <td><input type="text" name="gender" value="<?php echo $row['gender']?>"></td></tr>
                <tr><td>Email:</td> <td><input type="text" name="email" value="<?php echo $row['email']?>"></td></tr>
                <tr><td>Date of Birth:</td> <td><input type="date" name="dob" value="<?php echo $row['dob']?>"></td></tr>
                <tr><td><input type="submit"name="updateinfo" value="Update Information"></td></tr>
            </table>
        </form>
    </fieldset>
 
</body>
</html>

<?php
if(isset($_POST['updateinfo'])){
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $country=$_POST['country'];
    $phonenumber=$_POST['phonenumber'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];

    $conn=mysqli_connect('localhost','root','','projecttask');
    $sql="UPDATE USERINFO SET fullname='$fullname',username='$username',country='$country',phonenumber='$phonenumber',gender='$gender',email='$email',dob='$dob' WHERE email='$email' ";
    mysqli_query($conn,$sql);
    header('location:updatem.php');
}
?>