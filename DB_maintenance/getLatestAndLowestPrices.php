<?php
/**
 * Created by PhpStorm.
 * User: Di Zhu
 * Date: 16/4/25
 */
    include_once '../classes/dbConnection.php';
    include_once '../classes/query.php';
    //include_once '../classes/stockRetriever.php';
    //include_once '../classes/stockExtractor.php';

    //instantiate necessary objects
    $dbConnection = new dbConnection();
    $query = new query();
    $stockRetriever = new stockRetriever();
    $stockExtractor = new stockExtractor();

    //conect to database
    $dbConnection->connect();
    //get stockID and ticker of all stocks
    $dbConnection->prepare($query->getLatestAndLowestPrice());
    $results = $dbConnection->resultset();
    //disconnect from database
    $dbConnection->disconnect();
    foreach ($results as $stock) {
        echo "<tr>";
        echo "<td>" . $stock['Ticker'] . "</td>";
        echo "<td>" . $stock['Price'] ."</td>";
        echo "<td>" . $stock['LowestPrice'] . "</td>";
        echo "</tr>";
    }
?>