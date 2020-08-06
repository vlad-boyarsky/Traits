<?php

    require_once "Mail.php";

    $mail = new Mail("*START SEND MESSAGES*");

    echo "<pre>";
    $mail->sendAdminMessage('Admin');
    echo "<br>";
    $mail->sendClientMessage('Client');
    echo "<br>";
    $mail->sendUserMessage($_SERVER['REMOTE_ADDR']);
    echo "</pre>";