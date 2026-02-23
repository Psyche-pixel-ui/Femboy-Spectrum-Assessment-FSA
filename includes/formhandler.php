<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $image = $_FILES["image"];

    if (empty($name)) {
        exit();
    }

    $rating = rand(0,100);
    if ($rating >= 50) {
        $output = "Congratulations, $name! Your femboy spectrum rating is $rating%. You are a certified femboy!";
    } else {
        $output = "Not a femboy.";

    }
    
    header("Location: ../index.php");
}
else {
    header("Location: ../index.php");
}