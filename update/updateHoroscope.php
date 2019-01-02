

<?php

session_start();
if(isset($_SESSION['horoscopeAndDate'])){
    parse_str(file_get_contents("php://input"), $_PUT);
    unset($_SESSION['horoscopeAndDate']);

    
    $databasJson = file_get_contents("../add/horoscopes.json");
    $databas = json_decode($databasJson);

    $updatedValue = $_PUT['dateBirth'];
    $montheOfBirth = substr($updatedValue,5,2);
    $dayOfBirth= substr($updatedValue,8);
    header("Content-Type: application/json");
    $result = true;
    echo json_encode($result);
/*     foreach($databas->horoscope as $horoscope){
        
        //we loop throw first month in horoscope array and compare day and first month
        for($s=0; $s<count($horoscope->amountDaysOfFirstMonth); $s++){
            if($horoscope->amountDaysOfFirstMonth[$s] == $dayOfBirth && $horoscope->firstMonth == $montheOfBirth){
                
                $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . $updatedValue;
                header("Content-Type: application/json");
                $result = true;
                echo json_encode($result);
                return;
                
            }
        }
            //we loop throw second month in horoscope array and compare days and second month
        for($j=0; $j<count($horoscope->amountDaysOfsecondMonth); $j++){
            if($horoscope->amountDaysOfsecondMonth[$j] == $dayOfBirth && $horoscope->secondMonth == $montheOfBirth){
                $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope .  $updatedValue;
                header("Content-Type: application/json");
                $result = true;
                echo json_encode($result);
                return;
            
            }
        }
} */
    

    
}


?>