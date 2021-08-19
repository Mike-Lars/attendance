<?php
	include('includes/header.php');
?>

<!doctype html>
<html>
<body>
<center>
<h2>Comments</h2>
<p>All fields required</p>
<form action="contactstep2.php" method="post">
<p><b>Your Name: </b> <br><input type="text" name="yourname" /><br />
<b>E-mail: </b> <br><input type="text" name="email" /><br />
<b>Subject: </b> <br><input type="text" name="subject" /><br />

<p><b>Your comments: </b><br />
<textarea name="comments" rows="10" cols="40"></textarea></p>

<p><input type="submit" value="Send"></p>
</center>
</form>

</body>
</html>

<?php
	include('includes/footer.php');
?>