<?php

$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$eMail = $_POST['eMail'];
$phoneNumber = $_POST['phoneNumber'];
$subject = $_POST['subject'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
</head>
<body>
    <div>
        <p>Merci <?= $firstName ?> <?= $lastName ?> de nous avoir contacté à propos de <?= $subject ?>.

Un de nos conseillers vous contactera soit à l’adresse <?= $eMail ?> ou par téléphone au <?= $phoneNumber ?> dans les plus brefs délais pour traiter votre demande : 

<?= $message ?>
    </div>

</body>
</html>