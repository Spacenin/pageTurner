<?php require "dbconfig.php";
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if ($_POST["pass"] != $_POST["checkPass"]) {
        die("Check passwords!");
    }

    $sql = "INSERT INTO userID (join_date, username, userpass) VALUES (NOW(), \"" . $_POST["user"] . "\" , \"" . hashPass($_POST["pass"], $_POST["user"]) . "\");";

    if ($_SESSION["dbconn"]->query($sql) == true) {
        echo "Success!";
    }

    else {
        echo $_SESSION["dbconn"]->error;
    }
?>