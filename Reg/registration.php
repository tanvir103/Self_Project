<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraion</title>
</head>
<body>
    <fieldset>
        <legend>SignUp</legend>
        <form method=post>
            <table>
                <tr>
                    <td>Fullname: </td>
                    <td><input type="text" name="fullname" required></td>
                </tr>
                <tr><td>Username: </td>
                <td><input type="text" name="username" required></td>
            </tr>
            <tr><td>Country: </td><td><input type="text"name="country" required></td></tr>
            <tr><td>Phone Number:</td><td><input type="number" name="phonenumber" required></td></tr>
            <tr><td>Gender: </td><td><select name="gender" >
                <option value="Male">Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select></td></tr>
            <tr><td>Email: </td><td><input type="text"name="email" required></td></tr>
            <tr><td>Date of Birth: </td><td><input type="date"name="dob" required></td></tr>
            <tr><td>Password: </td><td><input type="password"name="password" required></td></tr>
            <tr><td>Re-enter Password: </td><td><input type="password" name="repassword" required></td></tr>
            <tr><td><input type="checkbox" name="terms" required> I accept the terms and conditions</td></tr>
            <tr><td><input type="submit" name="submit" value="Create Account"></td></tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
if(!isset($_POST['submit'])){
   // header('location:registration.php');
}
else{
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
    $sql="INSERT INTO USERINFO VALUES('','$fullname','$username','$country','$phonenumber','$gender','$email','$dob','$password','$repassword')";
    mysqli_query($conn,$sql);
    header('location:signin.html');
    

}

?>