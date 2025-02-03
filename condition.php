<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les condition en php</title>
</head>
<body>
    <?php
    // $heure_connexion = 19;
    // if($heure_connexion < 18){
    //     echo "passer une bonne journee <br/>";
    //     $journee = "oui";
    // }
    // else{
    //     echo "passer une bonne soiree <br/>";
    //     $journee = "non";
    // }
    // echo 'fait il jour? la reponse est ' .$journee.'.';
    // 2eme condition
    // $note = 10;
    // if($note < 10){
    //     echo "vous n avez  pas eu la moyenne <br/>";
    // }
    // elseif($note==10){
    //     echo "vous avez juste eu la moyenne <br/>";
    // }
    // else{
    //     echo "vous avez eu plus de 10 <br/>";
    // }
    // $note = 12;
    // $dificulte= "facile";
    // if($note <=12 and $dificulte=="facile"){
    //     echo "c est nul";
    // }
    // elseif($note >12 and $dificulte=="facile"){
    //     echo "<br/> pas mal,mais c estait facile";
    // }
    // elseif($note <=12 and $dificulte=="difficile <br/>"){
    //     echo " <br/> ne vous decouragez pas c estait difficile <br/>";
    // }
    // else{
    //     echo "bravo";
    // }
    // if($dificulte=="facile" or $dificile=="moyene"){
    //     echo "<br/>c est control n etais pas dificile <br/>";
    // }
    // else{ 
    //     echo "c est control etais difficile,non";
    // }
    // 
    
    // 3eme condition
     

    $note = 15;
    if($note ==0){
        echo"tu es nul!";
    }
    elseif ($note ==4){
        echo "c est mauvais";
    }
    elseif($note ==8){
        echo "c est pas bon";
    }
    elseif($note ==12){
        echo "c est moyen";
    }
    elseif($note ==16){
        echo "bien jouer!";
    }
    elseif($note ==20){
        echo "parfait!";
    }
    else{
        echo "je n'ai pas de commentaire pour cette note";
    }
    switch($note){
        case 0:
            echo "tu es nul";
        
    }
    ?>
</body>
</html>