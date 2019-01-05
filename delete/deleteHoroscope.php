<?php

session_start();
header("Content-Type: application/json");

if(isset($_SESSION['horoscopeAndDate'])){
    unset($_SESSION['horoscopeAndDate']);
    
    $result = true;
    echo json_encode($result);
    return;
    
}else{

    $result = false;
    echo json_encode($result);
    return;
}
?>