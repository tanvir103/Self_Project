<?php
function search($value){
    $conn=mysqli_connect('localhost','root','','projecttask');
    $sql="SELECT * FROM userinfo WHERE fullname LIKE '%$value%'";
    $result=mysqli_query($conn,$sql);
    return $result;
}
if(isset($_POST['search'])){
    $value=$_POST['livesearch'];
    $row=search($value);
    if(mysqli_num_rows($row) > 0) {
        while($crow = mysqli_fetch_assoc($row)) {
        $cid = $crow['fullname'];
        $posterURL = $crow['password'];
        echo "$cid "."$posterURL";
        echo"<br>";
        }
    }
    
}
?>