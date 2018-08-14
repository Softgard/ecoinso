<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Se requiere Nombre ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Se requiere Email ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["phone"])) {
    $errorMSG .= "Se requiere telefono ";
} else {
    $phone = $_POST["phone"];
}


$EmailTo = "aakram23@gmail.com";
$Subject = "Nueva Solicitud";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Telefono: ";
$Body .= $phone;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Enviado";
}else{
    if($errorMSG == ""){
        echo "Ocurrio un error :(";
    } else {
        echo $errorMSG;
    }
}

?>