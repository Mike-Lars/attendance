<?php
	include('includes/arrays.php');
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Alpha Omicron</title>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<style>
body{
	margin: 0px;
	border: 0px;
	padding-top: 100px;
	background-image: url("images/watfshot.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
	overflow-y: scroll;
}
#navbar{
	width: 100%;
	height: 40px;
	padding-top: 30px;
	background-color: black;
	color: white;
	position: fixed;
	opacity: 0.75;
	top: 0;
}

#navbar li{
	list-style:none; 
	display: inline;
}

#navbar ul{margin:0;
}

#linkref{
	color: white;
	text-decoration: none;
	padding: 15px;
	opacity: 0.75;
	font-family: "Open Sans";
	font-size: 24px;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	line-height: 26.4px;
	
}

#linkref:hover {
	opacity: 1;
}
</style>

</head>

<body>
<center>
<div id="navbar">
<?php include('includes/nav.php'); ?>
</div>
</center>