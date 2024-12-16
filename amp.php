<?php 

require "vendor/autoload.php";

use Amp\Mysql\MysqlConfig;
use Amp\Mysql\MysqlConnectionPool;

$config = MysqlConfig::fromString(
    "host=localhost user=root password=root db=testdb"
);

$pool = new MysqlConnectionPool($config);
//$pool = new PDO("mysql:host=localhost;dbname=testdb,","root","root");


for($x = 0; $x < 10000; $x++){

    $statement = $pool->prepare("SELECT * FROM bet");
    $result = $statement->execute();
    foreach ($result as $row) {
        // $row is an associative-array of column values, e.g.: $row['column_name']
        echo $row['bet_amount'] . PHP_EOL;
    }
    echo " --------- " . $x . "__________";
}