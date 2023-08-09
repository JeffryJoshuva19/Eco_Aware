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
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link href="frontend/css/activity.css" rel="stylesheet">
      <script src="frontend/js/activity.js"></script>
    </head>
</head>

<body>
  <?php load_temp("header1.php"); ?>
  {% include "header1.php"%}
  <div class="container"style="background-color: #D8D9DA;border-radius: 20px;">

    <div class="row row-gx-2"style="color:">
      <div class="card p-2">
        <div class="card-body p-2">
          <h1><div class="card-title">Title</div></h1>
          <h3><div class="card-subtitle">Subtitle</div></h3>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, doloribus sunt. Illo, ea tenetur rem provident vero, unde laudantium, molestias voluptatem doloremque aperiam inventore fuga? Minus eaque nesciunt unde. Dolores!
        </div>
      </div>
      <!-- qwerty -->
    </div>
  </div>
  <br/>
                        <!-- <div class="container p-2">
                          <div class="border border-4 border-primary-subtle rounded-1 p-2">
                          <div class="container-md p-2"style="height:320px; overflow-y: scroll;">

                              <div class="news-feed">
                                <h2>News Feed 1</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                              <div class="news-feed">
                                <h2>News Feed 2</h2>
                                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                              </div>
                            <div class="news-feed">
                              <h2>News Feed 3</h2>
                              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            </div>
                            <div class="news-feed">
                              <h2>News Feed 333</h2>
                              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            </div>
                            <div class="news-feed">
                              <h2>News Feed 63</h2>
                              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            </div>
                            <div class="news-feed">
                              <h2>News Feed 53</h2>
                              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
                            </div>
                          </div>
                        </div>
                        </div> -->
                          <!-- <script src="script.js"></script> -->
  <div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 g-lg-4">
      {% for i in data%}
      <div class="col">
        <div class="p-2 border bg-light">
          <div class="card" style="width: 18rem;">
            <img src="frontend/resource/upload_image/{{i.news_image}}" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">{{i.news_dis}}</p>
              <a href="{{i.news_link}}" class="card-link">See More</a>
            </div>
          </div>
        </div>
      </div>
      {% endfor %}
     <!-- <div class="col">
        <div class="p-2 border bg-light">
          <div class="card" style="width: 18rem;">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
              </div>
            </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
          <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="p-2 border bg-light">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text" style="font-size: 12px;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
            </div>
          </div>
        </div>
      </div>-->
    </div>
  </div>
  <?php load_temp("footer.php"); ?>
  {% include "footer.php"%}
</body>
</html>

