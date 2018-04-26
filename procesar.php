
        <?php
       session_start();// crear secion
       //recibir parametros
       $nombres=$_GET['nombres'];
       $edad=$_GET['edad'];
       $pago=$_GET['pago'];
      $saldo=0;
      $cambio=0;
       if ($pago>15) {
           $cambio=$pago-15;
           $mensaje="usted tiene el cambio";
    
}else{
    $saldo=15-$pago;
    $mensaje="usted tiene un saldo a pagar";
}
//guardar en session
$_SESSION['nombres']=$nombres;
$_SESSION['edad']=$edad;
$_SESSION['pago']=$pago;
$_SESSION['cambio']=$cambio;
$_SESSION['saldo']=$saldo;
$_SESSION['mensaje']=$mensaje;
//rediriguir la navegacion
header('Location:'."resultado.php");
       
       
        ?>
