<ul>
<?php
	foreach ($navItems as $item) {
		echo"<li><a href=" . $item[slug] . " id='linkref'>" . $item[title] . "</a></li>";
	}
	echo "<br><br>"
?>
</ul>