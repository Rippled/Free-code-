<?php
//This function accepts the date in mysql format i.e 2016-01-01
function datediff($date1,$date2) {
	$date1 = date_create($date1);
	$date2 = date_create($date2);
	$diff = date_diff($date1,$date2);
	return $diff->format("%a");
}
?>
