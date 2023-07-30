<?php
    $json= $_REQUEST['name'];
    //$user=json_decode($json);

    function search($value){
        $conn=mysqli_connect('localhost','root','','projecttask');
        $sql="SELECT * FROM userinfo WHERE fullname LIKE '%$value%'";
        $result=mysqli_query($conn,$sql);
        return $result;
    }
    
    $row=search($json);
    if(mysqli_num_rows($row) > 0) {
        while($user = mysqli_fetch_assoc($row)) {
            $id=$user['id'];
            $fullname=$user['fullname'];
            $username=$user['username'];
            $country=$user['country'];
            $phone=$user['phonenumber'];
            $gender=$user['gender'];
            $email=$user['email'];
            $dob=$user['dob'];
            $password=$user['password'];
            $repass=$user['repassword'];
            
            echo"<table>
            <tr><td>ID: </td>
            <td>{$id}</td>
            </tr>
            <tr><td>Fullname: </td>
            <td>{$fullname}</td>
            </tr>
            <tr><td>Username: </td>
            <td>{$username}</td>
            </tr>
            <tr><td>Country: </td>
            <td>{$country}</td>
            </tr>
            <tr><td>Phone: </td><td>{$phone}</td></tr>
            <tr><td>Gender:</td><td>{$gender}</td></tr>
            <tr><td>Email: </td><td>{$email}</td></tr>
            <tr><td>Date Of Birth: </td><td>{$dob}</td></tr>
            <tr><td>Password: </td><td>{$password}</td></tr>
            </table>
            <br>";
            
        }
    }else{
        echo "<table></table>";
    }
    


?>