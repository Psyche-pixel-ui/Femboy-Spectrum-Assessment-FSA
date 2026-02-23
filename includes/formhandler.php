<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $image = $_FILES["image"];

    if (empty($name)) {
        header("Location: ../index.php");
        exit();
    }

    // TODO: Create a message for within the ranges of: 0-20%, 21-40%, 41-60%, 61-80%, 81-100% so that it's different every time. Maybe add some cute emojis to the message as well.

    $rating = rand(0,100);
    if ($rating >= 50) {
        $output = "Congratulations, $name! Your femboy spectrum rating is $rating%. You are a certified femboy!";
    } else {
        $output = "Not a femboy.";
    }
    
    // Back to index.php with the result
    header("Location: ../index.php?output=" . urlencode($output));
    exit();
}
else {
    header("Location: ../index.php");
    exit();
}