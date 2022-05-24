<?php require "secrets.php";
    //Setup variables and connection for database
    session_start();

    $dbuser = "root";
    $dbhost = "localhost";
    $dbname = "pageTurnerDB";
    $dbconn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    if ($dbconn->connect_error) {
        die("Connection failed..." . $dbconn->connect_error);
    }

    else {
        $_SESSION["dbconn"] = $dbconn;
    }
?>