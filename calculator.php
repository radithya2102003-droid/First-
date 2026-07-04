<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 1: Simple Calculator</title>
    
    <style>
        .calculator {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 400px;
            margin: 0 auto;
        }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: var(--primary-color);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover { background-color: #357abd; }
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 5px solid var(--accent-color);
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Simple Calculator</h1>
            <p>Module 1 - Program 1</p>
        </div>
    </header>

    <div class="container">
        <div class="calculator">
            <form method="post">
                <div class="form-group">
                    <label>First Number</label>
                    <input type="number" name="num1" step="any" required value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">
                </div>
                <div class="form-group">
                    <label>Operator</label>
                    <select name="operator">
                        <option value="+" <?php if(isset($_POST['operator']) && $_POST['operator'] == '+') echo 'selected'; ?>>Add (+)</option>
                        <option value="-" <?php if(isset($_POST['operator']) && $_POST['operator'] == '-') echo 'selected'; ?>>Subtract (-)</option>
                        <option value="*" <?php if(isset($_POST['operator']) && $_POST['operator'] == '*') echo 'selected'; ?>>Multiply (*)</option>
                        <option value="/" <?php if(isset($_POST['operator']) && $_POST['operator'] == '/') echo 'selected'; ?>>Divide (/)</option>
                        <option value="%" <?php if(isset($_POST['operator']) && $_POST['operator'] == '%') echo 'selected'; ?>>Modulus (%)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Second Number</label>
                    <input type="number" name="num2" step="any" required value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">
                </div>
                <button type="submit" name="calculate">Calculate</button>
            </form>

            <?php
            if(isset($_POST['calculate'])) {
                $n1 = $_POST['num1'];
                $n2 = $_POST['num2'];
                $op = $_POST['operator'];
                $res = "";

                switch($op) {
                    case '+': $res = $n1 + $n2; break;
                    case '-': $res = $n1 - $n2; break;
                    case '*': $res = $n1 * $n2; break;
                    case '/': 
                        if($n2 == 0) $res = "Cannot divide by zero";
                        else $res = $n1 / $n2; 
                        break;
                    case '%': 
                         if($n2 == 0) $res = "Cannot modulus by zero";
                         else $res = $n1 % $n2;
                         break;
                    default: $res = "Invalid Operator";
                }
                echo "<div class='result'>Result: $n1 $op $n2 = $res</div>";
            }
            ?>
        </div>
        <div style="text-align: center; margin-top: 20px;">
            <a href="index.php" style="color: var(--primary-color); text-decoration: none;">&larr; Back to Index</a>
        </div>
    </div>
</body>
</html>
