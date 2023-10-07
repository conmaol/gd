<?php

namespace controllers;

session_start();

spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

echo <<<HTML
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>LEACAN</title>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/0b481d2098.js" crossorigin="anonymous"></script>
  <style>ul { margin-left: -15px;}</style>
</head>
<body>
  <!--<header style="background: #202050; color: #ffffff; margin-top: 1.0rem; margin-bottom: 1.0rem; border-top: solid 1.0rem #d0c9b0; border-bottom: solid 1.0rem #d0c9b0;"> -->
  <header style="background: #202050; color: #ffffff; margin-bottom: 1.0rem;">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark">
        <!-- <a class="navbar-brand" href="index.php" style="color: inherit; font-size: 18pt;">𓁢 Ri·chèile</a> -->
        <a class="navbar-brand" href="index.php" style="color: inherit; font-size: 18pt;">LEACAN</a>
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
  <main>
    <div class="container-fluid">
HTML;

new module();

echo <<<HTML
      </div>
    </main>
    <footer>
      <div class="container-fluid">
        <hr/>
        <hr/>
        <p class="small text-muted">Ungrammatical usages are marked as follows – <span style="color: green">*<span
      style="font-style: italic; text-decoration-line: underline; text-decoration-style: wavy; text-decoration-color: green;"
      title="gonny no!">chan do bha iad</span></span>. Copyright for example citations lies with the authors themselves and these are reproduced with permission where possible. 
        Translations (except where marked otherwise) are indicative, literal and approximate. <span class="text-danger">This page is, and will always be, a work in progress.</mark></p> 
        <hr/>
      </div>
    </footer>
    <script>
            $(function () {
                $('[data-bs-toggle="tooltip"]').tooltip();
            })
        </script>
  </body>
</html>
HTML;
