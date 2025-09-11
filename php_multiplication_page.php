<html>
    <head>
        <title>Multiplication Table Page</title>
        <link rel="stylesheet" href="styles.css">
    </head>

    <body>
        <h1>Multiplication Table</h1>
        <form method="post" action="">
            Enter a number: <input type="number" name="number" required>
            <input type="submit" value="Generate Table">
        </form>

        <a href="index.html">Back to Home</a>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user_number = intval($_POST['number']);
                echo "<h2>Multiplication Table from 1x1 to {$user_number}x{$user_number}</h2>";
                echo "<table border='1'>";
                
                echo "<tr>";
                echo "<th>X</th>";
                for ($num = 1; $num <= $user_number; $num++) {
                    echo "<th>$num</th>";
                }
                echo "</tr>";

                for ($row = 1; $row <= $user_number; $row++) {
                    echo "<tr>";
                    echo "<th>$row</th>";
                    for ($col = 1; $col <= $user_number; $col++) {
                        $result = $row * $col;
                        echo "<td>$result</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>
    </body>
</html>