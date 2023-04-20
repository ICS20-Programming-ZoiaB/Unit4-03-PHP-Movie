<!DOCTYPE html>
<html>
 <head>

   <!-- Metadata -->
   <meta charset="utf-8">
   <meta name="description" content="PHP Movie Ratings Webpage">
   <meta name="keywords" content="immaculata, ics2o">
   <meta name="author" content="ZoiaB">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Code for the favicon -->
   <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/android-chrome-512x512.png">
   <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/android-chrome-512x512.png">
   <link rel="manifest" href="./fav_index/android-chrome-512x512.png">
   
   <!-- Stylesheet -->
   <link rel="stylesheet" href="./css/style.css">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-cyan.min.css" />

   <!-- Title -->
   <title>Movie Ratings in PHP</title>
 </head>
 <body>

    <!-- Header and body text -->
      <?php
        echo "<h1>Movie Ratings</h1>";
        echo "<p>Greetings! This web page can determine what movies you can watch based on your age.</p>";
        echo "<p>Please input your information below:</p>";
      ?>
    <?php echo "<h3>Input:</h3>"; ?>
       
    <!-- Form for user input -->
    <form action="./results.php" method="post" target="results">
      <label for="age">How old are you?</label>
      <input type="number" step="1" name="user-age" placeholder="Age"><br><br>
      <input type="submit" id="button" value="Check" button class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
    </form>
    </div>
    </div>

   <!-- Image -->
   <center>
   <img src="./images/movie-night.png" alt="Movie Night" width="400" width="400">
   </center>

     <!-- Iframe for results -->
     <iframe id="results" name="results"></iframe>
   </div>
 </body>
</html>