<?php
    session_start();
    if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != "YES") {
        header('Location: index.php?login=error2');
}

