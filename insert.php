<?php 

require "vendor/autoload.php";

use Amp\Mysql\MysqlConfig;
use Amp\Mysql\MysqlConnectionPool;

$config = MysqlConfig::fromString(
    "host=localhost user=root password=root db=testdb"
);

$pool = new MysqlConnectionPool($config);
//$pool = new PDO("mysql:host=localhost;dbname=testdb,","root","root");


$values = [];
for ($x = 0; $x < 900000; $x++) {
    $values[] = "('black')";
}

// Split into chunks to avoid memory issues for very large datasets
$chunkSize = 1000; // Insert 1000 rows at a time
$chunks = array_chunk($values, $chunkSize);

foreach ($chunks as $chunk) {
    $sql = "INSERT INTO test (name) VALUES " . implode(",", $chunk);
    $pool->execute($sql); // Execute the bulk query
    echo "Inserted " . count($chunk) . " rows.\n";
}