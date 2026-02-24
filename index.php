<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Femboy Spectrum Assessment (FSA)</title>

<link rel="icon" href="assets/images/favicon.svg" type="image/svg+xml">
<link rel="stylesheet" href="assets/css/style.css">

<!--Popup CSS-->
<style>
#popup-overlay {
    display: none;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(255, 182, 217, 0.55);
    backdrop-filter: blur(4px);
    z-index: 9999;
    justify-content: center;
    align-items: center;
}

#popup-overlay.show {
    display: flex;
}

#popup-box {
    position: relative;
    background: linear-gradient(135deg, #ffc6f0, #bcd4ff, #bfffe7, #ffd0d0);
    background-size: 400% 400%;
    animation: gradientShift 1.5s ease infinite, popIn 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    border-radius: 32px;
    padding: 50px 60px;
    text-align: center;
    font-size: 1.8rem;
    font-weight: 900;
    color: #d63384;
    text-shadow: 1px 1px 0px #fff, 3px 3px 0px #f7a8d0;
    box-shadow:
        0 0 0 5px #fff,
        0 0 0 9px #ffc6f0,
        0 0 40px rgba(255, 150, 200, 0.7),
        0 0 80px rgba(188, 212, 255, 0.4);
    max-width: 580px;
    width: 90%;
    border: 4px dashed #ffaad4;
    overflow: hidden;
}

/* Scrolling emoji top border */
#popup-box::before {
    content: "✨🌸💖🌸✨🌸💖🌸✨🌸💖🌸✨🌸💖🌸";
    position: absolute;
    top: 8px;
    left: 0; right: 0;
    font-size: 1rem;
    animation: scrollStars 2s linear infinite;
    white-space: nowrap;
}

/* Scrolling emoji bottom border */
#popup-box::after {
    content: "💜🌈🎀🌈💜🌈🎀🌈💜🌈🎀🌈💜🌈🎀🌈";
    position: absolute;
    bottom: 8px;
    left: 0; right: 0;
    font-size: 1rem;
    animation: scrollStars 2s linear infinite reverse;
    white-space: nowrap;
}

@keyframes scrollStars {
    0%   { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

@keyframes gradientShift {
    0%   { background-position: 0% 50%; }
    50%  { background-position: 100% 50%; }
    100% { background-position: 0% 50%; }
}

@keyframes popIn {
    0%   { transform: scale(0.3) rotate(-10deg); opacity: 0; }
    60%  { transform: scale(1.1) rotate(3deg);   opacity: 1; }
    100% { transform: scale(1)   rotate(0deg);   opacity: 1; }
}

@keyframes popOut {
    0%   { transform: scale(1)   rotate(0deg);   opacity: 1; }
    100% { transform: scale(0.3) rotate(10deg);  opacity: 0; }
}

#popup-box.hide {
    animation: popOut 0.3s ease forwards;
}

#popup-message {
    animation: wobble 0.6s ease infinite alternate;
    display: block;
    margin-top: 10px;
}

@keyframes wobble {
    0%   { transform: rotate(-2deg) scale(1);    }
    100% { transform: rotate(2deg)  scale(1.04); }
}
</style>


</head>

<body class="playful-bg">

<!--Popup HTML-->
<div id="popup-overlay">
    <div id="popup-box">
        <div id="popup-message"></div>
    </div>
</div>


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

<input type="text" name="name" class="form-input">
</div>

<div class="form-box upload-box">
<div class="form-label upload-label">Can I have ur cute selfie photo?</div>

<input type="file" id="image" name="image" class="file-input">
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
        "src": "assets/images/heart.png",
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

// == Popup JavaScript ==

function showPopup(message) {
    var overlay = document.getElementById("popup-overlay");
    var box = document.getElementById("popup-box");
    var msg = document.getElementById("popup-message");

    msg.innerHTML = message;
    box.classList.remove("hide");
    overlay.classList.add("show");

    setTimeout(function() {
        box.classList.add("hide");
        setTimeout(function() {
            overlay.classList.remove("show");
        }, 300);
    }, 2000);
}

// Intercept form submit and check if name or image is missing
document.querySelector("form").addEventListener("submit", function(e) {
    var name = document.querySelector("input[name='name']").value.trim();
    var image = document.querySelector("input[name='image']").files.length;

    if (name === "" && image === 0) {
        e.preventDefault();
        showPopup("😭 BESTIE!! You forgot your NAME and your PHOTO!!! 🙏🙏");
    } else if (name === "") {
        e.preventDefault();
        showPopup("👻 WHO ARE YOU?? Type your name first!! 😤📛");
    } else if (image === 0) {
        e.preventDefault();
        showPopup("📸 WHERE IS THE SELFIE?? Upload a photo!! 😭💔");
    }
});
</script>


</body>
</html>