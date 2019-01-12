

<?php
    
    
    
session_start();
header("Content-Type: application/json");
if(isset($_SESSION['horoscopeAndDate'])){
    
    echo json_encode($_SESSION['horoscopeAndDate']);
    return;
    
}else{
    $result = "";
    echo json_encode($result);
    return;
}


  
?>
