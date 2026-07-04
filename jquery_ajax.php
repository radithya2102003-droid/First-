<?php 
if (isset($_GET['j'])) {
    echo "Data from jQuery Load!";
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Program 13</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style> body { font-family: sans-serif; padding: 20px; } </style>
</head>
<body>
    <h2>jQuery AJAX</h2>
    <button id="btn">Load Data</button>
    <p id="box"></p>

    <script>
    $("#btn").click(function(){
        $("#box").load("?j=1");
    });
    </script>
    <br><a href="index.php">Back</a>
</body>
</html>
