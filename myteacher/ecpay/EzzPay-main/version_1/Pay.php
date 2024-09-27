<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="post">
		<input type="text" name="trade_id">
		<input type="text" name="total_amount">
		<input type="text" name="trade_description">
		<input type="submit">
	</form>
	<?php
	require_once("PayController.php");
	$trade_id       = $_POST['trade_id'];
	$totalAmount    = $_POST['total_amount'];
	$tradeDesc      = $_POST['trade_description'];
	ecPay::Pay($trade_id, $totalAmount, $tradeDesc);
	?>
</body>
</html>