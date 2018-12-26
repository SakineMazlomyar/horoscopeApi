<!-- viewHoroscope.php sidan ska bara gå att begära via GET, 
 den ska kolla om ett horoskop finns sparat i $_SESSION och i så 
fall skriva ut det i output. Annars ska sidan inte skriva ut någonting -->

<div>
<?php
    
    
   function existSesstion(){
       
       //fråga om hur jag ska inkludera get eller är mening jämföra input med session och view 
       session_start();
       if($_SESSION['horoscopeAndDate']){
   
           echo $_SESSION['horoscopeAndDate'];
       }
   }
   existSesstion()
?>
</div>