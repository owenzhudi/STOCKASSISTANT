<?php
session_start();

if (isset($_SESSION['sess_ID'])) {
include_once '../classes/dbConnection.php';
include_once '../classes/query.php';

$query = new query();
$dbConnection = new dbConnection();

$userID = $_SESSION['sess_ID'];
$stockID = $_POST['stockID'];

$dbConnection->connect();
$dbConnection->prepare($query->removeTrackedStock());
$dbConnection->bind(1, $userID);
$dbConnection->bind(2, $stockID);
$dbConnection->execute();
$dbConnection->disconnect();
}
?>