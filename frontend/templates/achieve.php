<?php
include "libs/load.php";
?>
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
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="frontend/vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="frontend/vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <link href="frontend/css/achieve.css" rel="stylesheet">
    <script src="frontend/js/achieve.js"></script>
    
  </head>
</head>

<body>
    <?php load_temp("header.php"); ?>
    {% include "header1.php"%}
    <div class="container">
      <div class="row">
        <div class="col col1">
          <div class="card chart">
              <canvas id="myChart"></canvas>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

          <script>
              const ctx = document.getElementById('myChart');

              new Chart(ctx, {
                type: 'pie',
                data: {
                  labels: ['Green', 'Non-Green'],
                  datasets: [{
                    label: '# of Votes',
                    data: ['50','20'],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
          </script>
        </div>
        <div class="col col1">
          <div class="card chart">
              <canvas id="chart"></canvas>
          </div>

          <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

          <script>
              const ctx1 = document.getElementById('chart');

              new Chart(ctx1, {
                type: 'bar',
                data: {
                  labels: ['before', 'After'],
                  datasets: [{
                    label: '# of Votes',
                    data: ['50','20'],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
          </script>
        </div>
        <div class="w-100"></div>
        <div class="col col1">
          <div class="card">
        <video width="100%" height="100%" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
  Your browser does not support the video tag.
</video>
            </div>
        </div>
        <div class="col col2">
          <div class="card">
            <video width="100%" height="100%" controls>
      <source src="movie.mp4" type="video/mp4">
      <source src="movie.ogg" type="video/ogg">
      Your browser does not support the video tag.
    </video>
            </div>
        </div>
      </div>
    </div>
    {% include "bot.php"%}
    {%include "footer.php"%}
    <?php load_temp("footer.php"); ?>
      
</body>