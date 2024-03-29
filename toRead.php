<?php session_start(); ?>
<!--This is the site to edit the toRead list of books-->

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Header stuff-->
    <meta charset="UTC-8">
    <title>Books to Read</title>
    <link rel="icon" href="images/icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Bootstrap stuff-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!--Customized includes-->
	<link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/home.css">
</head>
<body>
    <!--Navbar-->
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="reading.php">Reading</a></li>
        <li><a id="active" href="">To Read</a></li>
        <li><a href="read.php">Read</a></li>
        <li id="name">
            <span>Hello <?php echo $_SESSION["user"]; ?>!</span>
        </li>
    </ul>
    
    
</body>
</html>