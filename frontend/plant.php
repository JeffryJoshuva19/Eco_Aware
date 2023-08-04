<?php
include "libs/load.php";
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
  <script src="vendor/assets/js/color-modes.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="generator" content="Hugo 0.112.5">
  <link href="vendor/assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="css/plant.css" rel="stylesheet">
  
</head>

<body>
  <?php load_temp("header.php"); ?>
  <div class="container">
    <div class="plantimg">
      <img src="resource/water1.jpg" alt="">
    </div>
        <div class="container1">
          <h1>Starting, maintaining and harvesting your garden</h1>
          <br>
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-heading">Starting a garden</div>
        <div class="accordion-content">
          <h2>Clean and disinfect gardening tools and containers</h2>
          <ul>
            <li>In the fall before you put them away for the winter.</li>
            <li>In the spring before you use them if you didn’t clean them in the fall.</li>
            <li>After working with an infected plant and before moving onto the next plant.</li>
            <li>After you use your tools at another garden site and before you use them at home.</li>
          </ul>
          <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dPLHi7tsoFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-heading">Composting</div>
        <div class="accordion-content">
        <h2>Composting, fertilizing and weeding</h2>
          <ul>
            <li>In the fall before you put them away for the winter.</li>
            <li>In the spring before you use them if you didn’t clean them in the fall.</li>
            <li>After working with an infected plant and before moving onto the next plant.</li>
            <li>After you use your tools at another garden site and before you use them at home.</li>
          </ul>
          <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dPLHi7tsoFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-heading">Harvesting</div>
        <div class="accordion-content">
        <h2>Harvesting and storing</h2>
          <ul>
            <li>In the fall before you put them away for the winter.</li>
            <li>In the spring before you use them if you didn’t clean them in the fall.</li>
            <li>After working with an infected plant and before moving onto the next plant.</li>
            <li>After you use your tools at another garden site and before you use them at home.</li>
          </ul>
          <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dPLHi7tsoFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-heading">Composting</div>
        <div class="accordion-content">
        <h2>Composting, fertilizing and weeding</h2>
          <ul>
            <li>In the fall before you put them away for the winter.</li>
            <li>In the spring before you use them if you didn’t clean them in the fall.</li>
            <li>After working with an infected plant and before moving onto the next plant.</li>
            <li>After you use your tools at another garden site and before you use them at home.</li>
          </ul>
          <div class="video">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/dPLHi7tsoFU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>

    </div>
    </div>
    <div class="donate">
      <div class="donate-background">
        <div class="donate-content">
          <h2>Support Our Cause</h2>
          <p>Your contribution can make a difference. Help us in our mission to protect the environment and promote sustainable practices.</p>
          <button>Donate Now</button>
        </div>
      </div>
    </div>
</div>


  <script>
    // Get all the accordion items
    const accordionItems = document.querySelectorAll(".accordion-item");

    // Attach click event listeners to each accordion heading
    accordionItems.forEach((item) => {
      const heading = item.querySelector(".accordion-heading");
      const content = item.querySelector(".accordion-content");

      // Toggle the content visibility on click
      heading.addEventListener("click", () => {
        content.classList.toggle("active");

        // Close other accordion items when a new one is clicked (optional)
        accordionItems.forEach((otherItem) => {
          if (otherItem !== item) {
            otherItem.querySelector(".accordion-content").classList.remove("active");
          }
        });
      });
    });
  </script>
</body>
</html>
