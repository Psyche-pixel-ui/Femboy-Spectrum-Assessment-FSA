<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $image = $_FILES["image"];
    
    header("Location: ../index.php");
}