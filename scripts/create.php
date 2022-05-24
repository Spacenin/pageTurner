<?php require "dbconfig.php";
    //Script for creating an account
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //Check if passwords match
    if ($_POST["pass"] != $_POST["checkPass"]) {
        die("Check passwords!");
    }

    //Setup connection and insert into db
    $sql = "INSERT INTO userID (join_date, username, userpass) VALUES (NOW(), \"" . $_POST["user"] . "\" , \"" . hashPass($_POST["pass"], $_POST["user"]) . "\");";

    if ($_SESSION["dbconn"]->query($sql) == true) {
        header('Location: ../home.php');
    }

    else {
        echo $_SESSION["dbconn"]->error;
    }
?>