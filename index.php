<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
        <script src="./add/addHoroscope.js"></script>
        <script src="./update/updateHoroscope.js"></script>
        <script src="./delete/deleteHoroscope.js"></script>
    </head>
    <body>
      
        <form id="formInfo">
            <label>Skriv ditt födelsenummer:</label><br>
            <input type="date" name="dateBirth"><br>
          
            <button type="button" name="addHoroscope" onclick="saveHoroscope('./add/addHoroscope.php')">Spara mitt horoskop</button><br>
            <button type="button" name="updateHoroscope" onclick="updateHoroscopeContent('./update/updateHoroscope.php')">Uppdatera mitt horoskop</button><br>
<!--             <input type="submit" class="update" name="updateHoroscope" formaction="./update/updateHoroscope.php" value="uppdatera mitt horoskop"><br>
            <input type="submit" class="delete" name="deleteHoroscope" formaction="./delete/deleteHoroscope.php" value="Radera mitt horoskop"><br> -->

    
       </form><br>

       <?php
        include("./view/viewHoroscope.php")
       ?>
 
        
    </body>
</html>