

function updateHoroscopeContent(url){
  
    var formInfo= $("#formInfo").serialize();
    console.log(formInfo)
  
    $.ajax({
        type:'put',
        dataType: 'json',
        url:'./update/updateHoroscope.php',
        formInfo: formInfo,
        success: function(userData){
    
            if(userData){
                console.log(userData)
            }else{
                console.log(userData)
            }
        },
        error: function(userData, error) {
            console.log( userData +  error)
        }
    });

}
/*          
    $databasJson = file_get_contents("../add/horoscopes.json");
    $databas = json_decode($databasJson);
    $dateOfBirth = $_PUT['dateBirth'];
    $montheOfBirth = substr($dateOfBirth,5,2);
    $dayOfBirth= substr($dateOfBirth,8); 

    
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
                $_SESSION['horoscopeAndDate'] =  $horoscope->nameHoroscope . $dateOfBirth;
            
                $result = true;
                echo json_encode($result);
                return;
            
            }
        }
    }

$result = false;
echo json_encode($result);
return; */ 