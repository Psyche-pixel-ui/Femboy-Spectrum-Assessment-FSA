<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Femboy Spectrum Assessment (FSA)</title>
    <link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
        <button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">🌙</button>
</header>

<section class="hero">
    <div class="hero-inner">
        <h1>Femboy Spectrum Assessment (FSA)</h1>
        <p class="lead">Upload a selfie and receive a friendly, respectful evaluation with a cute aesthetic.</p>
        <a class="btn btn-primary" href="#form">Get started</a>
    </div>
</section>

<main class="content">

<form id="form" action="includes/formhandler.php" method="post" enctype="multipart/form-data" class="card">
    <label for="name">What is your name?</label><br>
    <input type="text" id="name" name="name" required><br><br>

    <label for="image">Can I have ur cute selfie photo?</label><br>
    <input type="file" name="image" required><br><br>

    <button type="submit" name="submit">Analyze Image</button>
    
</form>

<!-- Display the output of the conditional statement from formhandler.php -->

<?php
if(isset($_GET["output"])) {
    echo "<hr>";
    echo "<h2>" . htmlspecialchars($_GET["output"]) . "</h2>";
}
?>
    </main>
<!--  
TODO: 
- The output should show the uploaded photo of the user, the rating, and the message.
- We need CSS for styling the page and making it look nice.
    - Make it pink, sparkly, and cute.
- Add some cute femboy-related images and icons to the page.
-->
<script src="assets/js/theme-toggle.js"></script>
</body>
</html>