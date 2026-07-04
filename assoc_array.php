<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 2: Associative Array</title>
    <style>
        :root {
    --primary-color: #2c3e50;
    --accent-color: #e74c3c;
    --background-color: #f4f6f9;
    --box-color: #ffffff;
    --text-color: #333;
}

body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: var(--background-color);
    color: var(--text-color);
}

.container {
    width: 90%;
    max-width: 900px;
    margin: auto;
}

header {
    background: var(--primary-color);
    color: #fff;
    padding: 20px 0;
    text-align: center;
    margin-bottom: 20px;
}

h1 {
    margin: 0;
}

.output-box {
    background: var(--box-color);
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

h3 {
    color: var(--primary-color);
    border-bottom: 2px solid #eee;
    padding-bottom: 8px;
    margin-bottom: 15px;
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

th {
    background: var(--primary-color);
    color: #fff;
    padding: 10px;
    text-align: left;
}

td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

tr:nth-child(even) {
    background: #f9f9f9;
}

tr:hover {
    background: #f1f1f1;
}

/* Link Styling */
a {
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}
</style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Associative Array</h1>
            <p>Module 1 - Program 2</p>
        </div>
    </header>

    <div class="container">
        
        <!-- Part 1: Initial Array -->
        <div class="output-box">
            <h3>Initial Student Details</h3>
            <?php
            $student = array(
                "rollno" => "27",
                "name" => "Vaishnav P M",
                "class" => "S4 IF",
                "year" => "2021",
                "fee" => "20000"
            );
            
            echo "<table><tr><th>Key</th><th>Value</th></tr>";
            foreach($student as $key => $value) {
                echo "<tr><td>".ucfirst($key)."</td><td>$value</td></tr>";
            }
            echo "</table>";
            ?>
        </div>

        <!-- Part 2: Modified Array -->
        <div class="output-box">
            <h3>After Adding Phone & Place</h3>
            <?php
            // Adding new elements
            $student["phonenumber"] = "9995460397";
            $student["place"] = "Calicut";

            echo "<table><tr><th>Key</th><th>Value</th></tr>";
            foreach($student as $key => $value) {
                // Highlight new keys
                $style = ($key == 'phonenumber' || $key == 'place') ? "style='color: var(--accent-color); font-weight:bold;'" : "";
                echo "<tr><td $style>".ucfirst($key)."</td><td $style>$value</td></tr>";
            }
            echo "</table>";
            ?>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <a href="index.php" style="color: var(--primary-color); text-decoration: none;">&larr; Back to Index</a>
        </div>
    </div>
</body>
</html>
