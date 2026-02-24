<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Femboy Spectrum Assessment (FSA)</title>

<link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="playful-bg">

<header class="site-header">
<button id="theme-toggle" class="theme-toggle">🌙</button>
</header>

<div class="playful-container">

<div class="left-section">
<div class="character-group">
<img src="assets/images/astolfo.gif" class="character astolfo">
</div>

<div class="rainbow-bar"></div>

<div class="character-group">
<img src="assets/images/femboy_pixel_art_by_ghostytoons_djgzbss-fullview.png" class="character pixel-art">
</div>
</div>

<div class="right-section">

<div class="title-banner">
<div class="title-inner">
<span style="color:#ff0000">Fem</span><span style="color:#00ff00">boy</span> Spectrum Assessment (FSA)
</div>
</div>

<form action="includes/formhandler.php" method="post" enctype="multipart/form-data" class="form-boxes">

<div class="form-box name-box">
<div class="form-label">What is your name?</div>
<input type="text" name="name" class="form-input" required>
</div>

<div class="form-box upload-box">
<div class="form-label upload-label">Can I have ur cute selfie photo?</div>

<input type="file" id="image" name="image" class="file-input" required>
<label for="image" class="file-label">Choose File ❤️</label>

<div class="attention-box">
<div>⚠️</div>
<div class="attention-text">ATTENTION!</div>
</div>

<button type="submit" name="submit" class="analyze-btn">Analyze Image</button>
</div>

</form>

</div>
</div>

<?php
if(isset($_GET["output"])) {
echo '<div class="output-display"><h2>' . htmlspecialchars($_GET["output"]) . '</h2></div>';
}
?>

<script src="assets/js/theme-toggle.js"></script>
<script src="assets/js/ui-prompt.js"></script>

</body>
</html>