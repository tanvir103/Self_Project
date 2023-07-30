<?php
$json= $_REQUEST['name'];
$user=json_decode($json);

function search($value){
    $conn=mysqli_connect('localhost','root','','projecttask');
    $sql="SELECT * FROM userinfo WHERE email LIKE '$value%'";
    $result=mysqli_query($conn,$sql);
    return $result;
}

    
    $row=search($user);
    if(mysqli_num_rows($row) > 0) {
        while($user = mysqli_fetch_assoc($row)) {
            echo json_encode($user);
        }
    }
    


?>