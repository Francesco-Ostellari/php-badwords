<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php 
  $string = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi autem inventore soluta fuga eligendi odit beatae repudiandae laboriosam aperiam dignissimos nobis, consequuntur alias odio aut mollitia laborum neque architecto consectetur!";
  $lenString = strlen($string);
  $censuredWord = $_GET['censuredword'];
  $newString = str_replace($censuredWord, "***", $string);  
  $lenStringCensured = strlen($newString);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
  </head>
  <body>
    <h2>Paragrafo scelto:</h2>
    <p><?php echo $string ?></p>
    <h2>Lunghezza del paragrafo originale:</h2>
    <p><?php echo $lenString ?></p>
    <h2>Parola da censurare:</h2>
    <p><?php echo $censuredWord ?></p>
    <h2>Paragrafo censurato:</h2>
    <p><?php echo $newString ?></p>
    <h2>Lunghezza paragrafo censurato:</h2>
    <p><?php echo $lenStringCensured ?></p>
  </body>
</html>
