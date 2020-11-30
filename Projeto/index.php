<!DOCTYPE html>
  <html lang="pt-br">
  <head>
     <meta charset="UTF-8">
     <title>Camping-Dados</title>
  </head>
  
  <body>
     <p>------------------Camping dos Pássaros------------------</p>
     <form action="campingPassaros/campingPassaros.php" method="POST">
       <label for="dias">Dias</label>
       <input type="text" id="dias" name="dias"><br><br>
       <label for="idade">Idade</label>
       <input type="text" id="idade" name="idade"><br><br>
       <input type="submit" value="Submit">
     </form>
       <p>--------------------Camping do Sol----------------------</p>
       
     <form action="campingSol/campingSol.php" method="POST">
       <label for="dias">Dias</label>
       <input type="text" id="fname" name="dias"><br><br>
       <label for="idade">Idade</label>
       <input type="text" id="lname" name="idade"><br><br>
       <input type="submit" value="Submit">
     </form>
       
  </body>
  </html>