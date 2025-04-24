<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <?php
    if (isset($_POST["number"])) {
        $number = intval($_POST["number"]);
        echo "<h2>Multiplication Table up to $number</h2>";
        echo "<table border='1' cellpadding='5'>";

        echo "<tr><th>*</th>";
        for ($col = 1; $col <= $number; $col++) echo "<th>$col</th>";
        echo "</tr>";

        for ($row = 1; $row <= $number; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $number; $col++) echo "<td>" . ($row * $col) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>Please enter a positive integer.</p>";
    }
    ?>
</body>
</html>