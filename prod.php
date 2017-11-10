<?php
session_start();
?>

<?php
$prd = $_REQUEST[prd];

if ($prd == "") {
	$prd = "recon";
}
?>
<html>
<head>
<title>Midwest Switchgear : Products and Services</title>
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
		<?php include"includes/nav_prod.php"; ?>
		<td><?php include($prd . ".php"); ?></td>
		<td></td>
	</tr>
	<tr>
	<?php include"includes/footer.php"; ?>
	</tr>
</table>
</body>
</html>
