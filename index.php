<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="index.php" method="GET">
    <input type="text" name="val1" id="val" placeholder="numerateur" GET/>
    <input type="text" name="val2" id="val" placeholder="diviseur" GET/>
    <button id="val">Envoyer</button>
</form>

   
    <?php
    
    use PHPUnit\Framework\TestCase;

        echo "Votre resultat est : ";
         function diviser ($un, $deux){
            
             if($deux == 0){
                 throw new Exception("Division par 0 : Impossible");
                 
             }
             else if(is_null($un)===true && is_null($deux)===true)
             {
                throw new Exception("Aucune valeur entrer");
             }
             
            return ($un / $deux);
         }
         $div = $_GET['val2'];
         $num = $_GET['val1'];
         echo diviser($num, $div);
    ?>
</body>
</html>