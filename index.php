<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP BADWORDS</title>
</head>
<body>

  <div id="app">

    <?php
    //Set text and badword
    $text = "testo di prova";
    $bad_word = $_GET["badword"];
    ?>
    <p>Testo iniziale: <strong><?php echo $text ?></strong></è>
    <p>Lunghezza testo iniziale: <strong><?php echo strlen($text) ?></strong></p>
    <?php 
    //Replace bad word
    $text = str_replace($bad_word,"***",$text);
    ?>
    <p>Testo fixato con badword: <strong><?php echo $text ?></strong></p>

  </div>

</body>
</html>