<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>
        <?php 
        
           include __DIR__ . '/classes/card.php';
           include __DIR__ . '/classes/users.php';

           $newuser = new users('Franco', 'utente registrato');

           echo 'Utente: ' . $newuser -> getName() . '<br>';
           echo 'Tipologia: ' . $newuser -> getType() . '<br>';
        
        ?>
    </h4>
</body>
</html>