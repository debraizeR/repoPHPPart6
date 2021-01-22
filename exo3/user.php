<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Prénom : <?= $_GET["fname"] ?: "veuillez entrer un prénom" ?> <br></p>
    <p>Nom : <?= $_GET["lname"] ?: "veuillez entrer un nom" ?></p>
</body>
</html>