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
        
           include __DIR__ . '/classes/users.php';
           include __DIR__ . '/classes/product.php';
           include __DIR__ . '/classes/card.php';

           $newuser = new users('Franco', 'Utente registrato');

           echo 'Utente: ' . $newuser -> getName() . '<br>';
           echo 'Tipologia: ' . $newuser -> getType() . '<br> <br>';

           $newproduct = new product('Crocchette per cani', 'Cibo', 'Mangimi per animali', 10);

           echo 'Nome: ' . $newproduct -> getname() . '<br>';
           echo 'Tipologia: ' . $newproduct -> getype() . '<br>';
           echo 'Genere: ' . $newproduct -> getgenre() . '<br>';
           echo 'Prezzo: ' . $newproduct -> getprice() . '<br> <br>';

           $newproduct = new product('Crocchette per cani', 'Cibo', 'Mangimi per animali', 10);

           echo 'Nome: ' . $newproduct -> getname() . '<br>';
           echo 'Tipologia: ' . $newproduct -> getype() . '<br>';
           echo 'Genere: ' . $newproduct -> getgenre() . '<br>';
           echo 'Prezzo: ' . $newproduct -> getprice() . '<br> <br>';

           $newproduct = new product('Crocchette per cani', 'Cibo', 'Mangimi per animali', 10);

           echo 'Nome: ' . $newproduct -> getname() . '<br>';
           echo 'Tipologia: ' . $newproduct -> getype() . '<br>';
           echo 'Genere: ' . $newproduct -> getgenre() . '<br>';
           echo 'Prezzo: ' . $newproduct -> getprice() . '<br> <br>';

           $newcard = new card('5555444422221111', '10/23', '233');

           echo 'Numero: ' . $newcard -> getnumber() . '<br>';
           echo 'Data di scadenza: ' . $newcard -> getexpirationdate() . '<br>';
           echo 'CVV: ' . $newcard -> getcvv() . '<br>';
        
        ?>
    </h4>
</body>
</html>