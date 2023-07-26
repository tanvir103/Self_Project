<?php
if(!isset($_POST['submit'])){}
else{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $conn=mysqli_connect('localhost','root','','projecttask');
    $sql="SELECT* FROM USERINFO WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['mail']=$_POST['email'];
    
    if(isset($_POST['Remember'])){
         setcookie("flag","true",time()+86000,"/");
    }
    if(!isset($_POST['Remember'])){
        setcookie("flag","false",time()+360,"/");
    }


    if(isset($row)){
         header('location:dashboard.php');
    }else{
            header('location:wrong.html');
    }
    
 

    

    
 

    

    
    

   
}

?>