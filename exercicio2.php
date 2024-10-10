<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
    $hora = $datetime->format( 'H' );

    echo $hora;
    if ($hora >= 0 && $hora <12) {
        echo "<h1>Bom Dia</h1>";
        echo "<img src=Bomdia.webp></img>";
    } elseif ($hora > 12 && $hora < 18) {
         echo "<h2>Boa Tarde</h2>";
         echo "<img src=Boatarde.jpg></img>";
    } elseif ($hora >= 18 && $hora <= 24){
         echo "<h3>Boa Noite</h3>";
         echo "<img src=Boanoite.webp></img>";
     
    }

      
    ?>
</body>
</html>