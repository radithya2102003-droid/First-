<?php 
// Backend Logic
if (isset($_GET['x'])) {
    header("Content-type:text/xml");
    echo "<R>
            <S>Kerala</S>
            <S>Tamil Nadu</S>
          </R>";
    exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Program 9</title>
    <style> body { font-family: sans-serif; padding: 20px; } </style>
</head>
<body>
    <h2>AJAX XML</h2>
    <button onclick="load()">Get States</button>
    <ul id="list"></ul>

    <script>
    function load() {
        var x = new XMLHttpRequest();
        
        x.onload = function() {
            var items = this.responseXML.getElementsByTagName("S");
            var txt = "";
            
            for (var i = 0; i < items.length; i++) {
                txt += "<li>" + items[i].textContent + "</li>";
            }
            
            document.getElementById("list").innerHTML = txt;
        };
        
        x.open("GET", "?x=1"); 
        x.send();
    }
    </script>
    <br><a href="index.php">Back</a>
</body>
</html>
