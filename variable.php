<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
</head>
<body>
    <?php
     
     // $departement = "LES var EST UN APARTEMENT DU FRANCE <br/>";
     // $chiffres = 83;
     // echo $departement;
     // echo $chiffres;
     // echo 'les ' .$departement. 'est un departement de france <br/>'; 
     // $ = 3.14;
     // $variable1 = true;
     // $variable2 =false;
     $nombre1= 5;
     $nombre2= 3;
     $addition= $nombre1+$nombre2;
     $soustraction= $nombre1-$nombre2;
     $multiplication= $nombre1*$nombre2;
     $division= $nombre1/$nombre2;
     $modulo= $nombre1%$nombre2; 
 
     echo 'addition:' .$addition. '<br/>';
     echo 'soustraction:' .$soustraction. '<br/>';
     echo 'multiplication:' .$multiplication. '<br/>';
     echo 'division:' .$division. '<br/>';
     echo 'modulo:' .$modulo. '<br/>';
     echo $nombre1. '+'.$nombre2;
     $addition=20;
     $soustraction=$soustraction-$soustraction;
     $multiplication=$addition;
     echo 'nouvelle valeur addition:'.$addition.'<br/>';
     echo 'nouvelle valeur soustraction:'.$soustraction.'<br/>';
     echo 'nouvelle valeur multiplication:'.$multiplication.'<br/>';
    ?>
</body>
</html>