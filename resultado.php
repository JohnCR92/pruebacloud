 <?php
session_start();       
        ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       //leemos desde session
        $mensaje=$_SESSION['mensaje'];
         $pago=$_SESSION['pago'];
          $cambio=$_SESSION['cambio'];
           $saldo=$_SESSION['saldo'];
           //presentamos
           echo $mensaje."<br>";
            echo $pago."<br>";
             echo $cambio."<br>";
              echo $saldo."<br>";
           
           ?>
    </body>
</html>
