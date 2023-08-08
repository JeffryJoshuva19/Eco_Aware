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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="resource/iconn.ico">
    <link href="css/home.css" rel="stylesheet">
    <script src="js/home.js"></script>
    
  </head>
</head>
<?php load_temp("header.php"); ?>

<body>
    <div class="container" id="about-section">
      <!-- <div class="card1">
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
        </div> -->

        <div class="row content">
           
          <div class="card adj1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 18rem;">
            <!-- <img src="resource/imm1.jpg" class="card-img-top" alt="..."> -->
            <div class="card-body">
            </div>
             
          </div>
        
          <p class="col-md-6 g content">By donating to green initiatives in Madurai, you'll play a crucial role in making the city cleaner, greener, and more eco-friendly, benefiting both the environment and the local community.<p>
        </div>
        <hr>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Complaint form</h5>
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
          <div class="row content">
          <div class="col-md-5">
            <p class="g1">By donating to green initiatives in Madurai, you'll play a crucial role in making the city cleaner, greener, and more eco-friendly, benefiting both the environment and the local community  .<a href="payment.php" class="">Donate Now</a></p>
            
          </div>
          <div class="col-md-6 content">
          <div class="card adj2" href="payment.php" style="width: 18rem;">
            <div class="card-body">
            </div>
           </div>
          </div>
          <hr>          
          </div>
          <div class="container-fluid content">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="hori-timeline" dir="ltr">
                              <ul class="list-inline events">
                                  <li class="list-inline-item event-list">
                                      <div class="px-4">
                                          <div class="event-date bg-soft-primary text-primary">2 June</div>
                                          <h5 class="font-size-16">Event One</h5>
                                          <p class="text-muted">It will be as simple as occidental in fact it will be Occidental Cambridge friend</p>
                                          <div>
                                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-inline-item event-list">
                                      <div class="px-4">
                                          <div class="event-date bg-soft-success text-success">5 June</div>
                                          <h5 class="font-size-16">Event Two</h5>
                                          <p class="text-muted">Everyone realizes why a new common language one could refuse translators.</p>
                                          <div>
                                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-inline-item event-list">
                                      <div class="px-4">
                                          <div class="event-date bg-soft-danger text-danger">7 June</div>
                                          <h5 class="font-size-16">Event Three</h5>
                                          <p class="text-muted">If several languages coalesce the grammar of the resulting simple and regular</p>
                                          <div>
                                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                          </div>
                                      </div>
                                  </li>
                                  <li class="list-inline-item event-list">
                                      <div class="px-4">
                                          <div class="event-date bg-soft-warning text-warning">8 June</div>
                                          <h5 class="font-size-16">Event Four</h5>
                                          <p class="text-muted">Languages only differ in their pronunciation and their most common words.</p>
                                          <div>
                                              <a href="#" class="btn btn-primary btn-sm">Read more</a>
                                          </div>
                                      </div>
                                  </li>
                                  
                              </ul>
                          </div>
                      </div>
                  </div>
                  <!-- end card -->
              </div>
          </div>
      <div>
    </div>  
    <!-- Start of ChatBot (www.chatbot.com) code -->
<script type="text/javascript">
    window.__be = window.__be || {};
    window.__be.id = "64d0f9b9d01f120007af4c8e";
    (function() {
        var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
        be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
    })();
</script>
<noscript>You need to <a href="https://www.chatbot.com/help/chat-widget/enable-javascript-in-your-browser/" rel="noopener nofollow">enable JavaScript</a> in order to use the AI chatbot tool powered by <a href="https://www.chatbot.com/" rel="noopener nofollow" target="_blank">ChatBot</a></noscript>
<!-- End of ChatBot code -->
  <?php load_temp("footer.php"); ?>
</body>
</html>
