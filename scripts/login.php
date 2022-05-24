<?php require "dbconfig.php";
    //Script to check login
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    //Get user entered info
    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pass"] = $_POST["pass"]; 

    $sql = "SELECT username, userpass FROM userID";
    $result = $_SESSION["dbconn"]->query($sql);
    $found = false;

    //Check if database results are same as user info
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["username"] == $_SESSION["user"]) {
                if ($row["userpass"] == hashPass($_SESSION["pass"], $_SESSION["user"])) {

                    $found = true;
                }
            }
        }

        if ($found) {
            header("Location: ../home.php");
        }

        else {
            echo "Exit!";
        }
    }

    else {
        echo "0 results";
    }
?>