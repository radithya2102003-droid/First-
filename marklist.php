<?php 
// Backend Logic
if (isset($_GET['id'])) {
    $conn = new mysqli("localhost", "root", "", "MyDB");
    $id = $_GET['id'];
    
    $result = $conn->query("SELECT * FROM Students WHERE Regno=" . $id);
    
    if ($row = $result->fetch_assoc()) {
        echo "Name: " . $row['Name'] . ", Marks: " . $row['Total_Mark'];
    }
    exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Program 10</title>
    <style> 
        body { font-family: sans-serif; padding: 20px; } 
        select { padding: 5px; } 
    </style>
</head>
<body>
    <h2>AJAX Database</h2>
    <select onchange="show(this.value)">
        <option value="">Select Student</option>
        <option value="2101260001">Salman</option>
        <option value="2101260002">Abdulla</option>
    </select>
    <p id="res">Info here...</p>

    <script>
    function show(id) {
        if (!id) return;
        
        var x = new XMLHttpRequest();
        
        x.onload = function() {
            document.getElementById("res").innerHTML = this.responseText;
        };
        
        x.open("GET", "?id=" + id);
        x.send();
    }
    </script>
    <br><a href="index.php">Back</a>
</body>
</html>
