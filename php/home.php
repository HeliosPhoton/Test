<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" type="text/css" href="../css/cesweb.css">
<script type="text/javascript" src="../js/switchcontent.js"></script>
<script type="text/javascript" src="../js/switchicon.js"></script>
<script type="text/javascript">
	var alerttable=new switchicon("alertgroup1", "div") //Limit scanning of switch contents to just "div" elements
	alerttable.setHeader('[Hide]', '[Show]') //Set header HTML
	alerttable.collapsePrevious(false) //Allow more than 1 content to be open simultanously
	alerttable.setPersist(true, 14) //Enable persistence to remember last switch content states for 7 days
	alerttable.defaultExpanded(0,1,2,3)
	alerttable.init()
</script>
<style type="text/css">
table.sub_cat_data {
	border-width:1px;
	border-spacing:2px;
	border-color:black;
	border-style:inset;
}
table.sub_cat_data th {
	border-width:1px;
	padding:1px;
	border-color:black;
	border-style:inset;
}
table.sub_cat_data td {
	border-width:1px;
	padding:1px;
	border-color:black;
	border-style:inset;
}
</style>
<meta http-equiv="refresh" content="300">
<meta http-equiv="content-type"	content="text/html;charset=utf-8">
<meta name="author" content="Clay Shekleton (clay.shekleton@ticketmaster.com)">
</head>
<body>
<?php
require_once("client_alert_functions.php");

echo "<table class=\"sum_table\">\n";
echo "\t<tr class=\"cat_hdr\"><td><span id=\"alerttable1-title\" class=\"titlespan\"></span>TMCRM Data Pull Info</td></tr>\n";
echo "\t<tr class=\"cat_data\">\n";
echo "\t\t<td><div id=\"alerttable1\" class=\"alertgroup1\">\n";
	tmcrm_pulls();
echo "\t\t</div></td>\n";
echo "\t</tr>\n";
echo "</table>\n";

echo "<table class=\"sum_table\">\n";
echo "<tr class=\"cat_hdr\"><td><span id=\"alerttable2-title\" class=\"titlespan\"></span>Critical Client Alerts <small>(<span id=\"critnum\"></span>)</small></td></tr>\n";
echo "<tr class=\"cat_data\"><td><div id=\"alerttable2\" class=\"alertgroup1\">\n";
	all_crit_alerts();
echo "</div></td></tr>\n";
echo "</table>\n";

echo "<table class=\"sum_table\">\n";
echo "<tr class=\"cat_hdr\"><td><span id=\"alerttable3-title\" class=\"titlespan\"></span>Miscellaneous Client Alerts <small>(<span id=\"miscnum\"></span>)</small></td></tr>\n";
echo "<tr class=\"cat_data\"><td><div id=\"alerttable3\" class=\"alertgroup1\">\n";
	all_misc_alerts();
echo "</div></td></tr>\n";
echo "</table>\n";

/*  //REMOVED CONNECTIVITY ALERTS 2008-01-28. PAGES NO LONGER IN EXISTENCE.
echo "<table class=\"sum_table\">";
echo "<tr class=\"cat_hdr\"><td><span id=\"alerttable4-title\" class=\"titlespan\"></span>Connectivity Alerts <small>(<span id=\"connnum\"></span>)</small></td></tr>\n";
echo "<tr class=\"cat_data\"><td><div id=\"alerttable4\" class=\"alertgroup1\">\n";
	connectivity();
echo "</div></td></tr>\n";
echo "</table>\n";
*/

echo "<table class=\"sum_table\">\n";
echo "<tr class=\"cat_hdr\"><td><span id=\"alerttable5-title\" class=\"titlespan\"></span>Upcoming New Client Installs <small>(<span id=\"newnum\"></span>)</small></td></tr>\n";
echo "<tr class=\"cat_data\"><td><div id=\"alerttable5\" class=\"alertgroup1\">\n";
	new_client_installs();
echo "</div></td></tr>\n";
echo "</table>\n";

//Clocks
echo "<div><object name=\"clocks\" data=\"clocks.php\" type=\"text/html\" style=\"width:100%;\"></object></div>";

/*
if($_COOKIE['tmcrm_username'] == "BPAZ"){
	echo "<a href='integration_index.php'>Integration Index</a><br/>";
	echo "<a href='assign_infra_to.php'>Assign Infra To</a><br/>";
}
*/
?>
</body>
</html>
