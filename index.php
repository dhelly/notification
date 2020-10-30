<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email();
$novoEmail->sendEmail(
    "Assunto de Teste",
    "<p>Esse é o e-mail de <b>Teste</b></p>",
    "noreply@inutil.com",
    "Inutil",
    "email@gmail.com",
    "Jaqueline"
);

var_dump($novoEmail);
