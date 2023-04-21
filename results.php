<?php

// Setting constants: first age threshold is 17, second is 13, third is 5
define("FIRST_THRESHOLD", 17);
define("SECOND_THRESHOLD", 13);
define("THIRD_THRESHOLD", 5);

//declaring variables
$message = "";

// Get the user's age from input form
$userAge = intval($_POST["user-age"]);

//if: if user is 17 or older, tell them they can watch R-rated movies
if ($userAge >= FIRST_THRESHOLD) {
    $message = "You are old enough to see an R-rated movie by yourself, without a parent or guardian.";
}

//elseif: if user is 13 or older, tell them they can watch PG-13 movies
elseif ($userAge >= SECOND_THRESHOLD) {
    $message = "You can watch a PG-13 movie by yourself, without a parent or guardian.";
}

//elseif: if user is 5 or older, tell them they can watch G and PG movies
elseif ($userAge >= THIRD_THRESHOLD) {
    $message = "You can see a G or PG movie by yourself, without a parent or guardian.";
}

//if user enters 0 or a negative number, say they must enter a valid age
elseif ($userAge < 0) {
    $message = "Please enter a valid age.";
}

//elseif: otherwise, tell them to enter age
elseif (empty($userAge)) {
    $message = "Please enter age.";
}

//else: otherwise (any age less than 5), tell them they need supervision
else {
    $message = "You should be supervised by a parent or guardian while watching any movie.";
}

// Display movie rating
echo "$message" . " Thank you very much for verifying your age!";

?>