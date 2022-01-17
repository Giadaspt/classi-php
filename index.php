<?php

require_once __DIR__."/User.php";

$utente1 = new User("Viola", "Doe", 70);
$utente1->email = "asdf@dfg.it";


var_dump($utente1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <h2>
    Ciao <?php echo $utente1->name ?> <?php echo $utente1->lastname ?> 
  </h2>

  <p>
    La tua email è <?php echo $utente1->email ?>
  </p>

  <p>
    Hai lo sconto del <?php echo $utente1->getDiscount() ?> %
  </p>
  
</body>
</html>