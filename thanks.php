<?php

$name=$_POST["user_lastname"];
$firstname=$_POST["user_firstname"];
$sujet=$_POST["subject"];
$mail=$_POST["user_email"];
$tel=$_POST["user_telephone_number"];
$message=$_POST["user_message"];

echo "<p>Merci $firstname $name de nous avoir contacté à propos de \"$sujet\".</p>

<p>Un de nos conseiller vous contactera soit à l’adresse $mail ou par téléphone au $tel dans les plus brefs délais pour traiter votre demande : </p>

<p>$message</p>";