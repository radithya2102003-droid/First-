<?php 
// Backend Logic
if (isset($_GET['d'])) {
    echo "<b>Content loaded from server!</b>";
    exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Program 8</title>
    <style> body { font-family: sans-serif; padding: 20px; } </style>
</head>
<body>
    <h2>AJAX Text</h2>
    <button onclick="load()">Click to Load</button>
    <p id="box">Wait...</p>

    <script>
    function load() {
        var x = new XMLHttpRequest();
        
        x.onload = function() {
            document.getElementById("box").innerHTML = this.responseText;
        };
        
        x.open("GET", "?d=1");
        x.send();
    }
    </script>
    <br><a href="index.php">Back</a>
</body>
</html>
