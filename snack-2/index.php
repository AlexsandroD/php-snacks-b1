<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
A domani :slightly_smiling_face:
 -->
<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = (int) $_GET["age"];

    
    
    if (strpos($mail, '@') && strpos($mail, '.') != false && is_numeric($age) && strlen($name) > 3 ) {
        
        $logIn = [$name, $mail, $age];
        echo 'Accesso riuscito :';
        
        for($i = 0; $i < count($logIn); $i++){
            echo $logIn[$i];  } 
        }else{
            echo 'Accesso non riuscito: ';
        }
        var_dump($age);
?>