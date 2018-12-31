<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
        <script src="./add/addHoroscope.js"></script>
        <script src="./delete/deleteHoroscope.js"></script>
        <script src="./update/updateHoroscope.js"></script>
    </head>
    <body>
      
        <form  method='post'>
            <label>Skriv ditt födelsenummer:</label><br>
            <input type="date" name="date"><br>
            <input type="submit" class="add" name='addHoroscope' formaction="./add/addHoroscope.php" value="Spara mitt horoskop"><br>
            <input type="submit" class="delete" name='deleteHoroscope' formaction="./delete/deleteHoroscope.php" value="Radera mitt horoskop"><br>
            <input type="submit" class="update" name='updateHoroscope' formaction="./update/updateHoroscope.php" value="uppdatera mitt horoskop"><br>

    
       </form><br>

       <?php
        include("./view/viewHoroscope.php")
       ?>
 
        
    </body>
</html>