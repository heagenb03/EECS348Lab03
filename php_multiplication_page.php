<html>
    <head>
        <title>Multiplication Table Page</title>
    </head>

    <body>
        <h1>Multiplication Table</h1>
        <form method="post" action="">
            Enter a number: <input type="number" name="number" required>
            <input type="submit" value="Generate Table">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = intval($_POST['number']);
                echo "<h2>Multiplication Table for $number</h2>";
                echo "<table border='1'>";
                for ($i = 1; $i <= 10; $i++) {
                    $result = $number * $i;
                    echo "<tr><td>$number x $i</td><td>$result</td></tr>";
                }
                echo "</table>";
            }
        ?>
    </body>
</html>