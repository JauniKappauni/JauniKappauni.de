<?php
    session_start();
    session_unset(); // Entfernt alle Session-Variablen
    session_destroy(); // Beendet die Session

    header("Location: login.php"); // Weiterleitung zur Login-Seite
    exit();
?>
