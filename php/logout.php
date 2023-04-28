<?php

// Finalizando a sesao

session_start();
session_unset();
session_destroy();
header('location: /sistema-de-login/login/home.php');



?>