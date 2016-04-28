<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: Syrup-->
<!-- * Date: 16/4/25-->
<!-- * Time: 下午4:29-->
<!-- */-->
<!--companies along with their name who have the average stock price lesser than the lowest of Google in the latest one year-->
<!DOCTYPE html>
<?php
 session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>StockAssistant Search</title>
    <link rel="stylesheet" href="stylesheets/search.css" type="text/css" />
    <?php include_once 'head.php' ?>
    <script type="text/javascript" src='https://www.google.com/jsapi?autoload={"modules":[{"name":"visualization","version":"1","packages":["annotationchart"]}]}'></script>
    <script type="text/javascript" src="js/charts_search.js"></script>
    <script type="text/javascript" src="js/light.js"></script>


</head>
<body>
<script src="js/light.js"></script>

<?php include_once("header.php"); ?>
<div id="container">
    <div id = "update">
        <!--
        <form onclick="lowerThanG()" >
            <input type="button" id="button_update_current" class="button button_search" name="update" value="get" />
        </form>form
        -->
        <!--
        <form onclick="latestAndLowestPrices()">
            <input type="button" id="button_update_history" class="button button_search" name="daily update" value="daily-up" />
        </form>
        -->

    </div>
    <table class="table table-striped">
        <caption>companies who have the average stock price lesser than the lowest of Google in the latest one year
        </caption>
        <thead>
        <tr>
            <th>company name</th>
            <th>ave price</th>
            <th></th>

        </tr>
        </thead>
        <tbody id="lower_table_body">

        </tbody>
    </table>
</div>

</div>
<?php include_once('footer.php'); ?>
</body>
</html>

