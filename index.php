<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa 
lunghezza e sostituire la badword passata in GET con tre * -->

<?php 
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, molestiae';
    $textLenght = strlen($text);
    $passed = $_GET['word'];
    $modifedText = str_replace($passed,'***',$text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords</title>
</head>
<body>
    <h1>PHP TEST</h1>
    <p>
        <?php echo 'Questo è il paragrafo: ' .$text ?>
    </p>
    <p>
        <?php echo 'Questa è la lunghezza del paragrafo: ' .$textLenght .' caratteri' ?>
    </p>
    <p>
        <?php echo 'Il nuovo testo è : ' .$modifedText ?>
    </p>
</body>
</html>