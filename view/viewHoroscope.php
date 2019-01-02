

<?php
    
    
    
session_start();
header("Content-Type: application/json");
if(isset($_SESSION['horoscopeAndDate'])){

    $result = true;
    echo json_encode($result);
    //unset ($_SESSION['horoscopeAndDate']);
    return;
    
}else{
    $result = false;
    echo json_encode($result);
    return;
}


  
?>
