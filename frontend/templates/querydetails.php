<?php
include "libs/load.php";
?>
<head>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="vendor/assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.112.5">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link href="vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="css/home.css" rel="stylesheet">
    <script src="js/home.js"></script>
    <link href="frontend/css/querydetails.css" rel="stylesheet">

  </head>
</head>
<body>
   <?php load_temp("header.php"); ?>
   {% include "header1.php"%}
   <div class="container">
        <div class="table-container ad">
                <table class="table">
                <thead class="custom-thead">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Area</th>
                    <th scope="col">Ward Number</th>
                    <th scope="col">queries</th>
                    </tr>
                </thead>
                <tbody>
                    {% for i in rquerys%}
                    <tr>
                    <th scope="row">{{loop.index}}</th>
                    <td>{{i.area}}</td>
                    <td>{{i.wardnum}}</td>
                    <td>{{i.area}}</td>
                    </tr>
                    {% endfor%}
                </tbody>
                </table>
        </div>
        <div class="row ad">
            <div class="col-md-4 mb-4">
                <div class="card text-center hi c1">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" width="100" height="100" fill="#75C2F6" style="enable-background:new 0 0 100 100;" xml:space="preserve"><style type="text/css">.st0{fill-rule:evenodd;clip-rule:evenodd;}</style><path class="st0" d="M18,27.5h54.5c0.6,0,1,0.4,1,1l0,20.6c0,0.3-0.1,0.6-0.4,0.8L72.9,50c-0.7,0.5-1.6,0.1-1.6-0.8l0-15.8  c0-0.9-1-1.3-1.7-0.8l-15,12.9c-0.5,0.4-0.5,1.1,0,1.5l9.7,8.1c0.5,0.4,0.5,1.2,0,1.5L64.1,57c-0.4,0.3-0.9,0.3-1.3,0l-10.2-8.6  c-0.4-0.3-0.9-0.3-1.3,0l-4.9,4.3c-0.4,0.3-0.9,0.3-1.3,0L40,48.3c-0.4-0.3-0.9-0.3-1.3,0L23.9,61.6c-0.7,0.6-0.2,1.7,0.7,1.7  l33.8,0c0.2,0,0.4,0.1,0.6,0.2l0.4,0.3c0.7,0.6,0.3,1.8-0.6,1.8l-39.8,0c-0.6,0-1-0.4-1-1V27.5L18,27.5z M73.5,58.1v-3.9  c0-0.8-1-1.3-1.6-0.8l-10.2,8.2c-0.5,0.4-0.5,1.2,0,1.6l10.2,8.2c0.7,0.5,1.6,0.1,1.6-0.8v-2.9c0-0.6,0.4-1,1-1H81c0.6,0,1-0.4,1-1  v-6.4c0-0.6-0.4-1-1-1H73.5L73.5,58.1z M80,64.5h-7.5c-0.6,0-1,0.4-1,1v0.7c0,0.8-1,1.3-1.6,0.8l-4.9-3.9c-0.5-0.4-0.5-1.2,0-1.6  l4.9-3.9c0.7-0.5,1.6-0.1,1.6,0.8v0.7c0,0.6,0.4,1,1,1H79c0.6,0,1,0.4,1,1V64.5L80,64.5z M22,29.7l23.1,19.9c0.4,0.3,0.9,0.3,1.3,0  l21.1-18.2c0.7-0.6,0.3-1.8-0.7-1.8H22L22,29.7z M20.3,61.8L36.8,47c0.4-0.4,0.4-1.1,0-1.5L21.9,32.7c-0.6-0.6-1.7-0.1-1.7,0.8V61.8  L20.3,61.8z"/></svg>
                        <p class="card-text">No of complients received</p>
                        <h1>{{receved}}</h1>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center hi c2">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100" height="100" fill="#4E6C50" stroke="#4E6C50"viewBox="0 0 100 125" enable-background="new 0 0 100 100" xml:space="preserve"><g><g><path fill="#000000" d="M82.883,95.691H18.547c-3.384,0-6.138-2.63-6.138-5.858V9.69c0-3.23,2.754-5.857,6.138-5.857h64.335    c3.383,0,6.137,2.627,6.137,5.857v80.143C89.02,93.062,86.266,95.691,82.883,95.691z M18.547,7.957    c-1.108,0-2.014,0.777-2.014,1.733v80.143c0,0.957,0.906,1.734,2.014,1.734h64.335c1.112,0,2.013-0.777,2.013-1.734V9.69    c0-0.956-0.9-1.733-2.013-1.733H18.547z"/></g><g><path fill="#000000" d="M67.917,21.073H26.072c-1.14,0-2.062-0.923-2.062-2.063c0-1.139,0.922-2.061,2.062-2.061h41.845    c1.142,0,2.06,0.922,2.06,2.061C69.977,20.15,69.059,21.073,67.917,21.073z"/></g><g><path fill="#000000" d="M52.062,31.872H26.072c-1.14,0-2.062-0.922-2.062-2.062s0.922-2.062,2.062-2.062h25.991    c1.139,0,2.064,0.923,2.064,2.062S53.201,31.872,52.062,31.872z"/></g><g><path fill="#000000" d="M67.917,42.672H26.072c-1.14,0-2.062-0.922-2.062-2.062c0-1.139,0.922-2.063,2.062-2.063h41.845    c1.142,0,2.06,0.924,2.06,2.063C69.977,41.75,69.059,42.672,67.917,42.672z"/></g><g><path fill="#000000" d="M44.201,53.472H26.072c-1.14,0-2.062-0.92-2.062-2.062c0-1.138,0.922-2.062,2.062-2.062h18.129    c1.138,0,2.062,0.924,2.062,2.062C46.263,52.552,45.339,53.472,44.201,53.472z"/></g><g><path fill="#000000" d="M48.421,86.998c-0.471,0-0.933-0.16-1.302-0.464l-18.458-15.07c-0.449-0.366-0.723-0.909-0.752-1.489    c-0.033-0.579,0.184-1.146,0.593-1.559l4.133-4.175c0.74-0.748,1.929-0.816,2.747-0.162l11.391,9.058L70,49.952    c0.759-0.753,1.962-0.806,2.778-0.126c0.818,0.683,0.984,1.874,0.38,2.755L50.124,86.105c-0.329,0.475-0.838,0.793-1.408,0.875    C48.619,86.993,48.52,86.998,48.421,86.998z M33.028,69.706l14.964,12.217l9.128-13.285l-8.733,8.716    c-0.743,0.74-1.923,0.806-2.737,0.155l-11.387-9.051L33.028,69.706z"/></g></g></svg>
                        <p class="card-text">No of complients solved</p>
                        <h1>{{complete}}</h1>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="col-md-4 mb-4">
                <div class="card text-center hi c3">
                    <div class="card-body">
                    <svg xmlns:x="http://ns.adobe.com/Extensibility/1.0/" xmlns:i="http://ns.adobe.com/AdobeIllustrator/10.0/" xmlns:graph="http://ns.adobe.com/Graphs/1.0/" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="100" height="100" stroke="#4E6C50" fill="#820000" viewBox="-949 951 100 125" style="enable-background:new -949 951 100 100;" xml:space="preserve"><switch><foreignObject requiredExtensions="http://ns.adobe.com/AdobeIllustrator/10.0/" x="0" y="0" width="1" height="1"/><g i:extraneous="self"><path d="M-899,953.5c-26.2,0-47.5,21.3-47.5,47.5s21.3,47.5,47.5,47.5s47.5-21.3,47.5-47.5S-872.8,953.5-899,953.5z     M-878.7,1011.1c2.8,2.8,2.8,7.4,0,10.2c-1.4,1.4-3.2,2.1-5.1,2.1s-3.7-0.7-5.1-2.1l-10.1-10.1l-10.1,10.1    c-1.4,1.4-3.2,2.1-5.1,2.1s-3.7-0.7-5.1-2.1c-2.8-2.8-2.8-7.4,0-10.2l10.1-10.1l-10.1-10.1c-2.8-2.8-2.8-7.4,0-10.2    c2.8-2.8,7.4-2.8,10.2,0l10.1,10.1l10.1-10.1c2.8-2.8,7.4-2.8,10.2,0c2.8,2.8,2.8,7.4,0,10.2l-10.1,10.1L-878.7,1011.1z"/></g></switch></svg>
                        <p class="card-text">No of complients not solved</p>
                        <h1>{{incomplete}}</h1>
                    </div>
                </div>
            </div>
        </div>

   </div>
   {% include "footer.php"%}
   <?php load_temp("footer.php"); ?> 
</body>
<style>
.table-container {
max-height: 300px; /* Adjust the height as needed */
overflow-y: auto;
}
</style>