<!DOCTYPE html>
<html>
<head>
    <title>Program 6</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        input, button { padding: 5px; margin: 5px; }
    </style>
</head>
<body>
    <h2>Login Form</h2>
    <form method="post">
        User: <input type="text" name="u"><br>
        Pass: <input type="password" name="p"><br>
        <button type="submit" name="log">Login</button>
    </form>

    <?php
    if (isset($_POST['log'])) {
        $conn = new mysqli("localhost", "root", "password", "MyDB");
        
        $u = $_POST['u'];
        $p = $_POST['p'];
        $sql = "SELECT * FROM login WHERE UserID='$u' AND Password='$p'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<h3 style='color:green'>Success!</h3>";
        } else {
            echo "<h3 style='color:red'>Failed!</h3>";
        }
    }
    ?>
    <br><a href="index.php">Back</a>
</body>
</html>
