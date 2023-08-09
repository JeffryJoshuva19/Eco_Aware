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
    <link href="frontend/css/contact.css" rel="stylesheet">
    <script src="frontend/js/achieve.js"></script>
    
  </head>
</head>

<body>
    <?php load_temp("header.php"); ?>
    {% include "header1.php"%}
    <div class="container">
        <div class="card2">
            <h1>Contacts</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <div class="col">
                <div class="card card1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 18rem;">
                    <img src="frontend/resource/nss.jpg" class="card-img-top test" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card card3" data-bs-toggle="modal" data-bs-target="#example1Modal" style="width: 18rem;">
                        <img src="frontend/resource/ncc.jpg" class="card-img-top test" alt="...">
                </div>
            </div>  
             <div class="col">
                <div class="card card4" data-bs-toggle="modal" data-bs-target="#example2Modal" style="width: 18rem;">
                        <img src="frontend/resource/rotary.jpg" class="card-img-top test" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card card5" data-bs-toggle="modal" data-bs-target="#example3Modal" style="width: 18rem;">
                        <img src="frontend/resource/lions.jpg" class="card-img-top test" alt="...">
                </div>
            </div>  
             <div class="col">
                <div class="card card6" data-bs-toggle="modal" data-bs-target="#example4Modal" style="width: 18rem;">
                            <img src="frontend/resource/eco.jpg" class="card-img-top test" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="card card7" data-bs-toggle="modal" data-bs-target="#example5Modal" style="width: 18rem;">
                            <img src="frontend/resource/red.jpg" class="card-img-top test" alt="...">
                </div>
            </div>  
        </div>
        <div class="modal" id="exampleModal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">NSS Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>E-mail: nssmadurai@gmail.com</p>
                    <p>Phone no: 7635279865</p>
                </div>
                </div>
            </div>
        </div>
        <div class="modal" id="example1Modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">NCC Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>E-mail: nccmadurai@gmail.com</p>
                    <p>Phone no: 9189632522</p>
                </div>
                </div>
            </div>
        </div>
        <div class="modal" id="example2Modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">RotaryClub Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>E-mail: rotarymadurai@gmail.com</p>
                    <p>Phone no: 5486133211</p>
                </div>
                </div>
            </div>
        </div>
        <div class="modal" id="example3Modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">LionsClub Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>E-mail: lionsclubmadurai@gmail.com</p>
                    <p>Phone no: 7635459865</p>
                </div>
                </div>
            </div>
        </div>
        <div class="modal" id="example4Modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EcoClub Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>E-mail: ecoclubmadurai@gmail.com</p>
                    <p>Phone no: 2453656847</p>
                </div>
                </div>
            </div>
        </div>
        <div class="modal" id="example5Modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Youth Red Cross Contact</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>E-mail: youthredcrossmadurai@gmail.com</p>
                    <p>Phone no: 8456127951</p>
                </div>
                </div>
            </div>
        </div>


        

    </div>
    {% include "footer.php"%}
    <?php load_temp("footer.php"); ?>
</body>