
<?php   

header("Content-Type: application/json");
parse_str(file_get_contents('php://input'), $_PUT);
session_start();

if(!isset($_SESSION['horoscopeAndDate'])){
    // We check if there is not session to update and print out false
    $result = false;
    echo json_encode($result);
    return;
    
    //we check if there is and when it is we get the date by put and update the session with this data
}else{
    if(isset($_PUT['dateBirth'])){
        
        $dateOfBirth = $_PUT['dateBirth'];
        
        
        $montheOfBirth = substr($dateOfBirth,5,2);
        $dayOfBirth= substr($dateOfBirth,8); 

        include("../add/horoscopes.php");
        
        foreach($horoscopes as $horo){
            $startMonth = substr($horo->start,3,2);
            $startDay= substr($horo->start,0,2);
            $endMonth = substr($horo->end,3,2);
            $endDay = substr($horo->end,0,2);
            if($dayOfBirth >= $startDay  && $montheOfBirth == $startMonth){
                $_SESSION['horoscopeAndDate'] = $horo->name;
                $result = true;
                echo json_encode($result);
                return;
                
            }
            if($dayOfBirth <= $endDay && $montheOfBirth == $endMonth){
                $_SESSION['horoscopeAndDate'] = $horo->name;
                $result = true;
                echo json_encode($result);
                return;
            
            }
            //echo $startMonth." ".$startDay." ".$endMonth." ".$endDay . $horo->name. "<br>";
            
        }
        
    }
    
    
}

?>