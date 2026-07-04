<?php
session_start();

$message = "";

// Handle Save Session
if (isset($_POST['save'])) {
    $_SESSION["user"] = htmlspecialchars($_POST['user_name']);
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Handle Destroy Session
if (isset($_POST['destroy'])) {
    session_unset();
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Set message after redirect
if (isset($_SESSION["user"])) {
    $message = "Session variable 'user' is set to: " . $_SESSION["user"];
} else {
    $message = "No session variable set.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Program 4: Session</title>
    <link rel="stylesheet" href="css/simple_style.css">
    <style>
        .container {
            width: 400px;
            margin: 50px auto;
            font-family: Arial;
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            background: #f4f4f4;
            border-left: 5px solid #5cb85c;
        }
        .error {
            border-left: 5px solid #d9534f;
            color: red;
        }
        button {
            padding: 8px 12px;
            margin-top: 10px;
            cursor: pointer;
        }
        .destroy-btn {
            background-color: #d9534f;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Session Operations</h1>
    <p>Sessions allow you to store user information on the server for later use.</p>

    <!-- Form -->
    <form method="post">
        <div class="form-group">
            <label>Enter Username:</label>
            <input type="text" name="user_name" required>
        </div>

        <button type="submit" name="save">Save Session</button>
        <br>
        <button type="submit" name="destroy" class="destroy-btn">Destroy Session</button>
    </form>

    <!-- Result -->
    <div class="result <?php echo (!isset($_SESSION["user"])) ? 'error' : ''; ?>">
        <?php echo $message; ?>
    </div>

    <hr>

    <!-- Current Session -->
    <p><strong>Current Session Value:</strong>
        <?php
        if (isset($_SESSION["user"])) {
            echo $_SESSION["user"];
        } else {
            echo "No session variable set.";
        }
        ?>
    </p>

    <a href="index.php">Back to Index</a>
</div>

</body>
</html>