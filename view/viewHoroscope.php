<!-- viewHoroscope.php sidan ska bara gå att begära via GET, 
 den ska kolla om ett horoskop finns sparat i $_SESSION och i så 
fall skriva ut det i output. Annars ska sidan inte skriva ut någonting -->

<div>
<?php
    
    
    
session_start();

if(isset($_SESSION['horoscopeAndDate'])){

    echo $_SESSION['horoscopeAndDate'];
    //unset ($_SESSION['horoscopeAndDate']);
    
}else{

    echo"";
}


  
?>
</div>