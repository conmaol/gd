<?php

echo <<<HTML
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	    <title>Lexicopia/GD</title>
    </head>
    <body>
      <header style="background: #202050; color: #ffffff; margin-top: 0.7rem; margin-bottom: 1.0rem; border-top: solid 1.0rem #d0c9b0; border-bottom: solid 1.0rem #d0c9b0;">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/gd/index.php" style="color: inherit; font-size: 18pt;">𓁢 Lexicopia/GD</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="?gd=" title="Gaelic index">   </a>
            <!--
            <a class="nav-item nav-link" href="?gd=" title="Gaelic index">a-u</a>
            <a class="nav-item nav-link" href="?en=" title="English index">a-z</a>
            <a class="nav-item nav-link" href="?xx=" title="parts of speech">pos</a>
            <a class="nav-item nav-link" href="?q=" title="frequently asked questions">faq</a>
            -->
          </div>
        </div>
      </nav>
    </div>
  </header>
    
HTML;

