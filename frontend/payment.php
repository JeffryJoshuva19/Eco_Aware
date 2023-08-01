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
    <link href="css/home.css" rel="stylesheet">
    <script src="js/home.js"></script>
  </head>
</head>

  <body>
    <?php load_temp("header.php"); ?>
    <div class="row">
      <div class="col gy-2">
      </div>
      <div class="col gy-2">
        <div class="container">
          <!-- <h1>Donate to Green Madurai</h1> -->
          <main>
            <section class="donation-form">
              <h2>Donation</h2>
              <form>
                <label for="categories" class="form-label">You are helping</label>
                <select id="categories" name="categories" class="form-control"required>
                  <option value="Trees">Trees</option>
                  <option value="DamCleaning">Dam Cleaning</option>
                  <option value="PublicPlace">Public Places</option>
                  <option value="Others">Others</option>
                  <!-- Add more currency options as needed -->
                </select>
                <label for="amount">Amount:</label>
                <input type="number" id="amount" name="amount" step="0.01" required>
                <button type="submit">Donate Now</button>
              </form>
            </section>
          </main>
          <!-- <footer>
            <p>&copy; 2023 Madurai green city. All rights reserved.</p>
          </footer> -->
        </div>
      </div>
  </body>
</html>
<style>
   body {
  font-family: Arial, sans-serif;
  line-height: 1.6;
  margin: 0;
  padding: 0;
}



main {
  padding: 2rem;
}

.donation-form {
  max-width: 400px;
  margin: 0 auto;
}

h2 {
  margin-bottom: 1rem;
}

form {
  display: flex;
  flex-direction: column;
}

label {
  margin-bottom: 0.5rem;
}

input,
select {
  padding: 0.5rem;
  margin-bottom: 1rem;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  padding: 0.75rem 1rem;
  background-color: #007BFF;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

footer {
  background-color: #f4f4f4;
  text-align: center;
  padding: 1rem;
}

</style>
    </div>
</body>