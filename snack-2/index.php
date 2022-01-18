<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
A domani :slightly_smiling_face:
 -->
<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];



    if (strpos($mail, '@') && strpos($mail, '.') && is_numeric($age) && strlen($name) > 3 ) {
        echo 'Accesso riuscito';
    }else{
        echo 'Accesso non riuscito';
    }


    // if(is_numeric($age)){
    //     echo $age; 
    // }
    // if(strlen($mail, 'alex')){
    //     echo "is working";
    // }
?>