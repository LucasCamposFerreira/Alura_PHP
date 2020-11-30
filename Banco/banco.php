 <!DOCTYPE html>

 <html lang="pt-br">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Banco Lucas</title>
 </head>
 <body>

     <form action="bancoSaque.php" method="POST">
     <label for="conta">Conta</label>
     <input type="text" id="conta" name="conta"><br><br>
     <label for="saque">Valor a ser sacado</label>
     <input type="text" id="saque" name="saque"><br><br>
     <input type="submit" value="Submit">
    </form>

    <form action="bancoSaque.php" method="POST">
     <label for="Conta">Conta</label>
     <input type="text" id="Conta" name="Conta"><br><br>
     <label for="deposito">Valor a ser depositado</label>
     <input type="text" id="deposito" name="deposito"><br><br>
     <input type="submit" value="Submit">
    </form>
 </body>
 </html>
 