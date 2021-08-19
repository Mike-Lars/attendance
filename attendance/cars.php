<?php
	include('includes/header.php');
?>

<!doctype html>
<html>
<head><meta charset="utf-8">
<title>Parking Lot</title>
<style>
#hours24 {
	color:
}
#
</style>
</head>
<body>
<center><h2>Parking Lot</h2><img src="images/cars.jpg" alt="Cars" border='5'>

<h2>Towing Service Contact Information</h2>
<h3>If the situation is truly out of hand, feel free to contact one of the following companies</h3><br>

<p><b>~ Bloomington Wrecker Service ~</b></p>
<p>(812) 558-5949</p>


	<?php
	//24 Hour Store Schedule
	$storeSchedule = [
		'Sun' => ['00:01 AM' => '11:59 PM'],
		'Mon' => ['00:01 AM' => '11:59 PM'],
		'Tue' => ['00:01 AM' => '11:59 PM'],
		'Wed' => ['00:01 AM' => '11:59 PM'],
		'Thu' => ['00:01 AM' => '11:59 PM'],
		'Fri' => ['00:01 AM' => '11:59 PM'],
		'Sat' => ['00:01 AM' => '11:59 PM']
	];
	//You then loop over the current day's time range(s) and check to see if the current time or supplied timestamp is within a range. You do this by using the DateTime class to generate a DateTime object for each time range's start/end time.

	//The below will do this and allow you to specify a timestamp in case you are wanting to check a supplied timestamp instead of the current time.

	// current or user supplied UNIX timestamp
	$timestamp = time();

	// default status
	$status = 'closed';

	// get current time object
	$currentTime = (new DateTime())->setTimestamp($timestamp);

	// loop through time ranges for current day
	foreach ($storeSchedule[date('D', $timestamp)] as $startTime => $endTime) {

		// create time objects from start/end times
		$startTime = DateTime::createFromFormat('h:i A', $startTime);
		$endTime   = DateTime::createFromFormat('h:i A', $endTime);

		// check if current time is within a range
		if (($startTime < $currentTime) && ($currentTime < $endTime)) {
			$status = 'open';
			break;
		}
	}
	if ($status == 'open') {
		echo "Currently: <b><font color='green'>open</font></b><br>";
	}
	if ($status == 'closed') {
		echo "Currently: <b><font color='red'>closed</font></b><br>";
	}

	?>


<br>

<p><b>~ Fleetwood's Towing ~</b></p>
<p>(812) 332-8821</p>


	<?php
	//7am-5pm Hour Store Schedule
	$storeSchedule = [
		'Sun' => ['07:00 AM' => '05:00 PM'],
		'Mon' => ['07:00 AM' => '05:00 PM'],
		'Tue' => ['07:00 AM' => '05:00 PM'],
		'Wed' => ['07:00 AM' => '05:00 PM'],
		'Thu' => ['07:00 AM' => '05:00 PM'],
		'Fri' => ['07:00 AM' => '05:00 PM'],
		'Sat' => ['07:00 AM' => '05:00 PM']
	];
	//You then loop over the current day's time range(s) and check to see if the current time or supplied timestamp is within a range. You do this by using the DateTime class to generate a DateTime object for each time range's start/end time.

	//The below will do this and allow you to specify a timestamp in case you are wanting to check a supplied timestamp instead of the current time.

	// current or user supplied UNIX timestamp
	$timestamp = time();

	// default status
	$status = 'closed';

	// get current time object
	$currentTime = (new DateTime())->setTimestamp($timestamp);

	// loop through time ranges for current day
	foreach ($storeSchedule[date('D', $timestamp)] as $startTime => $endTime) {

		// create time objects from start/end times
		$startTime = DateTime::createFromFormat('h:i A', $startTime);
		$endTime   = DateTime::createFromFormat('h:i A', $endTime);

		// check if current time is within a range
		if (($startTime < $currentTime) && ($currentTime < $endTime)) {
			$status = 'open';
			break;
		}
	}
	if ($status == 'open') {
		echo "Currently: <b><font color='green'>open</font></b><br>";
	}
	if ($status == 'closed') {
		echo "Currently: <b><font color='red'>closed</font></b><br>";
	}

	?>


<br>

<p><b>~ Bland's Wrecker Services ~</b></p>
<p>(812) 336-0398</p>


	<?php
	//24 Hour Store Schedule
	$storeSchedule = [
		'Sun' => ['00:01 AM' => '11:59 PM'],
		'Mon' => ['00:01 AM' => '11:59 PM'],
		'Tue' => ['00:01 AM' => '11:59 PM'],
		'Wed' => ['00:01 AM' => '11:59 PM'],
		'Thu' => ['00:01 AM' => '11:59 PM'],
		'Fri' => ['00:01 AM' => '11:59 PM'],
		'Sat' => ['00:01 AM' => '11:59 PM']
	];
	//You then loop over the current day's time range(s) and check to see if the current time or supplied timestamp is within a range. You do this by using the DateTime class to generate a DateTime object for each time range's start/end time.

	//The below will do this and allow you to specify a timestamp in case you are wanting to check a supplied timestamp instead of the current time.

	// current or user supplied UNIX timestamp
	$timestamp = time();

	// default status
	$status = 'closed';

	// get current time object
	$currentTime = (new DateTime())->setTimestamp($timestamp);

	// loop through time ranges for current day
	foreach ($storeSchedule[date('D', $timestamp)] as $startTime => $endTime) {

		// create time objects from start/end times
		$startTime = DateTime::createFromFormat('h:i A', $startTime);
		$endTime   = DateTime::createFromFormat('h:i A', $endTime);

		// check if current time is within a range
		if (($startTime < $currentTime) && ($currentTime < $endTime)) {
			$status = 'open';
			break;
		}
	}
	if ($status == 'open') {
		echo "Currently: <b><font color='green'>open</font></b>";
	}
	if ($status == 'closed') {
		echo "Currently: <b><font color='red'>closed</font></b>";
	}

	?>


	
</center>
</body>
</html>

<?php
	include('includes/footer.php');
?>