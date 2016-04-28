<?php
/**
 * Created by PhpStorm.
 * User: Syrup
 * Date: 16/4/27
 * Time: 下午8:29
 */


    include_once '../classes/dbConnection.php';
    include_once '../classes/query.php';


    //instantiate necessary objects
    $dbConnection = new dbConnection();
    $query = new query();
    //conect to database
    $dbConnection->connect();
    //get stockID and ticker of all stocks
    $dbConnection->prepare($query->getLowerThanGoogle());
    $results = $dbConnection->resultset();
    //disconnect from database
    $dbConnection->disconnect();
    foreach ($results as $stock) {
        echo "<tr>";
        echo "<td>" . $stock['StockID'] . "</td>";
        echo "<td>" . $stock['Company'] . "</td>";
        echo "</tr>";
    }
?>