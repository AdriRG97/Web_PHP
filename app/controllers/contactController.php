<?php
require_once(dirname(__FILE__) . '/../models/Email.php');
require_once(dirname(__FILE__) . '/../../utils/EmailUtils.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    sendEmail();
}

function sendEmail()
{
    $_email = new Email();

//    $_email->setFname($_POST["fname"]);
//    $_email->setLname($_POST["lname"]);
    $_email->setEmail($_POST["email"]);
    $_email->setSubject($_POST["asunto"]);
    $_email->setMessage($_POST["mensaje"]);

    $success = EmailUtils::send($_email);

    header("Location: ../views/public/contact.php?success=" . $success);
}

