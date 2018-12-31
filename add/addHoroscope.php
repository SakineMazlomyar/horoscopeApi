

<?php
session_start();
if(isset($_SESSION['horoscopeAndDate'])){
    header("Content-Type: application/json");
    echo json_encode(true);
    return;
    
}else{
    $databasJson = file_get_contents("horoscopes.json");
    // we make an empty objectOfDatabs
    $databas = json_decode($databasJson);
    
    $addhorscope = isset($_POST['addHoroscope']);
    if($addhorscope){
        $dateOfBirth = $_POST['date'];
        
        $montheOfBirth = substr($dateOfBirth,5,2);
        $dayOfBirth= substr($dateOfBirth,8);
        
        
        foreach($databas->horoscope as $horoscope){
            
            //we loop throw first month in horoscope array and compare day and first month
            for($s=0; $s<count($horoscope->amountDaysOfFirstMonth); $s++){
                if($horoscope->amountDaysOfFirstMonth[$s] == $dayOfBirth && $horoscope->firstMonth == $montheOfBirth){
                    
                    $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . $dateOfBirth . $horoscope->pictureHoroscope;
                    return true;
                    
                    
                }
            }
                //we loop throw second month in horoscope array and compare days and second month
            for($j=0; $j<count($horoscope->amountDaysOfsecondMonth); $j++){
                if($horoscope->amountDaysOfsecondMonth[$j] == $dayOfBirth && $horoscope->secondMonth == $montheOfBirth){
                    $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . $dateOfBirth . $horoscope->pictureHoroscope;
                   
                    return true;
                }
            }
        }
    }
    
}
    
    
        
    
    
    
          
?>