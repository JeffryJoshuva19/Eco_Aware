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
    <link href="frontend/vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="frontend/vendor/assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/x-icon" href="frontend/resource/iconn.ico">
    <link href="frontend/css/home.css" rel="stylesheet">
    <script src="frontend/js/home.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
    
  </head>
</head>
<?php load_temp("header.php"); ?>
{% include "header.php"%}

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
        <h1 class="adjt">Complaints</h1>
        <div class="row content">
           
          <div class="card adj1" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 18rem;">
            <!-- <img src="frontend/resource/imm1.jpg" class="card-img-top" alt="..."> -->
            <div class="card-body">
            </div>
             
          </div>
        
          <p class="col-md-6 g content">By donating to green initiatives in Madurai, you'll play a crucial role in making the city cleaner, greener, and more eco-friendly, benefiting both the environment and the local community.<p>
        </div>
        <hr>
        <h1 class="adjt">Donation</h1>
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
                  <form action="/post_query" method="POST">
                      <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="area" name="area" placeholder="" required>
                        <label for="floatingInput">Area</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="wnum" name="wnum" placeholder="name@example.com" required>
                        <label for="floatingInput">Ward number</label>
                      </div>
                      <div class="form-floating mb-3">
                      <textarea class="form-control" placeholder="Leave a comment here" id="query" name="query" rows="4" cols="50" required></textarea>
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
          </div>
          <hr>
          <h1 class="adjt">Events</h1>
          <div class="container-fluid content">
          <div class="row">
              <div class="col-lg-12">
                  <div class="">
                     
                      <div class="card-body row">
                        {% for i in eventt%}
                      <div class="col-md-4">
                        <div class="card ecard" style="width: 17rem;background-color: aquamarine;">
                          <div class="card-body hh">
                            <h5 class="card-title">{{i.event_name}} on {{i.event_date}}</h5>
                            <hr>
                            <p class="card-text">{{i.event_dis}}</p>
                            <a href="{{i.event_link}}" class="btn btn-primary">Read more</a>
                          </div>
                        </div>
                      </div> 
                      {% endfor %}
                      </div>
                  </div>
                  <!-- end card -->
              </div>
          </div>
          <hr>
          <div class="custom-container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Exploring the Hidden Impact of Environmental Pollution"</h2>
                    <p>Embark on a visual journey through the intricate world of environmental pollution with our enlightening animation. In this captivating video, we unveil the concealed consequences of pollution on our planet's air, water, soil, and wildlife. Discover how human activities and industries contribute to this global challenge and witness the far-reaching effects that ripple through ecosystems. Join us in raising awareness and understanding the urgent need for sustainable solutions to ensure a cleaner, healthier future for generations to come. Don't miss this enlightening exploration – watch now!</p>
                </div>
                <div class="col-md-6">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/JaSe85Mcwp0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
      <div>
    </div> 
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
    {% include "footer.php"%}
</body>
</html>
