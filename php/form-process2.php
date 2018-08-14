<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Se requiere nombre ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Se requiere email ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["phone"])) {
    $errorMSG .= "Se requiere telefono ";
} else {
    $phone = $_POST["phone"];
}

// MESSAGE
if (empty($_POST["plan"])) {
    $errorMSG .= "Seleccione servicio ";
} else {
    $plan = $_POST["plan"];
}


$EmailTo = "aakram23@gmail.com";
$Subject = "Solicitud de Servicio";

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
$Body .= "Servicio: ";
$Body .= $plan;
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