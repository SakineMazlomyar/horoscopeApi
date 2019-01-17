
<?php
    
session_start();
header("Content-Type: application/json");
if(isset($_SESSION['horoscopeAndDate'])){
    // We check if there is alreay a saved horoscope and prevent it to rewrite.
    $result = true;
    echo json_encode($result);
/* test for outout
$dateOfBirth = $_POST['dateBirth'];
    print_r($dateOfBirth); */
    return;
    
} else {
    if(isset($_POST['dateBirth'])){
        $dateOfBirth = $_POST['dateBirth'];
        
        
        $montheOfBirth = substr($dateOfBirth,5,2);
        $dayOfBirth = substr($dateOfBirth,8); 
    
        include("./horoscopes.php");
        
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