

<?php
    
session_start();
header("Content-Type: application/json");

if(isset($_SESSION['horoscopeAndDate'])){
    $result = true;
    echo json_encode($result);
    return;
    
}else{
  
    $dateOfBirth = $_POST['dateBirth'];
    
    $montheOfBirth = substr($dateOfBirth,5,2);
    $dayOfBirth= substr($dateOfBirth,8); 

    
    
    $databasJson = file_get_contents("./horoscopes.json");
    $databas = json_decode($databasJson);
   
    
    
    foreach($databas->horoscope as $horoscope){
        
        //we loop throw first month in horoscope array and compare day and first month
        for($s=0; $s<count($horoscope->amountDaysOfFirstMonth); $s++){
            if($horoscope->amountDaysOfFirstMonth[$s] == $dayOfBirth && $horoscope->firstMonth == $montheOfBirth){
                $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . $dateOfBirth;
                
                $result = true;
                echo json_encode($result);
                return;
                
                
            }
         
            
        }
 
            //we loop throw second month in horoscope array and compare days and second month
        for($j=0; $j<count($horoscope->amountDaysOfsecondMonth); $j++){
            if($horoscope->amountDaysOfsecondMonth[$j] == $dayOfBirth && $horoscope->secondMonth == $montheOfBirth){
                $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . $dateOfBirth ;
                $result = true;
                echo json_encode($result);
                return;
                
            }
        }
    }
    //when there is no such date
    $result = false;
    echo json_encode($result);
    return; 
    
    
}
    
    
        
    
    
    
          
?>