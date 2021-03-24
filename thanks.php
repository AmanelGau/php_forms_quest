<?php

function isStringValid (String $inputString): bool {
    if(filter_var($inputString,FILTER_SANITIZE_STRING)==$inputString){
        return true;
    } else {
        return false;
    }

}

function isTelephonNumberValid (String $telNumber): bool {
    $telNumber = str_replace(" ", "", $telNumber);
    $telNumber = str_replace(".", "", $telNumber);
    $telNumber = str_replace("-", "", $telNumber);
    if ($telNumber[0] == "+"){
        $telNumber = substr($telNumber, 1);
    }
    $numberLen = strlen($telNumber);
    if(preg_match("/[0-9]{8,15}/i", $telNumber)){
        return true;
    } else {
        return false;
    }
}

$inputList = ["user_lastname", "user_firstname", "subject", "user_email", "user_telephone_number", "user_message"];
$isFormValid=true;
foreach($inputList as $varName){
    $isFormValid = $isFormValid && filter_has_var(INPUT_POST, $varName);
}

$isFormValid = $isFormValid && isStringValid($_POST["user_lastname"]);
$isFormValid = $isFormValid && isStringValid($_POST["user_firstname"]);
$isFormValid = $isFormValid && isStringValid($_POST["subject"]);
$isFormValid = $isFormValid && filter_input(INPUT_POST, "user_email", FILTER_VALIDATE_EMAIL);
$isFormValid = $isFormValid && isTelephonNumberValid($_POST["user_telephone_number"]);
$isFormValid = $isFormValid && isStringValid($_POST["user_message"]);


if ($isFormValid){
    $name=$_POST["user_lastname"];
    $firstname=$_POST["user_firstname"];
    $sujet=$_POST["subject"];
    $mail=$_POST["user_email"];
    $tel=$_POST["user_telephone_number"];
    $message=$_POST["user_message"];

    echo "<p>Merci $firstname $name de nous avoir contacté à propos de \"$sujet\".</p>
          <p>Un de nos conseiller vous contactera soit à l’adresse $mail ou par téléphone au $tel dans les plus brefs délais pour traiter votre demande : </p>
          <p>$message</p>";
} else {
    echo "Error : some inputs are not correctly filled.";
}

