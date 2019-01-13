

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
        $dayOfBirth= substr($dateOfBirth,8); 
    
        
        
        $databasJson = file_get_contents("./horoscopes.json");
        $databas = json_decode($databasJson);
       
        
        
        foreach($databas->horoscope as $horoscope){
            
            //we loop throw first month(array) in the horoscope and compare the day and the first month with the databirth
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
                    $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . ": ". $horoscope->text;
                    $result = true;
                    echo json_encode($result);
                    return;
                    
                }
            }
        }
        //when we can not count the horoscope(when we do not have the date in data) and can not be saved
        $result = false;
        echo json_encode($result);
        return; 
    }
    
    
}
    
    
        
    
    
    
          
?>