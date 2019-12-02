<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
//Start a session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Guestbook</title>
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
            <li class="text-monospace nav-item bg-dark"><a href="guestbook.php" class="nav-link active">Guestbook</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="login.php" class="nav-link">Login</a></li>

        </ul>
    </div>
</nav> <!-- /nav -->
<!-- header -->
<div id="header" class="container-fluid jumbotron jumbotron-fluid">
    <h1 class="text-center text-monospace">Guestbook</h1>
</div> <!-- /header -->
<div class="container"> <!-- container -->
    <form id="guestbook-form" action="confirmation.php" method="POST">
        <fieldset class="form-group">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" name="firstName" id="firstName">
                <span class="err text-danger" id="err-fname">Please enter your first name</span>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" name="lastName" id="lastName">
                <span class="err text-danger" id="err-lname">Please enter your last name</span>
            </div>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" class="form-control" name="company" id="company">
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn</label>
                <input type="text" class="form-control" name="linkedin" id="linkedin" value="">
                <span class="err text-danger" id="err-linkedin">Please enter a valid LinkedIn URL</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" id="email">
                <span class="err text-danger" id="err-email">Please enter a valid email address</span>
            </div>
            <div class="form-group" id="comment-block">
                <label for="comment">Comment</label>
                <textarea class="form-control" name="comment" id="comment" rows="3" cols="20"></textarea>
            </div>
            <div class="custom-control custom-switch">
                <input class="custom-control-input" type="checkbox" id="Mailing-list" name="Mailing-list" checked>
                <label class="custom-control-label" for="Mailing-list">Add me to your mailing list!</label>
            </div>
            <div id="email-format">
                <div class="form-check">
                    <label class="d-block">Choose an email format:</label>
                    <input class="form-check-input" type="radio" name="method" id="html" value="html" checked>
                    <label class="form-check-label" for="html">
                        HTML
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="method" id="text" value="text">
                    <label class="form-check-label" for="text">
                        Text
                    </label>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label>How did we meet?</label>
                <select class="form-control" name="meet" id="meet">
                    <option value="none">Select an option</option>
                    <option value="meetup">Meetup</option>
                    <option value="job-fair">Job Fair</option>
                    <option value="not-yet">We haven't met yet</option>
                    <option value="other">Other</option>
                </select>
                <span class="err text-danger" id="err-meet">Please make a selection</span>
            </div>
            <div class="form-group" id="other-block">
                <label for="comment">Other</label>
                <textarea class="form-control" name="other" id="other" rows="3" cols="20"
                          placeholder="Please specify"></textarea>
                <span class="err text-danger" id="err-other">Please specify</span>
            </div>
        </fieldset>
        <button id="submit" type="submit" class="btn btn-primary">Sign Guestbook</button>
    </form>
    <a class="text-monospace" href="admin.php">Admin</a>
</div> <!-- /container -->

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
<!-- My script -->
<script src="scripts/guestbook.js"></script>
</body>
</html>