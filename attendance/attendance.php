<?php
	include('includes/header.php');
?>

<!doctype html>
<html>
<head><meta charset="utf-8">
<title>Chapter Attendance</title></head>
	<center><h2>Chapter Attendance</h2>
	<form action="attendance.cgi" method="get">
	<p><b><font size="3">Your Name:</font><br><input type="text" name="name"></b></p>
	<p><b><font size="3">AO (if applicable):</font><br><input type="text" name="ao"></b></p>
	<p><b><font size="3">Validation Code:</font><br><input type="text" name="validation"></b></p>

	<input type="submit" value="Submit"></center>
	</form>
    </body>
</html>

<?php
	include('includes/footer.php');
?>

