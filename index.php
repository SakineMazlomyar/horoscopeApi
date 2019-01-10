<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./add/addHoroscope.js"></script>
        <script src="./delete/deleteHoroscope.js"></script>
        <script src="./update/updateHoroscope.js"></script>
        <script src="./view/viewHoroscope.js"></script>

    </head>
    <body onload="content()">
      
        <form id="formInfo">
            <label>Skriv ditt födelsenummer:</label>
            <input type="date" name="dateBirth">
        
            <input type="submit" value="save" onclick="return saveHoroscope('./add/addHoroscope.php')">
            <input type="submit" value="update" onclick="return updateHoroscopeContent('./update/updateHoroscope.php')">
            <input type="submit" value="delete" onclick="return deleteHoroscopeContent('./delete/deleteHoroscope.php')">

       </form><br>
        <div id="content">
          
        </div>

        
    </body>
</html>