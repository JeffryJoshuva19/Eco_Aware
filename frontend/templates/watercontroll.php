<?php include "libs/load.php"; ?>
<head>
  <!doctype html>
  <html lang="en" data-bs-theme="auto">

  <head>
    <script src="frontend/vendor/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="frontend/vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="frontend/vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link href="frontend/css/watercontroll.css" rel="stylesheet">
    <script src="frontend/js/air.js"></script>
  </head>

  <body>
    <?php load_temp("header.php"); ?>
    {%include "header1.php"%}
    <div class="container">
      <div class="heading">
        <h1> pollution control</h1>
      </div>

      <!-- First Container -->
      <div class="container-fluid float-container">
        <div class="text-container">
          <h2>Information</h2>
          <p>Government agencies enforce strict regulations to control air pollution. These regulations include emission standards for vehicles, industries, and power plants, as well as limits on particulate matter and other pollutants.</p>
        </div>
        <div class="image-container">
          <img src="frontend/resource/water1.jpg" alt="Image 1">
        </div>
      </div>

      <!-- Second Container -->
      <div class="container-fluid float-container">
        <div class="text-container">
          <h2>Container 2</h2>
          <p>This is the second container with some text.</p>
        </div>
        <div class="image-container">
        <img src="frontend/resource/water1.jpg" alt="Image 1">
        </div>
      </div>

      <!-- Third Container -->
      <div class="container-fluid float-container">
        <div class="text-container">
          <h2>Container 3</h2>
          <p>This is the third container with some text.</p>
        </div>
        <div class="image-container">
        <img src="frontend/resource/water1.jpg" alt="Image 1">
        </div>
      </div>
    </div>
    {%include "footer.php"%}

  </body>
