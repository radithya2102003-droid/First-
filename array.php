<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 3: Two Dimensional Array</title>
    <style>
        <style>
    :root {
        --primary-color: #2563eb;
        --secondary-color: #f1f5f9;
        --text-color: #333;
    }

    body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f8fafc;
        color: var(--text-color);
    }

    header {
        background: var(--primary-color);
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    .container {
        width: 85%;
        max-width: 1000px;
        margin: 30px auto;
    }

    h1, h3 {
        margin: 0;
    }

    .program-list {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        padding: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 15px;
        overflow: hidden;
        border-radius: 8px;
    }

    thead {
        background: var(--primary-color);
        color: white;
    }

    th, td {
        padding: 12px 15px;
        text-align: center;
    }

    th {
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    tbody tr {
        border-bottom: 1px solid #e2e8f0;
        transition: background 0.2s ease;
    }

    tbody tr:nth-child(even) {
        background-color: var(--secondary-color);
    }

    tbody tr:hover {
        background-color: #e0f2fe;
    }

    a {
        display: inline-block;
        margin-top: 20px;
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 500;
    }

    a:hover {
        text-decoration: underline;
    }
</style>
    </style>
    
</head>
<body>
    <header>
        <div class="container">
            <h1>Two Dimensional Array</h1>
            <p>Module 1 - Program 3</p>
        </div>
    </header>

    <div class="container">
        <div class="program-list" style="padding: 20px;">
            <h3>Student Details List</h3>
            <?php
            // 2D Indexed Array
            $students = array(
                array("27", "Vaishnav P M", "S4 IF", "2021", "Calicut"),
                array("23", "Mohammed Nihal", "S4 IF", "2021", "Malappuram"),
                array("26", "Sooraj Suseel", "S4 IF", "2021", "Alappuzha"),
                array("29", "Nooah C S", "S4 IF", "2021", "Muvattupuzha"),
                array("28", "Abdul Rahman Ansar", "S4 IF", "2021", "Muvattupuzha")
            );
            ?>

            <table>
                <thead>
                    <tr>
                        <th>Roll No</th>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Year</th>
                        <th>Place</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($students as $student) {
                        echo "<tr>";
                        foreach($student as $detail) {
                            echo "<td>$detail</td>";
                        }
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <a href="index.php" style="color: var(--primary-color); text-decoration: none;">&larr; Back to Index</a>
        </div>
    </div>
</body>
</html>
