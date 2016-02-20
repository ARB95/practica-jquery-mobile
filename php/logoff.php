<?php

    session_start();
    
    // Eliminamos la sesion
    session_destroy();
    
    // Volvemos al login
    header("Location:../login.php");

?>

