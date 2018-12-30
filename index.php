<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
      
        <form method='post' action='./update/updateHoroscope.php'>
            <label>Skriv ditt födelsenummer:</label><br>
            <input type="date" name="date"><br>

            <input type='submit' name='addHoroscope' value='Spara mitt horoskop'><br>
            <input type='submit' name='updateHoroscope' value='Uppdatera mitt horoskop'><br>
            <input type='submit' name='deleteHoroscope' value='Radera mitt horoskop'>
    
       </form><br>

       <?php
        include("./view/viewHoroscope.php")
       ?>
 
        
    </body>
</html>