<!DOCTYPE html>
<html lang="en">
<head>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="305/styles/style.css">
    <meta charset="UTF-8">
    <title>Hello, World!</title>
</head>
<body>
<!-- Nav bar -->
<nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">
    <div class="">
        <ul class="navbar-nav">
            <li class="text-monospace navbar-brand">KL</li>
            <li class="text-monospace nav-item bg-dark"><a href="../index.php" class="nav-link active">Home</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="#bio" class="nav-link">Bio</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="#portfolio" class="nav-link">Portfolio</a></li>
            <li class="text-monospace nav-item bg-dark"><a href="305/klow-resume.html" target="_blank" class="nav-link">Resume</a></li>
        </ul>
    </div>
</nav> <!-- /nav -->
<!-- Header -->
<div id="header" class="container-fluid jumbotron jumbotron-fluid">
    <h1 class="text-monospace text-center">Kerrie Low</h1>
    <div class="container d-flex justify-content-lg-between">
        <p>kerrie_low@hotmail.com</p>
        <a class="text-monospace" href="https://www.linkedin.com/in/kerrie-low-65a060b5" target="_blank">LinkedIn</a>
    </div>
    <div class="container d-flex justify-content-lg-between">
        <p>(206) 947-6172</p>
        <a class="text-monospace" href="https://github.com/Quizzlixx" target="_blank">Git</a>
    </div>
</div> <!-- /header -->

<div class="container">
    <h1 class="text-monospace">Bio</h1>
    <hr>
    <div id="bio" class="mb-5"> <!-- Bio -->
        <p>My name is Kerrie and I'm the Off-Tank for the Icecrown-Malygos World of Warcraft guild Team Rocket.
            We raid every Tues &amp; Thurs from 20:50 &mdash; 01:00 Pacific, and yes, we're recruiting! Hit me up on
            battle.net
            Quizzlixx#1447!</p>
        <p>Until recently, I was a product tester contracted through Aerotek to work for Nintendo of America.
            Between contract renewals, a friend inspired me to try coding and I fell in love. After waking him up at
            05:00 to see what I'd
            coded through a free trial, I enrolled as a software development student, transferred to Green River College
            and
            I've loved every minute of it.</p>
        <p>I'm currently looking for internships for Summer 2020 in any language. My most recent projects have been in
            HTML, CSS, PHP, SQL, and Java.</p>
    </div> <!-- /bio -->
    <h1 class="text-monospace">Portfolio</h1>
    <hr>
    <div id="portfolio"> <!-- Portfolio -->
        <div id="blackdawn" class="card mb-5" style="width: 100%">
            <img src="305/images/blackdawn.PNG" class="card-img-top" alt="Blackdawn">
            <div class="card-body">
                <h5 class="card-title">Blackdawn Profile Template</h5>
                <p class="card-text">Working with a friend, I created and implemented the profile page template and
                    database
                    for the World of Warcraft guild Blackdawn.</p>
                <a href="305/profile-template.php" class="btn btn-primary">Check it out</a>
            </div>
        </div> <!-- /blackdawn -->
        <div id="idaydream" class="card mb-5" style="width: 100%"> <!-- idaydream -->
            <img src="305/images/idaydream-volunteer.png" class="card-img-top" alt="iD.A.Y.Dream">
            <div class="card-body">
                <h5 class="card-title">iD.A.Y.Dream</h5>
                <p class="card-text">Working in a small Agile team, I built and implemented the volunteer form, footer,
                    and database for the volunteer organization iD.A.Y.Dream.</p>
                <a href="http://ostrich-adventure.greenriverdev.com/volform.php" class="btn btn-primary">Check it
                    out</a>
            </div>
        </div> <!-- /idaydream -->
        <div id="207animals" class="card mb-5" style="width: 100%"> <!-- 207animals -->
            <img src="305/images/animalgame.png" class="card-img-top" alt="Animal Game">
            <div class="card-body">
                <h5 class="card-title">Animal Game</h5>
                <p class="card-text">This game was created in my IT207 class. The user is given a random list of animals
                    and asked to click the picture that matches the word.</p>
                <a href="http://klow.greenriverdev.com/207/assn5.html" class="btn btn-primary">Check
                    it
                    out</a>
            </div>
        </div> <!-- /207animals -->
        <div id="207final" class="card mb-5" style="width: 100%"> <!-- 207final -->
            <img src="305/images/teamrocket.png" class="card-img-top" alt="Team Rocket">
            <div class="card-body">
                <h5 class="card-title">Team Rocket</h5>
                <p class="card-text">As the final for my IT207 class, I built an image carousel to display the pictures
                    and descriptions of Team Rocket's boss kills.</p>
                <a href="http://klow.greenriverdev.com/207/final-project/final-project.html" class="btn btn-primary">Check
                    it
                    out</a>
            </div>
        </div> <!-- /207final -->
    </div> <!-- /portfolio -->
</div> <!-- /container -->

<!-- Bootstrap Javascript -->
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>