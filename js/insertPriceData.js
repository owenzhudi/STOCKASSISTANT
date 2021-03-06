function latestAndLowestPrices() {
	var xmlhttp;
	if(window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp = new XMLHttpRequest();
	} else {
		// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
    xmlhttp.onreadystatechange = function () {
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("price_table_body").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", "./DB_maintenance/getLatestAndLowestPrices.php", true);
    xmlhttp.send();
    // set time out to update in every 30 seconds
    var t = setTimeout("latestAndLowestPrices()", 30000);
}
window.onload = latestAndLowestPrices();