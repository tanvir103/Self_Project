<?php 
    $json = $_REQUEST['json'];
    $user = json_decode($json); 
    echo json_encode($user);
 
 
?>