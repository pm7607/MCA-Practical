<!DOCTYPE html>
<html>
<head>
    <title>Read CSV</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
    </style>
</head>
<body>
    <h2>CSV File Data:</h2>
    <table>
        <?php
        $csvFile = "data.csv";

        if (($handle = fopen($csvFile, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                echo "<tr>";
                foreach ($data as $cell) {
                    echo "<td>" . htmlspecialchars($cell) . "</td>";
                }
                echo "</tr>";
            }
            fclose($handle);
        } else {
            echo "<tr><td>CSV file not found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

