<?php
require "config01.php";

try {
    $pdo = new PDO("mysql:host={$config['host']};dbname={$config['database']}", $config['username'], $config['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "SELECT category_name, SUM(quantity) as total_quantity 
              FROM stock_details s
              JOIN stock_avail sa ON s.stock_id = sa.id
              GROUP BY category_name";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        echo json_encode($result);
    } else {
        echo "No data retrieved.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
