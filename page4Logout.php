<?php
    // starta session
    session_start();

    // ta bort sessions variabler
    session_unset();

    // förstör hela sessionen
    session_destroy();

    // skicka iväg besökaren
    header("location: page4.php");
    exit;
?>