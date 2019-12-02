<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//If the user is already logged in
if (isset($_SESSION['username'])) {
    header('location: admin.php');
}

if (isset($_POST['submit'])) {
    include('creds.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (array_key_exists($username, $logins) && $logins["$username"] == $password) {
        $_SESSION['username'] = $username;
        header('location: admin.php');
    }

    echo "<p>Invalid login</p>";
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
</head>
<body>
<!-- Nav bar -->
<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">
    <div class="">
        <ul class="navbar-nav">
            <li class="text-monospace navbar-brand">KL</li>
            <li class="text-monospace nav-item bg-dark"><a href="../index.php" class="nav-link">Home</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="../index.php#bio" class="nav-link">Bio</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="../index.php#portfolio" class="nav-link">Portfolio</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="klow-resume.html" class="nav-link">Resume</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="guestbook.php" class="nav-link">Guestbook</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="login.php" class="nav-link active">Login</a></li>

        </ul>
    </div>
</nav>
<div id="header" class="container-fluid jumbotron jumbotron-fluid">
    <h1 class="text-monospace text-center">Log In</h1>
</div>
<div class="container">
    <form method="post" action="#">
        <label>Username:
            <input type="text" name="username">
        </label><br>

        <label>Password:
            <input type="password" name="password">
        </label><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
