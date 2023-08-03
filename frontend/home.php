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
    <link href="css/home.css" rel="stylesheet">
    <script src="js/home.js"></script>
  </head>
</head>

<body>
    <?php load_temp("header.php"); ?>
    <div class="container">
      <div class="card1">
              <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="resource/imm1.jpg" class="d-block w-100 h-60" alt="...">
            </div>
            <div class="carousel-item">
              <img src="resource/im6.webp" class="d-block w-100 h-60" alt="...">
            </div>
            <div class="carousel-item">
              <img src="resource/im7.webp" class="d-block w-100 h-60" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>


        <div class="card adj1">
          <h5 class="card-header">Complients</h5>
          <div class="card-body">
            <h5 class="card-title">Public queries</h5>
            <p class="card-text">Queries forms on environment can be found on government websites, environmental organizations' platforms, educational institutions' websites, or sustainability-focused initiatives. They serve as a practical means for users to seek information, support, or collaboration on various environmental issues and play a part in fostering a more environmentally conscious society.</p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Click here</button>
          </div>
        </div>

          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Complient form</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="#" method="POST">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="" required>
                        <label for="floatingInput">Area</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                        <label for="floatingInput">Ward number</label>
                      </div>
                      <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" rows="4" cols="50" required></textarea>
                      <label for="floatingInput">Enter your queries</label>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>

          <div class="card text-center ad adj1">
          <div class="card-header">
            Contribute to green Madurai 
          </div>
          <div class="card-body">
            <h5 class="card-title">Let's make Madurai clean</h5>
            <p class="card-text">By donating to green initiatives in Madurai, you'll play a crucial role in making the city cleaner, greener, and more eco-friendly, benefiting both the environment and the local community.</p>
            <a href="payment.php" class="btn btn-primary">donate here</a>
          </div>
          </div>



        <div id="carouselExampleControls" class="carousel carousel-dark slide ad" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card  " style="width: 18rem;">
          <img src="resource/ev2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
          </div>
        </div><div class="card" style="width: 18rem;">
          <img src="resource/ev2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>

          </div>
          </div>
                <div class="card" style="width: 18rem;">
          <img src="resource/ev2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
          </div>
        </div>
        </div>
        </div>
        <div class="carousel-item">
              <div class="card-wrapper container-sm d-flex   justify-content-around">
              <div class="card  " style="width: 18rem;">
          <img src="resource/ev2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
          </div>
        </div><div class="card" style="width: 18rem;">
          <img src="resource/ev2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
          </div>
                </div>
                <div class="card" style="width: 18rem;">
          <img src="resource/ev2.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-text">Card title</h5>
            
          </div>
        </div>
            </div>
            </div>
            <!-- <div class="carousel-item">
              <div class="card-wrapper container-sm d-flex  justify-content-around">
              <div class="card " style="width: 18rem;">
          <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
          </div>
        </div>
                <div class="card" style="width: 18rem;">
          <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
          </div>
                </div>
                <div class="card" style="width: 18rem;">
          <img src="https://source.unsplash.com/collection/190727/1600x900" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            
          </div>
        </div>
            </div> -->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      <div>
    </div>  
  <?php load_temp("footer.php"); ?>
</body>
</html>
