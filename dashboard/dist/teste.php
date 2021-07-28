<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
$date1=date_create("21-04-09");
$date2=date_create("21-04-08");
$diff=date_diff($date1,$date2);
echo $diff->format("%R%a days");
?>

</body>
</html>