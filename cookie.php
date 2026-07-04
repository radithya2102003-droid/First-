<!DOCTYPE html>
<html>
<head>
    <title>Program 5</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        button { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h2>Cookie Demo</h2>
    
    <?php
    $c_name = "UserColor";
    
    if (isset($_POST['del'])) {
        setcookie($c_name, "", time() - 3600); // Delete time
        echo "Cookie Deleted.<br>";
    } 
    elseif (!isset($_COOKIE[$c_name])) {
        setcookie($c_name, "Blue", time() + 3600); // Set time
        echo "Cookie Set to 'Blue'.<br>";
    }
    
    echo "<h3>Cookie Value: ";
    if (isset($_COOKIE[$c_name])) {
        echo $_COOKIE[$c_name];
    } else {
        echo "Not Set (Refresh page)";
    }
    echo "</h3>";
    ?>

    <form method="post">
        <button type="submit" name="del">Delete Cookie</button>
        <button type="submit">Refresh Page</button>
    </form>
    <br><a href="index.php">Back</a>
</body>
</html>
