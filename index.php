<?php
$stringa = 'In un pozzo poco cupo si specchiò una volta un lupo, che nel cupo pozzo andò a sbattere di cozzo con un cupo tonfo fioco da smaltire a poco a poco e credette di azzanare un feroce suo compare, ma rimase brutto e cupo il feroce lupo';
$new_str = str_replace($_GET["word"], '***', $stringa);
$exploded_str = explode(',', $new_str);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-first</title>
</head>

<body>
    <p>Paragrafo: <?php echo $stringa ?></p>
    <p>Lunghezza del paragrafo: <?php echo strlen($stringa); ?></p>

    <h2>Stringa modificata : </h2>

    <p><?php echo $new_str ?></p>
    <p><?php echo strlen($new_str); ?></p>

    <h2>Stringa esplosa : </h2>

    <p>
        <?php var_dump($exploded_str); ?>
    </p>

</body>

</html>