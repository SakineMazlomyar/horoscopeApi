
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
        
        
        
        $databasJson = file_get_contents("../add/horoscopes.json");
        $databas = json_decode($databasJson);
        
        
        
        foreach($databas->horoscope as $horoscope){
            
            //we loop throw first month in horoscope array and compare the day and the first month with the databirth
            for($s=0; $s<count($horoscope->amountDaysOfFirstMonth); $s++){
                if($horoscope->amountDaysOfFirstMonth[$s] == $dayOfBirth && $horoscope->firstMonth == $montheOfBirth){
                    $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . ": ". $horoscope->text;
                    
                    $result = true;
                    echo json_encode($result);
                    return;
                    
                    
                }
             
                
            }
     
                //we loop throw second month in horoscope array and compare the day and the second month with the datebirth
            for($j=0; $j<count($horoscope->amountDaysOfsecondMonth); $j++){
                if($horoscope->amountDaysOfsecondMonth[$j] == $dayOfBirth && $horoscope->secondMonth == $montheOfBirth){
                    $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . ": ". $horoscope->text ;
                    $result = true;
                    echo json_encode($result);
                    return;
                    
                }
            }
        }
        
    }
    
    
}

?>