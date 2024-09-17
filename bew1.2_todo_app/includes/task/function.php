<?php

// connect to database
function connectToDB() {
    // setup database credential
    $host = 'mysql';
    $database_name = 'php_docker';
    $database_user = 'root';
    $database_password = 'secret';

    // connect to the database
    $database = new PDO(
        "mysql:host=$host;dbname=$database_name",
        $database_user,
        $database_password
    );
    
    return $database;
}

// set error message
function setError( $message, $redirect ) {
    $_SESSION['error'] = $message;
    // redirect back to selected page
    header("Location: " . $redirect);
    exit;
}