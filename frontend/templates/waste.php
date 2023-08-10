<?php
include "libs/load.php";
?>
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="frontend/css/waste.css" rel="stylesheet">
    <script src="https://www.youtube.com/iframe_api"></script>
    <script type="text/javascript" src="http://www.youtube.com/player_api"></script>

    
    <script src="frontend/js/home.js"></script>
    <script>
        function stopVideo() {
            $('#bio').get(0).stopVideo();
        }
    </script>
  </head>


<body>
    <?php load_temp("header.php"); ?>
    {% include "header1.php"%}
    <div class="container">
        <!-- <div class="card card1">
            <img src="frontend/resource/dust.jpg" class="test">
        </div>
        <div class="card card2">
            <div class="row row1">
                <div class="col col2">
                        <div id="carouselExampleInterval" class="carousel slide col1" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                            <img src="frontend/resource/bio.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                            <img src="frontend/resource/non.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="frontend/resource/recycle.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                </div>
                <div  class="col-md g">
                <h1>How to classify waste?</h1>
                </div>
            </div>
        </div>
        <hr> -->
        <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="frontend/resource/waste1.jpg" class="d-block w-100" alt="..." style="height:100%" >
    </div>
    <div class="carousel-item">
      <img src="frontend/resource/waste2.jpg" class="d-block w-100" alt="..." style="height:100%">
    </div>
    <div class="carousel-item">
      <img src="frontend/resource/w1.jpg" class="d-block w-100" alt="..." style="height:100%">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<hr>

    <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="frontend/resource/waste4.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>How to classify waste?</h2>
                        <p>Reduce, Reuse, Recycle: Unite for a Sustainable Future!</p>
                        <!-- <div class="button btn btn-warning text-dark">Learn how!</div>                    -->
                        <button class="btn btn-warning text-dark" type="button" data-bs-toggle="modal" data-bs-target="#offcanvasWithBothOptions" >Learn more!</button>
                        <div class="modal" id="offcanvasWithBothOptions" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Classification of waste</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body section-padding1">
                    <!-- <p>E-mail: nssmadurai@gmail.com</p>
                    <p>Phone no: 7635279865</p> -->
                    <button class="btn btn-warning text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions1" aria-controls="offcanvasWithBothOptions">Bio-degradable</button>

                    <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">Enable body scrolling</button> -->

<div class="offcanvas offcanvas-start c1" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasWithBothOptions1" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Bio-degradable waste</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <p>Biodegradable waste includes any organic matter in waste which can be broken down into carbon dioxide, water, methane, compost, humus, and simple organic molecules by micro-organisms and other living things by composting, aerobic digestion, anaerobic digestion or similar processes. It mainly includes kitchen waste (spoiled food, trimmings, inedible parts), ash, soil, dung and other plant matter. </p>
  <hr>  
  <!-- <h2 class="text-center">Control measures</h2> -->
  <h5 class="text-center">Control measures</h5>
  <h5>Composting</h5>
  <p>Since biodegradable or organic wastes like vegetable peels, waste food, leaves, dead flowers, and egg shells can be recycled, they are converted into manure by burying them in compost pits. Recycling of organic wastes like vegetable peels, waste food, leaves, etc., by burying them in compost pits is called composting. Composting is a simple and almost effortless process of recycling. The biodegradable wastes are degraded by the action of small organisms like bacteria and fungi. There is also a different kind of composting where a kind of earthworm called red worms (or red wrigglers) act on wastes and degrade them.</p>
  <hr>
  <h5>Landfills</h5>
  <p>Large areas used for waste disposal are called landfills. Landfill is another method to manage huge amount, of biodegradable waste. In a landfill, garbage is buried in such a way that it does not damage the environment. Garbage buried inside landfills stay here for a long time as it decomposes very slowly. After a landfill is full, it can be converted into a park. For example, Indraprastha Park in New Delhi is built on a landfill site.</p>

  </div>
</div>
<button class="btn btn-warning text-dark" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">Non bio-degradable</button>

<!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight">Toggle right offcanvas</button> -->

<div class="offcanvas offcanvas-end c2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasRightLabel">Non bio-degradable</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Non-biodegradable substances are materials which do not degrade easily. As they are synthesized and do not occur naturally, degradation is impossible with these products. Therefore, when they stay in the ecosystem for a long period and do not decompose, they harm our environment.</p>
    <hr>
    <h5 class="text-center">Managing the waste</h5>
    <h5>Recycle</h5>
    <p>The process by which waste materials are used to make new products is called recycling. Materials like glass, metal, plastic, and paper are collected, separated, and recycled to make new things</p>
    <hr>
    <h5>Recuse</h5>
    <p>We can reuse certain things for more than one purpose. If we reuse them for other purposes, we can help in reducing the waste.</p>
  </div>
</div>
                </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <div class="row section-padding">
        <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                    <i class="bi bi-camera-reels-fill"></i>
                    <h3 class="card-title">Bio-degradable</h3>
                    <button class="btn btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                <i class="bi bi-camera-reels-fill"></i>
                    <h3 class="card-title">Non bio-degradable</h3>
                    <button class="btn btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#example1Modal">Read more</button>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-4">
            <div class="card text-white text-center bg-dark pb-2">
                <div class="card-body">
                <i class="bi bi-camera-reels-fill"></i>
                    <h3 class="card-title">Recycling</h3>
                    <button class="btn btn-warning text-dark" data-bs-toggle="modal" data-bs-target="#example2Modal">Read more</button>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="modal" id="exampleModal" tabindex="-1">
        <!--<div id="Geeks2" class="modal fade">-->
            <div class="modal-dialog modal-dialog-centered" id="bio1">
                <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">NSS Contact</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="stopVideo()"></button>
                </div>
                <div class="modal-body">
                    <!-- <p>E-mail: nssmadurai@gmail.com</p>
                    <p>Phone no: 7635279865</p> -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" id="bio" src="https://www.youtube.com/embed/szvt1vD0Uug" frameborder="0" allowfullscreen></iframe>
                    </div>                
                </div>
                </div>
            </div>
    </div>
        <div class="modal" id="example1Modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">NSS Contact</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p>E-mail: nssmadurai@gmail.com</p>
                    <p>Phone no: 7635279865</p> -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/szvt1vD0Uug" frameborder="0" allowfullscreen></iframe>
                    </div>                </div>
                </div>
            </div>
        </div>
        <div class="modal" id="example2Modal" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title">NSS Contact</h5> -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <p>E-mail: nssmadurai@gmail.com</p>
                    <p>Phone no: 7635279865</p> -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/szvt1vD0Uug" frameborder="0" allowfullscreen></iframe>
                    </div>                
                </div>
            </div>
        </div>
        <script src="https://www.youtube.com/iframe_api"></script>
        

    </div>
    {% include "bot.php"%}
    {% include "footer.php"%}
    <?php load_temp("footer.php"); ?>

</body>
