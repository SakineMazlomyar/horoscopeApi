<!--  updateHoroscope.php sidan ska bara gå att begära via PUT,  
den ska kolla efter ett födelsedatum i PUT datan, det finns ingen inbyggd $_PUT 
men ni kan skapa den själva genom att köra denna raden längst upp 
i filen:parse_str(file_get_contents("php://input"), $_PUT);räkna ut 
vilket horoskop födelsedatumet tillhör och uppdaterade det sparade horoskopet 
som finns i $_SESSION och skriva ut true.Om inget horoskop finns i $_SESSION 
ska sidan inte uppdatera något och skriva ut false -->

<?php
parse_str(file_get_contents("php://input"), $_PUT);
session_start();

$updateHoroscope = isset($_POST['updateHoroscope']);
if($updateHoroscope){
    unset($_SESSION['horoscopeAndDate']);

   
    
    $updatedValue = $_PUT['date'];
    $_SESSION['horoscopeAndDate'] =  $updatedValue;
    

    echo$_SESSION['horoscopeAndDate'];
}


?>