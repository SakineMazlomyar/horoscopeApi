<!--  updateHoroscope.php sidan ska bara gå att begära via PUT,  
den ska kolla efter ett födelsedatum i PUT datan, det finns ingen inbyggd $_PUT 
men ni kan skapa den själva genom att köra denna raden längst upp 
i filen:parse_str(file_get_contents("php://input"), $_PUT);räkna ut 
vilket horoskop födelsedatumet tillhör och uppdaterade det sparade horoskopet 
som finns i $_SESSION och skriva ut true.Om inget horoskop finns i $_SESSION 
ska sidan inte uppdatera något och skriva ut false -->

<?php
parse_str(file_get_contents("php://input"), $_PUT);

$updateHoroscope = isset($_POST['updateHoroscope']);
if($updateHoroscope){
    session_start();
    unset($_SESSION['horoscopeAndDate']);
    

    $databasJson = file_get_contents("../add/horoscopes.json");
    $databas = json_decode($databasJson);

    $updatedValue = $_PUT['date'];
    $montheOfBirth = substr($updatedValue,5,2);
    $dayOfBirth= substr($updatedValue,8);
    
    
    foreach($databas->horoscope as $horoscope){
        
        //we loop throw first month in horoscope array and compare day and first month
        for($s=0; $s<count($horoscope->amountDaysOfFirstMonth); $s++){
            if($horoscope->amountDaysOfFirstMonth[$s] == $dayOfBirth && $horoscope->firstMonth == $montheOfBirth){
                
                $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . $updatedValue . $horoscope->pictureHoroscope;
                echo "true";
                return;
            }
        }
            //we loop throw second month in horoscope array and compare days and second month
        for($j=0; $j<count($horoscope->amountDaysOfsecondMonth); $j++){
            if($horoscope->amountDaysOfsecondMonth[$j] == $dayOfBirth && $horoscope->secondMonth == $montheOfBirth){
                $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope .  $updatedValue . $horoscope->pictureHoroscope;
                echo "true";
                return;
            }
        }
}
    

    
}


?>