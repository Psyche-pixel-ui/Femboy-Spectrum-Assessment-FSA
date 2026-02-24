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

<div id="particles-js"></div> <!-- particles container -->

<div class="cloud" style="top:10%; left:-200px; animation-duration:60s;"></div>
<div class="cloud" style="top:20%; left:-400px; animation-duration:75s;"></div>
<div class="cloud" style="top:30%; left:-300px; animation-duration:90s;"></div>
<div class="cloud" style="top:60%; left:-300px; animation-duration:105s;"></div>
<div class="cloud" style="top:70%; left:-300px; animation-duration:120s;"></div>
<div class="cloud" style="top:90%; left:-300px; animation-duration:135s;"></div>

<header class="site-header">
<button id="theme-toggle" class="theme-toggle">🌙</button>
</header>

<!-- LEFT SIDE (MAIN MASCOT) -->
<div class="left-section">

<div class="character-group">
<img src="assets/images/femboy_pixel_art_by_ghostytoons_djgzbss-fullview.png" class="character pixel-art">
</div>

<div class="rainbow-bar"></div>

</div>

<div class="right-section">

<div class="title-banner">
    <div class="title-inner">
        <span class="rainbow-text">Femboy</span>
        <span class="title-sub">Spectrum Assessment (FSA)</span>
    </div>
</div>

<form action="includes/formhandler.php" method="post" enctype="multipart/form-data" class="form-boxes">

<div class="form-box name-box">
<div class="form-label">
  <span class="typewriter">What is your name?</span>
</div>

<input type="text" name="name" class="form-input" required>
</div>

<div class="form-box upload-box">
<div class="form-label upload-label">Can I have ur cute selfie photo?</div>

<input type="file" id="image" name="image" class="file-input" required>
<div class="file-button-wrapper">
  <label for="image" class="file-label">Choose File ❤️</label>
</div>


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
echo '
<div class="output-display">
    <img src="assets/images/astolfo.gif" class="output-character" alt="Astolfo NPC">
    <div class="output-text">
        '.htmlspecialchars($_GET["output"]).'
    </div>
</div>';
}
?>

<script src="https://cdn.jsdelivr.net/npm/particles.js"></script>
<script>
particlesJS("particles-js", {
  "particles": {
    "number": { "value": 45, "density": { "enable": true, "value_area": 800 } },
    "color": { "value": ["#ffc6f0","#bcd4ff","#bfffe7","#ffd0d0","#ffd93d"] },
    "shape": {
      "type": "image",
      "image": {
        "src": "assets/images/heart.png", // you need a small heart image
        "width": 16,
        "height": 16
      }
    },
    "opacity": { "value": 0.7, "random": true },
    "size": { "value": 16, "random": true },
    "line_linked": { "enable": false },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "top",
      "out_mode": "out"
    }
  },
  "interactivity": {
    "events": {
      "onhover": { "enable": false },
      "onclick": { "enable": false }
    }
  },
  "retina_detect": true
});
</script>


</body>
</html>