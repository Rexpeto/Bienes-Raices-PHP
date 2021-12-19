<?php
    require 'includes/config/database.php';
    $db = conectarDB();

    $email = 'correo@correo.com';
    $pass = 123456;

    $password = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO usuarios (email, password) VALUES ('${email}', '${password}')";

    $insertado = mysqli_query($db, $query);