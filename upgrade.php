<?php
session_start();

$q = !empty($_GET['q']) ? $_GET['q'] : 'low-voltage';
?>

<html>
<head>
<title>Midwest Switchgear : Upgrade Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="midwest.css" rel="stylesheet" type="text/css">
<script src="includes/mw.js"></script>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<?php include"includes/header.php"; ?>
	</tr> 
	<tr> 
		<td style="height:450px;"></td>
		<?php include("upgrades/" . $q . ".php"); ?>
		<td></td>
	</tr>
	<tr>
	<?php include"includes/footer.php"; ?>
	</tr>
</table>
</body>
</html>
