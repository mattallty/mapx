<?php
$xml = simplexml_load_file("../inc/countryInfo.xml");
$con = mysqli_connect("localhost", "root", "<pwd>");
$db = mysqli_select_db($con, "mapx");

$sql_tpl = "UPDATE _supa_geo_countries SET cou_continent = '%s', cou_capital = '%s', cou_square_km = %d, cou_population = %d WHERE cou_id = '%s'";

foreach ($xml as $key => $val) {
	
	$sql = sprintf(	$sql_tpl, 
		(string)$val->continent,
		(string)$val->capital,
		intval($val->areaInSqKm),
		intval($val->population),
		(string)$val->countryCode
	);
	
	echo "Executing $sql ... ";
	
	if(mysqli_query($con, $sql)) {
		echo "OK\n";
	}else{
		echo "ERR\n";
	}
	
}
?>
