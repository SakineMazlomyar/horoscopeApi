

<?php   




parse_str(file_get_contents("php://input"), $_PUT);
header("Content-Type: application/json");

if(isset($_PUT["dateBirth"])){
    $s = $_PUT["dateBirth"];
    echo json_encode($s); 
}else{
    echo json_encode("ingen"); 
}
   

   



?>