<?php
require_once "config01.php";

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host={$config['host']};dbname={$config['database']}", $config['username'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Query to retrieve data
$query = "SELECT name, quantity FROM stock_avail";

try {
    $stmt = $pdo->query($query);

    // Check if the query returned any rows
    if ($stmt->rowCount() > 0) {
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } else {
        die("No data retrieved. Rows count: " . $stmt->rowCount());
    }
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}

// Transform the PHP array to JavaScript
echo "<script>var my_2d = " . json_encode($data) . ";</script>";
?>

<!-- HTML content -->
<html>
<head>
    <title>Pie Chart Example</title>
</head>
<body>
    <div id="chart_div"></div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(draw_my_chart);

        function draw_my_chart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Product');
            data.addColumn('number', 'Quantity');

            for (var i = 0; i < my_2d.length; i++) {
                data.addRow([my_2d[i].name, parseInt(my_2d[i].quantity)]);
            }

            var options = {
                title: 'Stock Quantity by Product',
                width: 600,
                height: 500,
                is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</body>
</html>
