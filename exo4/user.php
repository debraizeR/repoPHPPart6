<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p>Prénom : <?= $_POST["fname"] ?: "veuillez entrer un prénom"  ?></p>
    <p>Nom : <?= $_POST["lname"] ?: "veuillez entrer un nom" ?></p>
    <?php
    
    
    ?>
</body>
</html>