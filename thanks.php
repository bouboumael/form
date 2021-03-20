<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>
    <p>
        <?= "Merci " . $_POST["lastname"] . " " . $_POST["firstname"] . " de nous avoir contacté à propos de " . $_POST["subject"]; ?>
    </p>
    <p>
        Un de nos conseillers vous contactera soit à l’adresse <?= $_POST["email"]; ?> ou par téléphone au <?= $_POST["phone"]; ?> dans les plus brefs délais pour traiter votre demande : 
    </p>
    <p>
        <?= $_POST["message"];?>
    </p>     
</body>
</html>