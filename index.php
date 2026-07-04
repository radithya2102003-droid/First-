
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Web Development Lab - 4268</title>
    <link rel="stylesheet" href="css/style.css">
<style>
    /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* Body styling */
body {
    background-color: #f4f6f9;
    color: #333;
    line-height: 1.6;
}

/* Container */
.container {
    width: 90%;
    max-width: 1100px;
    margin: auto;
}

/* Header */
header {
    background: #2c3e50;
    color: #fff;
    padding: 20px 0;
    text-align: center;
    margin-bottom: 20px;
}

header h1 {
    margin-bottom: 5px;
}

header p {
    font-size: 14px;
    color: #ddd;
}

/* Table styling */
.program-list {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
}

/* Table header */
thead {
    background-color: #3498db;
    color: #fff;
}

thead th {
    padding: 12px;
    text-align: left;
}

/* Table rows */
tbody td {
    padding: 10px;
    border-bottom: 1px solid #ddd;
}

/* Alternate row color */
tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Hover effect */
tbody tr:hover {
    background-color: #f1f7ff;
}

/* Links */
a {
    text-decoration: none;
    color: #3498db;
    font-weight: bold;
}

a:hover {
    color: #21618c;
}

/* Footer */
footer {
    margin-top: 30px;
    background: #2c3e50;
    color: #fff;
    text-align: center;
    padding: 15px 0;
    font-size: 14px;
}
</style>
</head>
<body>

    <header>
        <div class="container">
            <h1>Advanced Web Development Lab</h1>
            
        </div>
    </header>

    <div class="container">
        <div class="program-list">
            <table>
                <thead>
                    <tr>
                        <th width="10%">Sl. No.</th>
                        <th width="60%">Program Name</th>
                        <th width="15%">Module</th>
                        <th width="15%">Link</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Simple Calculator</td>
                        <td>Module 1</td>
                        <td><a href="calculator.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Associative Array</td>
                        <td>Module 1</td>
                        <td><a href="assoc_array.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Two Dimensional Array</td>
                        <td>Module 1</td>
                        <td><a href="array.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Session Operations</td>
                        <td>Module 1</td>
                        <td><a href="session.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Cookies Operations</td>
                        <td>Module 1</td>
                        <td><a href="cookie.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Login Form</td>
                        <td>Module 2</td>
                        <td><a href="login.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Students Mark List</td>
                        <td>Module 2</td>
                        <td><a href="marklist.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Load Data from Text File (AJAX)</td>
                        <td>Module 3</td>
                        <td><a href="ajax_text.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>Load Data from XML File (AJAX)</td>
                        <td>Module 3</td>
                        <td><a href="ajax_xml.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>Load Data using jQuery & AJAX</td>
                        <td>Module 3</td>
                        <td><a href="jquery_ajax.php">View Program</a></td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>Students Mark List (Bootstrap Table)</td>
                        <td>Module 4</td>
                        <td><a href="bootstrap_table.php">View Program</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2025 Government Polytechnic College, Purapuzha</p>
        </div>
    </footer>

</body>
</html>
index.php
Displaying index.php.