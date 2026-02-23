<!DOCTYPE html>
<html>
<head>
    <title>Femboy Spectrum Assessment (FSA)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>WELCOME TO THE FEMBOY SPECTRUM ASSESSMENT (FSA)</h1>

<form action="includes/formhandler.php" method="post" enctype="multipart/form-data">
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

<!--  
TODO: 
- The output should show the uploaded photo of the user, the rating, and the message.
- We need CSS for styling the page and making it look nice.
    - Make it pink, sparkly, and cute.
- Add some cute femboy-related images and icons to the page.
-->

</body>
</html>