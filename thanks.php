<?php

$indexNames = ['lastname', 'firstname', 'phone', 'email', 'subject', 'message'];
$formData = array_map('trim', $_POST);
$errors = [];

foreach ($formData as $key => $value) {
    if (empty($formData[$key])) {
        $errors[$key] = 'The form field ' . ucfirst($key) . ' must be filled';
    }
    if ($key === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $errors['emailType'] = 'The email format is not valid';
    }
    $formData[$key] = htmlentities($value);    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body>

    <?php if (!empty($errors)): ?>
        <p>The following fields have error(s): </p>
        <ul>
            <?php foreach ($errors as $key => $value): ?>
                <li>Field <?= $key ?>: <?= $value ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p> Thank you <?= $_POST["lastname"] ?> <?= $_POST["firstname"] ?> for contacting us about <?= $_POST["subject"] ?>.</p>
        <p>One of our advisers will contact you either at "<?= $_POST["email"] ?>" or by telephone on "<?= $_POST["phone"] ?>"" as soon as possible to process your request: </p>
        <p><?= $_POST["message"] ?></p>     
    <?php endif; ?>
</body>
</html>