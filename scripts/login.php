<?php require "dbconfig.php";
    session_start();

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    $_SESSION["user"] = $_POST["user"];
    $_SESSION["pass"] = $_POST["pass"]; 

    $sql = "SELECT username, userpass FROM userID";
    $result = $_SESSION["dbconn"]->query($sql);
    $found = false;

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($row["username"] == $_SESSION["user"]) {
                if ($row["userpass"] == hashPass($_SESSION["pass"], $_SESSION["user"])) {

                    $found = true;
                }
            }
        }

        if ($found) {
            echo "You're clear!";
        }

        else {
            echo "Exit!";
        }
    }

    else {
        echo "0 results";
    }
?>