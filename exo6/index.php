<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        {
            if(isset($_POST["gender"]) != null && $_POST["fname"] != null && $_POST["lname"] != null)
            {
                echo "Civilité : ".$_POST["gender"]."<br />"."Prénom : ".$_POST["fname"]."<br />"."Nom : ".$_POST["lname"];
            }
            else{
                ?><form action="index.php" method="post">
                <label for="gender">Civilité</label><br>
                <select id="gender" id="gender" name="gender">
                    <option></option>
                    <option>Mr</option>
                    <option>Mme</option>
                </select><br>
                <label for="fname">Prénom:</label><br>
                <input type="text" id="fname" name="fname"><br>
                <label for="lname">Nom:</label><br>
                <input type="text" id="lname" name="lname">
                <input type="submit" id="confirmForm" value="Valider">
            </form>
            <?php
            }
        }
        

    ?>
    

</body>
</html>