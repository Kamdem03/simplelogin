<?php

    include_once '../databaseconnect\dababase.php';
    session_start();
    session_unset();
    session_destroy();

    header(Location:'../form/login.html')


?>